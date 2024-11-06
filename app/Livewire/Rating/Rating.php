<?php

namespace App\Livewire\Rating;

use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;

class Rating extends Component
{

    public float $rating  = 0;
    public float $maxRating = 5;

    public function setRating(int $rating): void
    {
        if ($rating >= 1 && $rating <= $this->maxRating) {
            $this->rating = round($rating,1);
            dd($this->rating);
        }
    }
    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('rating.rating');
    }
}
