<?php

namespace App\Livewire\Sections;

use Livewire\Component;

class TinyAbout extends Component
{
    public string $greeting;

    public function mount()
    {
        $this->greeting = __('about.greeting');
    }
    public function render()
    {
        return view('livewire.sections.tiny-about');
    }
}
