<?php

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\UrlWindow;

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
