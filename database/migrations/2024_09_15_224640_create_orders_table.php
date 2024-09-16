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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamp('order_date');
            $table->foreignId('book_id')->constrained(indexName: "FK_BOOKS_ORDERS")->cascadeOnDelete();
            $table->foreignId("customer_id")->constrained('users',indexName: "FK_CUSTOMERS_ORDERD")->cascadeOnDelete();
            $table->tinyInteger('order_status');
            $table->integer('quantity');
            $table->decimal("price",10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
