<div>
    <form wire:submit.prevent="changeProp">

        <input wire:model="title" type="text" />
        <input wire:model="type" type="text" />
        <input wire:model="code" type="text" />
        <input wire:model="relation" type="text" />
        <button type="submit" >submit</button>
    </form>
</div>
