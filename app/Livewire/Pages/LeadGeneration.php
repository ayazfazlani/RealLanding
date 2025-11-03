<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Title;

class LeadGeneration extends Component
{
    #[Title('Lead Generation - Real Landing')]
    public function render()
    {
        return view('livewire.pages.lead-generation');
    }
}
