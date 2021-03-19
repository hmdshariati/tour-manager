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
        $schedules = $tour->schedule()->paginate(10);
        $paginateLinks = paginationLinks($schedules);
        return Inertia::render('Tours/Schedule',compact('schedules','paginateLinks'));
    }
}
