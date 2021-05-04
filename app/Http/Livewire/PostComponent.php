<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\models\post;
use Illuminate\Pagination\Paginator;
use Livewire\WithPagination;



class PostComponent extends Component
{
   
    protected $paginationTheme = 'bootstrap';
    use WithPagination;

    public $nome, $fone;
    public $view ='create';

    public function render()
    {
        
        return view('livewire.post-component',[
            'posts' => Post::orderBy('id','desc')->paginate(7)
        ]);
    }

    public function store(){
        $this->validate(['nome' => 'required', 'fone'=>'required']);
        Post::create([
            'nome' => $this->nome,
            'fone' => $this->fone
        ]);
    }
    public function destroy($id){
        Post::destroy($id);
    }
}
