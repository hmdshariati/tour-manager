<div>
    <div>
        @if($schedule)
            {{$schedule->start}} - {{$schedule->end}}
            @livewire('tables.scheduledetails', ['params' => $schedule->id])
        @endif
    </div>
</div>
