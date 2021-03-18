<?php

namespace App\View\Components\Widgets\EventsCarouselVertical;

use Illuminate\View\Component;

class TabContentItem extends Component
{
    public $image;
    public $eventName;
    public $participantsNo;
    public $tabId;
    public $tabRef;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($image, $eventName, $participantsNo, $tabId, $tabRef)
    {
        $this->image = $image;
        $this->eventName = $eventName;
        $this->participantsNo = $participantsNo;
        $this->tabId = $tabId;
        $this->tabRef = $tabRef;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.widgets.events-carousel-vertical.tab-content-item');
    }
}
