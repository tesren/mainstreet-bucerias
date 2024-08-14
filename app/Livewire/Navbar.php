<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\ConstructionUpdate;

class Navbar extends Component
{

    public $unit_name = '1.1';

    #[On('nombre-unidad')] 
    public function updateUnit($name)
    {
        $this->unit_name = $name;
    }

    public function render()
    {
        return view('livewire.navbar');
    }
}
