<?php

namespace App\View\Components\Widgets\EventMessage;

use Illuminate\View\Component;

class EventMessage extends Component
{
    public $photopath;
    public $time;
    public $username;
    public $comment;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($photopath, $time, $username, $comment)
    {
        $this->photopath = $photopath;
        $this->time = $time;
        $this->username = $username;
        $this->comment = $comment;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.widgets.event-message.event-message');
    }
}
