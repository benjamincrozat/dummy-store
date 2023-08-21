<?php

use function Livewire\Volt\state;

state('count', fn () => cache()->get(sha1(request()->ip()).'_count', 0));

$remove = function () {
    if ($this->count > 0) {
        cache()->put(sha1(request()->ip()).'_count', --$this->count);
    }
};

?>

<x-layouts.app>
    @volt
        <div>
            <div>
                <a href="/" wire:navigate>
                    ← Back
                </a>
            </div>

            @if ($count)
                <div class="grid gap-8 mt-8">
                    @foreach (range(1, cache()->get(sha1(request()->ip()).'_count')) as $item)
                        <div class="flex items-center justify-between gap-4">
                            <div class="flex items-center gap-4">
                                <img src="https://via.placeholder.com/256x256.png/f3f4f6" width="128" height="128" />

                                <div>
                                    <div>{{ fake()->sentence(2) }}</div>
                                    <div class="font-bold text-2xl">${{ rand(10, 100) }}</div>
                                </div>
                            </div>

                            <button
                                class="bg-red-400 text-white rounded py-2 px-3 text-sm font-bold"
                                wire:click="remove"
                            >
                                Remove
                            </button>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="mt-16 font-light text-center text-3xl">Your cart is empty.</p>
            @endif
        </div>
    @endvolt
</x-layouts.app>
