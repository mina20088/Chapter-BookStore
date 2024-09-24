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
        Schema::table('customer_book', function (Blueprint $table) {
            $table->foreign('user_id',"FK_CUSTOMER_CUSTOMER_BOOKS")->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('book_id',"FK_BOOKS_CUSTOMER_BOOKS")->references('id')->on('books')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('customer_book', function (Blueprint $table) {
            $table->dropForeign('FK_CUSTOMER_CUSTOMER_BOOKS');
            $table->dropForeign('FK_BOOKS_CUSTOMER_BOOKS');
        });
    }
};
