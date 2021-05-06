<?php

namespace App\Http\Livewire\Tables;

use App\Models\Tour;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class Tours extends LivewireDatatable
{
    public function builder()
    {
        return Tour::query();
    }

    public function columns()
    {
        return [
            NumberColumn::name('id')
                ->label('ID'),

            Column::name('title')
                ->label('Title'),

            Column::name('type')
                            ->label('type'),

            Column::name('starter_id')
                ->label('starter'),

            Column::callback(['id', 'title'], function ($id, $name) {
                return view('table-actions',compact('id','name'));
            })

        ];
    }
}
