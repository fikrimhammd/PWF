<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AddProduct extends Component
{
    public $url;
    public $name;

    /**
     * Create a new component instance.
     */
    public function __construct($url, $name)
    {
        $this->url = $url;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.add-product');
    }
}
