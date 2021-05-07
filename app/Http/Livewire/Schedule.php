<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Schedule extends Component
{
    public $schedule;

    public function mount($tour)
    {
        $this->schedule = $tour->fetchSchedule();
    }
    public function render()
    {
        return view('livewire.schedule',[
            'schedule' => $this->schedule
        ]);
    }
}
