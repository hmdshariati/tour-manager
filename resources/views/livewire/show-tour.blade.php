<div x-data="{ tab: 'prop' }">
    <div style='border-bottom: 2px solid #eaeaea'>
        <ul class='flex cursor-pointer'>
            <li :class="{ 'text-gray-500 bg-gray-200': tab !== 'prop' }"
                @click="tab = 'prop'"
                class='py-2 px-6 bg-white rounded-t-lg'>tour properties</li>
            <li :class="{ 'text-gray-500 bg-gray-200': tab !== 'sched' }"
                @click="tab = 'sched'"
                class='py-2 px-6 bg-white rounded-t-lg '>Schedules</li>
        </ul>
    </div>
    <div x-show="tab === 'prop'">
        <livewire:tours  :tour="$tour" />
    </div>
    <div x-show="tab === 'sched'">
        <livewire:schedule  :tour="$tour" />
    </div>

</div>
