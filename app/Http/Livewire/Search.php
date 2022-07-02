<?php

namespace App\Http\Livewire;
use App\Models\Mystores;
use Livewire\Component;

class Search extends Component
{
    public $openMode=false;
    public $searchTerm;
    public function render()
    {
        $users=	Mystores::where(function($sub_query){
            $sub_query->where('brand', 'like', '%'.$this->searchTerm.'%')
                      ->orWhere('price', 'like', '%'.$this->searchTerm.'%');
                     // ->orWhere('id', 'like', '%'.$this->searchTerm.'%');
        });
        $this->openMode=true;
 //return view('welcome',['user'=>$users]);

    }
    
}
