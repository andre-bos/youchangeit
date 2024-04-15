<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CallToActionButton extends Component
{
    public string $text;
    public string $link;
    public function __construct(string $text = '', string $link = '#')
    {
        $this->text = $text;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('ccomps.call-to-action-button');
    }
}
