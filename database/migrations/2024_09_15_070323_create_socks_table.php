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
        Schema::create('socks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('book_id')->constrained('books',indexName: "FK_BOOKS_STOCKS")->cascadeOnDelete();
            $table->date('stock_date');
            $table->tinyInteger("condition")->unsigned();
            $table->unsignedBigInteger("discount_id")->nullable();
            $table->integer('quantity');
            $table->decimal('purchase_price',10,2);
            $table->decimal('price',10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('socks');
    }
};
