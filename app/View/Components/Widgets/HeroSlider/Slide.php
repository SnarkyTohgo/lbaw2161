<?php

namespace App\View\Components\Widgets\HeroSlider;

use Illuminate\View\Component;

class Slide extends Component
{
    public $image;
    public $heading;
    public $subheading;
    public $fineText;
    public $cta;
    public $slug;
    public $secondCta;
    public $secondSlug;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($image, $heading, $subheading, $fineText, $cta, $slug, $secondCta, $secondSlug)
    {
        $this->image = $image;
        $this->heading = $heading;
        $this->subheading = $subheading;
        $this->fineText = $fineText;
        $this->cta = $cta;
        $this->slug = $slug;
        $this->secondCta = $secondCta;
        $this->secondSlug = $secondSlug;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.widgets.hero-slider.slide');
    }
}
