<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessageNotification;

class ContactForm extends Component
{
    public $first_name, $last_name, $email, $phone, $company;
    public $service, $budget, $message;

    protected $rules = [
        'first_name' => 'required|string|max:255',
        'last_name'  => 'required|string|max:255',
        'email'      => 'required|email|max:255',
        'phone'      => 'nullable|string|max:255',
        'company'    => 'nullable|string|max:255',
        'service'    => 'required|string',
        'budget'     => 'nullable|string',
        'message'    => 'required|string|min:10',
    ];

    public function submit()
    {
        $this->validate();

        $message = ContactMessage::create([
            'first_name' => $this->first_name,
            'last_name'  => $this->last_name,
            'email'      => $this->email,
            'phone'      => $this->phone,
            'company'    => $this->company,
            'service'    => $this->service,
            'budget'     => $this->budget,
            'message'    => $this->message,
        ]);

        // Send email to site owner
        Mail::to(config('mail.from.address'))->send(new ContactMessageNotification($message));
        // clear fields
        $this->reset();

        session()->flash('success', 'Your message has been sent successfully! We will contact you soon.');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
