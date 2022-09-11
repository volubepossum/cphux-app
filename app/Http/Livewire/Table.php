<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Table extends Component
{
    public $headers;
    public $rows;

    public function render()
    {
        return view('livewire.table');
    }
}
