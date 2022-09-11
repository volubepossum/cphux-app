<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TableRow extends Component
{
    public $row;

    public function render()
    {
        return view('livewire.table-row');
    }
}
