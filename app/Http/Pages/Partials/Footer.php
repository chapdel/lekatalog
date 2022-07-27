<?php

namespace App\Http\Pages\Partials;

use Livewire\Component;
use Newsletter;
use WireUi\Traits\Actions;

class Footer extends Component
{

    use Actions;
    public $email;

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.footer');
    }

    public function subscribe()
    {
        $this->validate([
            'email' => ['required', 'email']
        ]);

        Newsletter::subscribeOrUpdate($this->email);

        $this->email = "";

        $this->notification()->info(
            $title = __('Le Katalog'),
            $description = __('Votre inscription à notre newsletter à été effectué avec succès'),
        );
    }
}
