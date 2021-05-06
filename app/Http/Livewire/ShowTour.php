<?php

namespace App\Http\Livewire;

use App\Models\Tour;
use Livewire\Component;

class ShowTour extends Component
{
    public $tour;

    public function mount(Tour $tour){
        $this->tour = $tour;
    }

    public function render()
    {
        return view('livewire.show-tour');
    }
}
