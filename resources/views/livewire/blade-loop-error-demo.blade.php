<div x-data="{ hasThings: {{ json_encode($hasThings) }} }">
    <h1>Loops in conditionals in Blade cause errors with `entangle...`</h1>
    @if(!$hasThings)
    <div wire:poll="fetchThings">
        <p>Loading...</p>
    </div>
    @else
    <div>
        @foreach($this->thingsToRender() as $thing)
        <livewire:nested-component :name="$thing" :key="'thing-'.$thing" />
        @endforeach
    </div>
    @endif
</div>
