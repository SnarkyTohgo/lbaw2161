<?php

namespace App\View\Components\Widgets\FanclubCarousel;

use Illuminate\View\Component;

class Item extends Component
{
    public $fanclubName;
    public $image;
    public $slug;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($fanclubName, $image, $slug)
    {
        $this->fanclubName = $fanclubName;
        $this->image = $image;
        $this->slug = $slug;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.widgets.fanclub-carousel.item');
    }
}
