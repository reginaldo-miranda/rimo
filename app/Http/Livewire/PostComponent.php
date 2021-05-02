<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\models\post;
/*use Illuminate\Pagination\Paginator;? */
use Livewire\WithPagination;



class PostComponent extends Component
{
    use WithPagination;

    public function render()
    {
        

        return view('livewire.post-component',[
            'posts' => Post::orderBy('id','desc')->paginate()
        ]);
    }
    public function destroy($id){
        Post::destroy($id);
    }
}
