<?php

namespace App\Http\Livewire\Contact;

use Livewire\Component;

class ContactShow extends Component
{
    public $nome;
    public $telefone;
    public $email;
    public function render()
    {
        return view('livewire..contact.contact-show');
    }
}
