<?php

namespace App\Http\Livewire\Simplify;

use App\Models\Comment;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;

class CommentSimplify extends Component
{
    protected $comment;

    public $replies;

    public $idPosts;

    use WithPagination;

    protected $paginationTheme = 'custom';

    protected $listeners = [
        'commentStore' => 'handleStore',
    ];

    public function mount($posts)
    {
        $this->idPosts = $posts;
        $this->loadComments();
    }

    public function loadComments()
    {
        $this->comment = Comment::whereNull('parent_id')
            ->where('post_id', $this->idPosts)
            ->latest()
            ->paginate(10);

        $this->replies = Comment::whereNotNull('parent_id')
            ->where('post_id', $this->idPosts)
            ->latest()
            ->get();
    }

    public function render(Request $request)
    {
        $this->loadComments();

        return view('livewire.simplify.comment-simplify', [
            'comment' => $this->comment,
            'replies' => $this->replies,
            'id' => $this->idPosts,
        ]);
    }

    public function handleStore($store)
    {
        $this->loadComments();
    }
}
