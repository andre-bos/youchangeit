<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavbarHamburger extends Component
{
    public string $dataCollapseToggle;
    public string $ariaControls;
    public string $screenReaderText;
    public function __construct(string $dataCollapseToggle = '', string $ariaControls = '', string $screenReaderText = '')
    {
        $this->dataCollapseToggle = $dataCollapseToggle;
        $this->ariaControls = $ariaControls;
        $this->screenReaderText = $screenReaderText;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('ccomps.navbar-hamburger');
    }
}
