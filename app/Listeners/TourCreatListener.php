<?php

namespace App\Listeners;

use App\Events\TourCreateEvent;
use App\Models\Tour;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class TourCreatListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  TourCreateEvent  $event
     * @return void
     */
    public function handle(TourCreateEvent $event)
    {
        $tour = $event->tour;
        if($tour->schedule->start <> $tour->start){
            $tour->schedule->delete();
            $tour->createSchedule();
        }
    }
}
