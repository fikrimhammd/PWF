<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class EditButton extends Component
{
    public $url;

    /**
     * Create a new component instance.
     */
    public function __construct($url)
    {
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.edit-button');
    }
}
