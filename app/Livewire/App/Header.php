<?php

namespace App\Livewire\App;

use Livewire\Attributes\Title;
use Livewire\Component;

class Header extends Component
{
    public string $name='Benyamin Bolhassani';
    public function render()
    {
        return view('livewire.app.header');
    }
}
