<?php

namespace App\Http\Controllers;

use App\Events\TourCreateEvent;
use App\Http\Requests\TourStoreRequest;
use App\Http\Requests\TourUpdateRequest;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\UrlWindow;
use Inertia\Inertia;

class TourController extends Controller
{
    /**.
     * show all tours
     * @param Request $request
     * @return \Inertia\Response
     */
    public function index(Request $request)
    {
        $tours = Tour::paginate(10);
        $paginateLinks = createPaginationLinks($tours);
        return Inertia::render('Tours/List',compact('tours','paginateLinks'));
    }

    /**
     * Show the tour creation screen.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Inertia\Response
     */
    public function create(Request $request)
    {
        return Inertia::render('Tours/Create');
    }

    public function store(TourStoreRequest $request)
    {
        Tour::create($request->all());

        return redirect(route('tours.index'));
    }

    /**
     * @param Tour $tour
     * @return \Inertia\Response
     */
    public function edit(Tour $tour)
    {
        return Inertia::render('Tours/Edit',compact('tour'));
    }

    public function update(Tour $tour,TourUpdateRequest $request)
    {
        $tour->update($request->all());
        return redirect(route('tours.index'));
    }
}
