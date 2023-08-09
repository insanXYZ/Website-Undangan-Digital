<?php

namespace App\Http\Livewire\Javva;

use App\Models\Comment;
use Livewire\Component;

class CreateJavva extends Component
{
    public $idPosts;

    public $nama;

    public $body;

    public $status;

    protected $listeners = [
        'resetInput' => 'resetInput',
    ];

    public function mount($posts)
    {
        $this->idPosts = $posts;
    }

    public function render()
    {
        return view('livewire.javva.create-javva');
    }

    public function store()
    {

        $this->validate([
            'nama' => 'required',
            'body' => 'required',
        ]);

        Comment::create([
            'nama' => $this->nama,
            'post_id' => $this->idPosts,
            'body' => $this->body,
            'status' => $this->status == null ? 'hadir' : $this->status,
        ]);

        $this->resetInput();

        $this->emit('commentStore');
    }

    public function resetInput()
    {
        $this->nama = '';
        $this->body = '';
    }
}
