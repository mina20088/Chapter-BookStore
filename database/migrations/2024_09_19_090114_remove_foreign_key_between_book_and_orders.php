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
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign("FK_BOOKS_ORDERS");
            //$table->dropColumn('book_id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            //$table->unsignedBigInteger('book_id')->after('order_date');
            $table->foreign('book_id','FK_BOOKS_ORDERS')->references('id')->on('books')->cascadeOnDelete();
        });
    }
};
