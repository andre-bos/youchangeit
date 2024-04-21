<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DangerAlert extends Component
{
    public string $boldText;
    public string $text;
    public function __construct(string $boldText = '', string $text = '')
    {
        $this->boldText = $boldText;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('ccomps.danger-alert');
    }
}
