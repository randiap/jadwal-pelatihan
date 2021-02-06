<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class Posts extends Component
{
    public $posts;
    public $isOpen = 0;
    public $postId, $pelatihan, $materi, $hari, $jam, $instruktur;
                                                                                           
    public function render()
    {
        $this->posts = Post::all();

        return view('livewire.posts');
    }

    public function showModal (){
        $this->isOpen = true;
    }
    public function hideModal (){
        $this->isOpen = false;
    }
    public function store (){
        $this->validate(
            [
                'pelatihan' => 'required',
                'materi' => 'required',
                'hari' => 'required',
                'jam' => 'required',
                'instruktur' => 'required',
            ]
        );

        Post::updateOrCreate(['id' => $this->postId], [
            'pelatihan' => $this-> pelatihan,
            'materi' => $this-> materi,
            'hari' => $this-> hari,
            'jam' => $this-> jam,
            'instruktur' => $this-> instruktur
        ]);

        $this-> hideModal();

        $this-> postId = '';
        $this-> pelatihan = '';
        $this-> materi = '';
        $this-> hari = '';
        $this-> jam = '';
        $this-> instruktur = '';
    }
}
