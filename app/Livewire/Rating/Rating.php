<?php

namespace App\Livewire\Rating;

use App\Models\Book;
use App\Services\BookService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Component;

class Rating extends Component
{
    public float $maxRating = 5;

    public Book $book;

    public function setRating(float $rating): void
    {

    }

    public function mount(Book $book): void
    {
        $this->book = $book;
    }
    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('rating.rating',['rating' => $this->book->reviews()->avg('ratings')]);
    }
}
