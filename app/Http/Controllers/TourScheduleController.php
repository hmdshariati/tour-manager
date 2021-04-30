<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Inertia\Inertia;

class TourScheduleController extends Controller
{
    public function index(Tour $tour)
    {
        $schedule = $tour->fetchSchedule();
        if ($schedule) {
            $scheduleDetails = $schedule->scheduleDetails()->paginate(10);
            $paginateLinks = createPaginationLinks($scheduleDetails);
            return Inertia::render('Tours/Schedule', compact('tour','schedule', 'scheduleDetails', 'paginateLinks'));
        }else{
            return Inertia::render('Tours/Schedule', compact('tour','schedule'));
        }
    }
}
