<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use App\Models\UserPoints;


class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        
        $points = UserPoints::findOrFail(auth()->user()->id);


        return view('layouts.app', compact('points'));
    }
}
