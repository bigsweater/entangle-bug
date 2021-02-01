<div x-data="{ hasThings: {{ json_encode($hasThings) }} }">
    <h1>Loops in conditionals in Component Class cause errors with `entangle...`</h1>
    <p>Loading...</p>
    <div @if(!$hasThings) wire:poll="fetchThings" @endif>
        <div>
            @foreach($this->thingsToRender() as $thing)
            <livewire:nested-component :name="$thing" :key="'thing-'.$thing" />
            @endforeach
        </div>
    </div>
</div>
