<?php

namespace App\View\Components;

use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class FormRadioInputsCategories extends Component
{
    public ?string $formData;
    public Collection $categories;
    public function __construct(?string $formData, Collection $categories)
    {
        $this->formData = $formData;
        $this->categories = $categories;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('ccomps.form-radio-inputs-categories');
    }
}
