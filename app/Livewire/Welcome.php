<?php

namespace App\Livewire;

use Livewire\Component;

class Welcome extends Component
{
    public $numb=0;

    public function add(){
        ++$this->numb;
    }
    public function render()
    {
        return view('welcome');
    }
}
