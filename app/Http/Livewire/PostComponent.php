<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\models\post;

class PostComponent extends Component
{
    public function render()
    {
        return view('livewire.post-component',[
            'posts' => Post::orderBy('id','desc')->paginate()
        ]);
    }
}
