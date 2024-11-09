<?php

namespace App\Services;

use App\Enums\BookConditions;
use App\Models\Book;
use Illuminate\Database\Eloquent\Collection;


/**
 *
 */
class BookService
{

    public function getAllBooks(...$relations): \Illuminate\Database\Eloquent\Collection
    {
        return Book::with($relations)
            ->get();
    }


    /**
     * Create a new book and add it to the inventory
     * @param array $book
     * @param int $quantity
     * @param float $price
     * @param BookConditions $condition
     * @param int|null $discount
     * @param ...$authors_ids
     * @return Book
     */
    public function create(array $book, int $quantity, float $price, BookConditions $condition = BookConditions::New, int $discount = null, ...$authors_ids):Book
    {
        $created_book =  Book::create($book);

        $inventory = $created_book->inventorys()->create([
            'book_id' => $created_book->id,
            'condition' => $condition->value,
            'discount_id' => $discount,
            'quantity' => $quantity,
            'price' => $price,
        ]);

        foreach($authors_ids as $author_id)
        {
            $created_book
                ->authors()
                ->attach($author_id);
        }

        return $created_book;
    }


    /**
     * Retrieves the most recent book release with its related genre, authors, and publisher information.
     *
     * @return Book The latest released book with associated relations.
     */
    public function newReleaseBook(...$relations) : Book
    {
        return Book::with($relations)
            ->latest('created_at')
            ->first();
    }

    /**
     * Retrieve only 6 books
     * @return Collection
     */
    public function limitBook(int $limit = 6,...$relations) : Collection
    {
        return Book::with($relations)
            ->limit($limit)
            ->get();
    }

    public function ratingPerBook(\Illuminate\Support\Collection $reviewers): \Illuminate\Support\Collection
    {
        $ratings = collect();

        foreach($reviewers as $review){
            $ratings->add($review->pivot->ratings);
        }
        return $ratings;
    }
}
