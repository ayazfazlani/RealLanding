<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Title;

class SEO extends Component
{
    #[Title('SEO - Real Landing')]
    public function render()
    {
        return view('livewire.pages.s-e-o');
    }
}
