<?php

namespace App\Livewire;

use App\Models\Unit;
use Livewire\Component;

class SearchPage extends Component
{

    public $floor = 0;
    public $bedrooms = 0;
    public $min_price = 0;
    public $max_price = 9999999999;
    public $units;


    public function mount(){
        $this->units = Unit::all();
    }

    public function search(){

        $units = Unit::where('price', '>=' ,$this->min_price)->where('price','<', $this->max_price);

        if( $this->floor != 0 ){
            $units = $units->where('floor', $this->floor);
        }


        if( $this->bedrooms != 0 ){

            $units = $units->where('bedrooms', $this->bedrooms);            
        }


        $this->units = $units->get();

        $this->dispatch('close-modal');
    }

    public function render()
    {
        return view('livewire.search-page')->layout('layouts.app');
    }
}
