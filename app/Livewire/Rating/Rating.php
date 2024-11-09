<?php

namespace App\Livewire\Rating;

use App\Services\BookService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Application;
use Illuminate\Support\Number;
use Illuminate\View\View;
use Livewire\Component;

class Rating extends Component
{

   /* public float $rating = 0;*/
    public float $maxRating = 5;
    public Collection $reviewers;

    protected BookService $bookService;


    public function mount(BookService $bookService, Collection $reviewers): void
    {
        $this->reviewers = $reviewers;

        $this->bookService = $bookService;

    }
    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('rating.rating',['rating' => $this->bookService->ratingPerBook($this->reviewers)->avg()??0.0]);
    }
}
