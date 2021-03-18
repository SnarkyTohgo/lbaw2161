<?php

namespace App\View\Components\Widgets\EventsCarouselVertical;

use Illuminate\View\Component;

class TabMenuItem extends Component
{
    public $image;
    public $eventName;
    public $eventDate;
    public $participantsNo;
    public $fanclubFilter;
    public $tabMenuId;
    public $tabRef;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($image, $eventName, $eventDate, $participantsNo, $fanclubFilter, $tabMenuId, $tabRef)
    {
        $this->image = $image;
        $this->eventName = $eventName;
        $this->eventDate = $eventDate;
        $this->participantsNo = $participantsNo;
        $this->fanclubFilter = $fanclubFilter;
        $this->tabMenuId = $tabMenuId;
        $this->tabRef = $tabRef;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.widgets.events-carousel-vertical.tab-menu-item');
    }
}
