<?php

namespace App\Http\Controllers;

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
    public function index(Request $request){
        $tours = Tour::paginate(10);
        $paginateLinks = $this->paginationLinks($tours);
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

    public function store(Request $request){
        Tour::create($request->all());

        return redirect(route('tours.index'));
    }

    function paginationLinks(LengthAwarePaginator $lengthAwarePaginator)
    {

        $window = UrlWindow::make($lengthAwarePaginator);

        $isCurrentPageSet = false;


        // dd($lengthAwarePaginator->toArray());

        $array =  array_filter([
            $window['first'],
            is_array($window['slider']) ? '...' : null,
            $window['slider'],
            is_array($window['last']) ? '...' : null,
            $window['last'],
        ]);
        $i = 1;
        foreach($array as $index => $urlsArray):

            if(is_array($urlsArray)):
                foreach($urlsArray as $pageNumber => $link):
                    $currentPage = $lengthAwarePaginator->currentPage();
                    $n[] = [
                        'pageNumber' => $pageNumber,
                        'url' => $link,
                        'indexKey' => $i,
                        'type' => 'URLS',
                        'isCurrentPage' => $currentPage === $pageNumber,
                    ];
                    $i++;
                endforeach;
            elseif(is_string($urlsArray)):
                $n[] = [
                    'url' => $urlsArray,
                    'indexKey' => $i,
                    'type' => 'ELIPSIS',
                ];
                $i++;
            endif;

        endforeach;

        return count($n) === 1 ? null : $n;
    }
}
