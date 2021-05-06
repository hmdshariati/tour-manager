<?php

namespace App\Http\Livewire;

use App\Models\Tour;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Dashboard extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function edit($id)
    {
        $this->redirect('/tours/$id');
    }

//    protected $queryString = ['tour_id'];

    public function render()
    {
        return view('livewire.dashboard',[
            'tours' => Tour::paginate(10)
        ]);
    }
}
