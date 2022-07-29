<?php

namespace App\Http\Pages\Influencer;

use App\Models\Influencer;
use Livewire\Component;

class Details extends Component
{
    public $influencer;
    public function mount($slug)
    {
        $this->influencer = Influencer::whereSlug($slug)->firstOrFail();
    }
    public function render()
    {
        return view('pages.influencer.details');
    }
}
