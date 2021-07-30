<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Tour extends Component
{
    public $start, $end, $title, $type, $code, $relation;

    public function createTour()
    {
        \App\Models\Tour::create([
            'title' => $this->title,
            'code' => $this->code,
            'type' => $this->type,
            'start' => $this->start,
            'end' => $this->end,
        ]);

    }

    public function render()
    {
        return view('livewire.tour');
    }

}
