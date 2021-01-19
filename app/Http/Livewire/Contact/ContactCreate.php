<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use Livewire\Component;

class ContactCreate extends Component
{
    public $name;
    public $email;
    public $phone;

    protected $rules = [
        'name' => 'required|min:4',
        'email' => 'required',
        'phone' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function create()
    {
        $this->validate();
        Contact::create([
            'name'  =>  $this->name,
            'email' =>  $this->email,
            'phone' =>  $this->phone
        ]);
        $this->name = $this->email = $this->phone = null;
        session()->flash('message', 'Contato salvo com sucesso!');
    }
    public function render()
    {
        return view('livewire.contact.contact-create');
    }
}
