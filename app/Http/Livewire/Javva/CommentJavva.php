<?php

namespace App\Http\Livewire\Javva;

use App\Models\Comment;
use Livewire\Component;
use Livewire\WithPagination;

class CommentJavva extends Component
{
    protected $comment;

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
    }

    public function render()
    {
        $this->loadComments();

        return view('livewire.javva.comment-javva', [
            'comment' => $this->comment,
        ]);
    }

    public function handleStore()
    {
        $this->loadComments();
    }
}
