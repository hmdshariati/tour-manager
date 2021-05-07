<?php

namespace App\Http\Livewire\Tables;

use App\Models\Schedule;
use App\Models\Scheduledetail;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class Scheduledetails extends LivewireDatatable
{

    public function builder()
    {
        return Scheduledetail::where('schedule_id', $this->params);

    }

    public function columns()
    {
        return [
            Column::name('date')
                ->label('date'),
            Column::name('note')
                ->label('note')
                ->editable(),
            Column::name('meal')
                ->label('meal')
                ->editable(),
            Column::name('camp')
                ->label('camp')
                ->editable(),
            Column::name('attention')
                ->label('attention')
                ->editable(),
        ];
    }
}
