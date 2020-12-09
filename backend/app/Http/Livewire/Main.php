<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Main extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('livewire.main');
    }
}
