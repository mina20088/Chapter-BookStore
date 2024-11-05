<?php

namespace App\Livewire;

use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;

class BookRating extends Component
{

    public int $rating  = 2;
    public int $maxRating = 5;

    public function setRating(int $rating): void
    {
        if ($rating >= 1 && $rating <= $this->maxRating) {
            $this->rating = $rating;
        }
    }
    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('book-rating');
    }
}
