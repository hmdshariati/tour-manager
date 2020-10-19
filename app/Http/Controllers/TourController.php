<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class TourController extends Controller
{
    //
    public function index(Request $request){

        return Inertia::render('Tours/List',[
            'test'=>'test it'
        ]);
    }
}
