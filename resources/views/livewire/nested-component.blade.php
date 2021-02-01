<div x-data="{ name: {{ json_encode($name) }} }">
    <button wire:click.prevent="$set('showAlpineComponent', true)">Show Alpine Component {{ $name }}</button>
    <x-test-alpine-component wire:model="showAlpineComponent">
        <x-slot name="copy">Hello {{ $name }}</x-slot>
    </x-test-alpine-component>
</div>
