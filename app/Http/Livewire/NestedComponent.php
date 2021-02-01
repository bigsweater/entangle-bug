<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NestedComponent extends Component
{
    public $showAlpineComponent = false;

    public $name;

    public function render()
    {
        return view('livewire.nested-component');
    }
}
