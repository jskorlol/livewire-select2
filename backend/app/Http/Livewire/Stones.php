<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Stones extends Component
{
    public $key;
    public $value;
    public $memo='test';

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('livewire.stones');
    }
}
