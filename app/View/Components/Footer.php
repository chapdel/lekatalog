<?php

namespace App\View\Components;

use Livewire\Component;
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
    }
}
