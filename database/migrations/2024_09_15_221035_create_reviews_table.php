<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("book_id");
            $table->string("title");
            $table->float('ratings',2);
            $table->timestamps();
            $table->foreign('user_id','FK_CUSTOMER_REVIEWS')->on('users')->references('id')->cascadeOnDelete();
            $table->foreign('book_id',"FK_BOOK_REVIEWS")->on('books')->references('id')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
