<div>
    <div>
        {{$schedule->start}} - {{$schedule->end}}
        @livewire('tables.scheduledetails', ['params' => $schedule->id])
    </div>
</div>
