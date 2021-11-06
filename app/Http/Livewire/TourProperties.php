<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class TourProperties extends Component
{
    public $tour, $title, $type, $code, $relation, $start, $end;

    public function mount($tour)
    {
        $this->tour = $tour;
        $this->title = $tour->title;
        $this->type = $tour->type;
        $this->code = $tour->code;
        $this->relation = $tour->relation;
        $this->start = $tour->start;
        $this->end = $tour->end;
    }

    public function changeProp()
    {
        $tour = $this->tour;
        $tour->update([
            'title' => $this->title,
            'code' => $this->code,
            'type' => $this->type,
            'relation' => $this->relation,
            'start' => $this->start,
            'end' => $this->end,
        ]);
        $this->dispatchBrowserEvent('close-update');
    }
    public function render()
    {
        return view('livewire.tour-properties');
    }
}
