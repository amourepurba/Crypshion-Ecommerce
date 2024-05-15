<?php

namespace App\Livewire\Components\Button;

use Livewire\Component;

class Button extends Component
{
    public $title;
    public $class;

    public function mount($title = null, $class = 'bg-red-300')
    {
        $this->title = $title;
        $this->class = $class;
    }


    public function render()
    {
        return view('livewire.components.button.button');
    }
}