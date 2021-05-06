<div x-data="{ tab: 'prop' }">
    <button :class="{ 'active': tab === 'prop' }" @click="tab = 'prop'">tour properties</button>
    <button :class="{ 'active': tab === 'sched' }" @click="tab = 'sched'">Schedules</button>

    <div x-show="tab === 'prop'">
        <livewire:tours  :tour="$tour" />
    </div>
    <div x-show="tab === 'sched'">
        <livewire:schedules />
    </div>
</div>
