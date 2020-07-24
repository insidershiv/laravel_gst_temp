<?php

namespace App\View\Components;

use Illuminate\View\Component;

class billdescription extends Component
{
    public $items;
    /**
     * Create a new component instance.
     *
     *
     * @return void
     */

    public function __construct($data)
    {
        //
        $this->items =  $data;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.billdescription', compact('items'));
    }



}
