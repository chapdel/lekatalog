<?php

namespace App\Http\Pages\Catalogs;

use App\Models\Group;
use Livewire\Component;

class Details extends Component
{
    public $group;

    public function mount($slug)
    {
        $this->group = Group::whereSlug($slug)->firstOrFail();
    }
    public function render()
    {
        $influencers = $this->group->influencers()->whereIsVisible(true)->paginate(8);

        return view('pages.catalogs.details', compact('influencers'));
    }
}
