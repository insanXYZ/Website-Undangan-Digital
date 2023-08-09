<?php

namespace App\Http\Livewire\Luxus;

use App\Models\Comment;
use Livewire\Component;

class CreateLuxus extends Component
{
    public $idPosts;

    public $nama;

    public $body;

    public $status;

    public $parent_id;

    protected $listeners = [
        'setParentId' => 'handleSetParentId',
        'resetInput' => 'resetInput',
    ];

    public function mount($posts)
    {
        $this->idPosts = $posts;
    }

    public function render()
    {
        return view('livewire.luxus.create-luxus');
    }

    public function store()
    {

        $this->validate([
            'nama' => 'required',
            'body' => 'required',
        ]);

        $store = Comment::create([
            'nama' => $this->nama,
            'post_id' => $this->idPosts,
            'body' => $this->body,
            'parent_id' => $this->parent_id ? $this->parent_id : null,
            'status' => $this->status == null ? 'hadir' : $this->status,
        ]);

        $this->resetInput();

        $this->emit('commentStore', $store);
    }

    public function resetInput()
    {
        $this->nama = '';
        $this->body = '';
        $this->parent_id = '';
    }

    public function handleSetParentId($id)
    {
        $this->parent_id = $id;
    }
}
