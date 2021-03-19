<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Tour;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TourScheduleController extends Controller
{
    public function index(Tour $tour)
    {
        $schedule = $tour->schedule;
        if(!$schedule){
            $tour->createSchedule();
        }
        if(!$schedule->sechduleDetails){
            $schedule->createScheduleDetails();
        }
        $scheduleDetails = $schedule->scheduleDetails()->paginate(10);
        $paginateLinks = paginationLinks($scheduleDetails);
        return Inertia::render('Tours/Schedule',compact('schedule','scheduleDetails','paginateLinks'));
    }
}
