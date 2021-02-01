<div
    x-data="{ show: @entangle($attributes->wire('model')) }"
    x-show.transition.duration.200ms="show"
    x-cloak>
    <p>{{ $copy }}</p>
    <button @click.prevent="show = false">Hide</button>
</div>
