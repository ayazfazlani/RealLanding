<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Title;

class ContactUs extends Component
{
    #[Title('Contact Us - Real Landing')]
    public function render()
    {
        return view('livewire.pages.contact-us');
    }
}
