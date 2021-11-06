<div x-data="{showUpdating: false}" :class="{'modal-active' : showUpdating}">

<div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
    <div class="md:flex">
        <div class="p-8">

            <form wire:submit.prevent="changeProp">

                <input wire:model="title" type="text"
                       class="border border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent rounded-xl"/>
                <input wire:model="type" type="text"
                       class="border border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent mx-auto bg-white rounded-xl shadow-m"/>
                <input wire:model="code" type="text"
                       class="border border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent mx-auto bg-white rounded-xl shadow-m"/>
                <input wire:model="relation" type="text"
                       class="border border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent mx-auto bg-white rounded-xl shadow-m"/>
                <input wire:model="start" type="date"
                       class="border border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent mx-auto bg-white rounded-xl shadow-m"/>
                <input wire:model="end" type="date"
                       class="border border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent mx-auto bg-white rounded-xl shadow-m"/>
                <button type="submit" @click="showUpdating = true"
                        class="bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-opacity-50 mx-auto bg-white rounded-xl shadow-m">
                    submit
                </button>
            </form>
        </div>
    </div>
</div>
    <style>
        .modal {
            transition: opacity 0.25s ease;
        }

        body.modal-active {
            overflow-x: hidden;
            overflow-y: visible !important;
        }
    </style>

    <!--Modal-->
    <div :class="{'opacity-0 pointer-events-none': !showUpdating}"
         @open-update.window="showUpdating = true" @close-update.window="showUpdating = false"
         class="modal  fixed w-full h-full top-0 left-0 flex items-center justify-center">
        updating...
    </div>
</div>

