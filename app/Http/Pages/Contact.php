<?php

namespace App\Http\Pages;

use App\Models\Contact as ModelsContact;
use Livewire\Component;
use WireUi\Traits\Actions;

class Contact extends Component
{
    use Actions;
    public $email;
    public $name;
    public $phone;
    public $message;

    public function send()
    {
        $this->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'phone:CM,AUTO'],
            'message' => ['required', 'string', 'max:1024'],
        ]);

        ModelsContact::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message
        ]);

        Newsletter::subscribeOrUpdate($this->email);

        $this->reset();

        $this->notification()->info(
            $title = __('Le Katalog'),
            $description = __('Nous avons reçu votre message, nous vous tiendrons informé le plus rapidement possible. '),
        );
    }

    public function render()
    {
        return view('pages.contact');
    }
}
