<?php

namespace App\Listeners;

use App\Events\TourCreateEvent;

class TourCreateListener
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
     * @param TourCreateEvent $event
     * @return void
     */
    public function handle(TourCreateEvent $event)
    {
        $tour = $event->tour;
        if ($tour->schedule &&
            ($tour->schedule->start <> $tour->start ||
                $tour->schedule->end <> $tour->end)
        ) {
            $tour->schedule->delete();
        }
        $schedule = $tour->createSchedule();
        $schedule->createScheduleDetails();

    }
}
