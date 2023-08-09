<?php

namespace App\Http\Livewire\Luxus;

use App\Models\Comment;
use Livewire\Component;
use Livewire\WithPagination;

class CommentLuxus extends Component
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

    public function render()
    {
        $this->loadComments();

        return view('livewire.luxus.comment-luxus', [
            'comment' => $this->comment,
            'replies' => $this->replies,
        ]);
    }

    public function handleStore($store)
    {
        $this->loadComments();
    }
}
