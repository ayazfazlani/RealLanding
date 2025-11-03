<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Title;

class Services extends Component
{
    #[Title('Services - Real Landing')]
    public function render()
    {
        return view('livewire.pages.services');
    }
}
