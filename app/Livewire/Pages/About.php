<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Title;

class About extends Component
{
    #[Title('About - Real Landing')]
    public function render()
    {
        return view('livewire.pages.about');
    }
}
