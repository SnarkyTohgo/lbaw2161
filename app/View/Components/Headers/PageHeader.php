<?php

namespace App\View\Components\Headers;

use Illuminate\View\Component;

class PageHeader extends Component
{
    public $subtitle;
    public $title;
    public $page;
    public $image;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($subtitle, $title, $page, $image)
    {
        $this->subtitle = $subtitle;
        $this->title = $title;
        $this->page = $page;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.headers.page-header');
    }
}
