<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Title;

class PaidAdvertising extends Component
{
    #[Title('Paid Advertising - Real Landing')]
    public function render()
    {
        return view('livewire.pages.paid-advertising');
    }
}
