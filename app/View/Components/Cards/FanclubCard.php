<?php

namespace App\View\Components\Cards;

use Illuminate\View\Component;

class FanclubCard extends Component
{
    public $image;
    public $name;
    public $category;
    public $description;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($image, $name, $category, $description)
    {
        $this->image = $image;
        $this->name = $name;
        $this->category = $category;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.cards.fanclub-card');
    }
}
