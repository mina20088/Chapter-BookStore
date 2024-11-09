<?php

namespace App\View\Components;



use Closure;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\Component;
use Illuminate\View\View;

class AuthLayout extends Component
{

    public function render(): Application|Factory|\Illuminate\Contracts\View\View|Htmlable|string|Closure|View
    {
         return view('layouts.auth');
    }
}
