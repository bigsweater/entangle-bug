<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BladeLoopErrorDemo extends Component
{
    public $hasThings = false;

    public $requestCount = 0;

    public function render()
    {
        return view('livewire.blade-loop-error-demo');
    }

    public function fetchThings()
    {
        if ($this->requestCount === 1) {
            $this->hasThings = true;
            return;
        }

        $this->requestCount++;
    }

    public function thingsToRender()
    {
        return collect([
            'thing1',
            'thing2',
            'thing3',
            'thing4',
        ]);
    }
}
