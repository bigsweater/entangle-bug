<div x-data="{ hasThings: {{ json_encode($hasThings) }} }">
    <h1>It works without conditionals around the loop.</h1>
    <p>This probably makes sense since we're just pretending the `$things` Collection isn't there, but it actually is.</p>

    <p x-show.transition.duration.200ms="!hasThings">Loading...</p>

    <div @if(!$hasThings) wire:poll="fetchThings" @endif>
        <div x-show.transition.duration.200ms="hasThings" x-cloak>
            @foreach($this->thingsToRender() as $thing)
            <livewire:nested-component :name="$thing" :key="'thing-'.$thing" />
            @endforeach
        </div>
    </div>
</div>
