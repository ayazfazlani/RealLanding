<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Title;

class SocialMedia extends Component
{
    #[Title('Social Media - Real Landing')]
    public function render()
    {
        return view('livewire.pages.social-media');
    }
}
