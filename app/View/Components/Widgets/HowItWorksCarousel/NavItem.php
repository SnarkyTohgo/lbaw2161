<?php

namespace App\View\Components\Widgets\HowItWorksCarousel;

use Illuminate\View\Component;

class NavItem extends Component
{
    public $title;
    public $subtitle;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $subtitle)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.widgets.how-it-works-carousel.nav-item');
    }
}
