<?php

namespace App\Services;

use App\Models\Book;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class BookService
{
    public function getAllBooks(): Collection
    {
        return Book::with('genre','authors','publisher')
            ->get();
    }

    public function newReleaseBook() : Book
    {
        return Book::with('genre','authors','publisher')
            ->latest('created_at')
            ->first();
    }

    public function limitBook() : Collection
    {
        return Book::with('genre','authors','publisher')
            ->limit(6)
            ->get();
    }
}
