<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Title;

class CreativeContent extends Component
{
    #[Title('Creative Content - Real Landing')]
    public function render()
    {
        return view('livewire.pages.creative-content');
    }
}
