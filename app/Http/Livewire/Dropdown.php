<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dropdown extends Component
{
    public $title;
    public $options;


    public function render()
    {
        return view('livewire.dropdown');
    }
}
