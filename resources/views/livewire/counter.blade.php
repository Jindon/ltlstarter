<div>
    <div class="mt-6">
        <p class="text-gray-600 font-bold text-xl text-center mb-5">Livewire counter</p>
        <div class="flex align-middle justify-center">
            <button class="block py-2 px-3 rounded-lg bg-blue-500 hover:bg-blue-600 text-gray-200 hover:text-gray-100" wire:click="increment">Increment</button>
            <div class="mx-2 px-3 font-bold text-2xl">{{$count}}</div>
            <button class="block py-2 px-3 rounded-lg bg-blue-500 hover:bg-blue-600 text-gray-200 hover:text-gray-100" wire:click="decrement">Decrement</button>
        </div>
    </div>
</div>
