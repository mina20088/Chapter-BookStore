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
        Schema::table('books', function(Blueprint $table){
            $table->unsignedBigInteger('publisher_id')->after('genre_id');
            $table->foreign('publisher_id','FK_BOOKS_PUBLISHER')->references('id')->on('publishers')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropForeign("FK_BOOKS_PUBLISHER");
            $table->dropColumn('publisher_id');
        });
    }
};
