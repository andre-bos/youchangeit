<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Subtitle extends Component
{
    public string $text;
    public string $addClass;
    public function __construct(string $text = '', string $addClass = '')
    {
        $this->text = $text;
        $this->addClass = $addClass;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('ccomps.subtitle');
    }
}
