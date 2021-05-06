<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class Tours extends Component
{
    public $tour, $title, $type, $code, $relation;

    public function mount($tour)
    {
        $this->tour = $tour;
        $this->title = $tour->title;
        $this->type = $tour->type;
        $this->code = $tour->code;
        $this->relation = $tour->relation;
    }

    public function changeProp()
    {
        $tour = $this->tour;
        $tour->update([
            'title' => $this->title,
            'code' => $this->code,
            'type' => $this->type,
            'relation' => $this->relation,
        ]);

    }
    public function render()
    {
        return view('livewire.tours');
    }
}
