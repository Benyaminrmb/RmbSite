<?php

namespace App\Livewire\Sections;

use Livewire\Component;

class AlertBox extends Component
{
    public string $link;
    public string $text;
    public function render()
    {
        if($this->link&&$this->text){
            return view('livewire.sections.alert-box');
        }
    }
}
