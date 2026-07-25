<?php

namespace Sanwo\Laravel\View\Components;

use Illuminate\View\Component;
use Sanwo\Laravel\SanwoManager;

class Scripts extends Component
{
    public string $src;

    public function __construct()
    {
        $this->src = app(SanwoManager::class)->scriptUrl();
    }

    public function render()
    {
        return view('sanwo::components.scripts');
    }
}
