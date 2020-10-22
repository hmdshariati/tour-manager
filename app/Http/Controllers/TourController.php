<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TourController extends Controller
{
    //
    public function index(Request $request){
Tour::create([
    'title' => 'test',
    'type' => 'golgasht',
    'code'=> 'tk-343',
    'relation'=>'ads.',
    'start'=>now(),
    'end'=>now(),
    'regional'=>'iranian',
    'services'=>"all things",
    'driver'=>"ali",
    'notes'=>'something'
]);
        return Inertia::render('Tours/List',[
            'test'=>Tour::all()
        ]);
    }
}
