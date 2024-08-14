<?php

namespace App\Livewire;

use App\Models\Unit;
use Livewire\Component;

class InventoryPage extends Component
{
    public $oceanview_units;
    public $streetview_units;
    public $units;


    public function mount(){

        $this->oceanview_units = Unit::where('view', 'Vista al mar')->get();
        $this->streetview_units = Unit::where('view', 'Vista a la calle')->get();
        $this->units = Unit::all();

    }
    
    public function render()
    {
        return view('livewire.inventory-page')->layout('layouts.app');
    }
}
