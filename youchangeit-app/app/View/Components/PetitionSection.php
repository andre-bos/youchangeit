<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class PetitionSection extends Component
{
    public Collection $petitions;
    public function __construct(Collection $petitions)
    {
        $this->petitions = $petitions;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('ccomps.petition-section');
    }
}
