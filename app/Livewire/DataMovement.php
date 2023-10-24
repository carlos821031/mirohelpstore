<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Movement;

class DataMovement extends Component
{    
    public function render()
    {
        $movements_all = Movement::all();

        return view('livewire.data-movement', compact('movements_all'));
    }
}
