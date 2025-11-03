<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Title;

class WebSiteDevelopment extends Component
{
    #[Title('Website Development - Real Landing')]
    public function render()
    {
        return view('livewire.pages.web-site-development');
    }
}
