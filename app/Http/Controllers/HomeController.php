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
        $book = $this->bookService->newReleaseBook('inventorys');
        return view('Home.index',[
            'book' => $book,
            'price' => $book->inventorys()->first()->price
        ]);
    }
}
