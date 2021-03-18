<?php

namespace App\View\Components\Widgets\HowItWorksCarousel;

use Illuminate\View\Component;

class Item extends Component
{
    public $subtitle;
    public $title;
    public $feature;
    public $description;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($subtitle, $title, $feature, $description)
    {
        $this->subtitle = $subtitle;
        $this->title = $title;
        $this->feature = $feature;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.widgets.how-it-works-carousel.item');
    }
}
