<?php

namespace App\Livewire\Home;

use App\Services\BookService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;

class HighlyRatedReadSection extends Component
{
    private BookService $bookService;
    public function boot(BookService $bookService): void
    {
        $this->bookService = $bookService;
    }

    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        $books = $this->bookService
            ->limitBook(6, 'genre');
        return view('home.highly-rated-read-section',['ranked' => $books]);
    }
}
