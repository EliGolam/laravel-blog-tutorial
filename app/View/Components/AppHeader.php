<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppHeader extends Component
{
    public string $titleHeading;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $titleHeading)
    {
        $this->titleHeading = $titleHeading;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.app-header');
    }
}
