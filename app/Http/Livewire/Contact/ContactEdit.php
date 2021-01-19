<?php

namespace App\Http\Livewire\Contact;

use Livewire\Component;
use App\Models\Contact;

class ContactEdit extends Component
{
    public $contact;
    public $name;
    public $email;
    public $phone;

    public function mount($contact)
    {
        $this->contact  = Contact::find($contact);
        $this->name     = $contact->name;
        $this->email    = $contact->email;
        $this->phone    = $contact->phone;

    }
    public function render()
    {
        return view('livewire.contact.contact-edit');
    }
}
