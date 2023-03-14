<div class="text-xl mb-4">
    <input type="text" wire:model='name' class="border border-lime-500 rounded-lg p-3 text-center">
    Hello {{ $user->name }} - {{ now() }}
    <button class="bg-blue-500 p-3 text-white rounded-lg" wire:click='$refresh'>Refresh</button>
</div>
