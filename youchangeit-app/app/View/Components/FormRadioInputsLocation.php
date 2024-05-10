<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormRadioInputsLocation extends Component
{
    public ?string $formData;
    public function __construct(?string $formData)
    {
        $this->formData = $formData;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('ccomps.form-radio-inputs-location');
    }
}
