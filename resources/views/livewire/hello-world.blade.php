<div>
    {{-- <input wire:model='name' class="border border-lime-400 mb-2 rounded-2xl m-4 text-center p-3" type="text">

    <input wire:model='loud' type='checkbox'>

    <select wire:model='greeting' multiple>
        <option>Hello</option>
        <option>Goodbye</option>
        <option>Adios</option>
    </select>

    The whole world belongs to you. {{implode(', ', $greeting)}} {{ strtoupper($name) }}@if ($loud) ! @endif

    <form action="#" wire:submit.prevent="$set('name', 'Bingo')">
        <button class="bg-blue-500 text-white p-2 mx-auto rounded-lg shadow-lg">Reset Name</button>
    </form> --}}

    @foreach ($users as $user)
        @livewire('say-hi', ['user' => $user], key($user->id))
    @endforeach

    <hr class="bg-black border-b-2 mb-3 border-black">

    {{ now() }}

    <button class="bg-blue-500 p-3 rounded-lg text-white" wire:click='$emit("refreshChildren")''>Refresh Children</button>


    

</div>
