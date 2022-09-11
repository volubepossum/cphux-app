<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TableHeader extends Component
{
    public $headers;

    public function render()
    {
        return view('livewire.table-header');
    }
}
