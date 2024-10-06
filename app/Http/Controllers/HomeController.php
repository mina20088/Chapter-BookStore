<?php

namespace App\Http\Controllers;

use App\Services\BookService;

class HomeController extends Controller
{
    protected BookService $bookService;
    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }
    public function index()
    {
        return view('Home.index',[
            'books' => $this->bookService->getAllBooks(),
            'new' => $this->bookService->newReleaseBook(),
            'rank' => $this->bookService->limitBook()
        ]);
    }
}
