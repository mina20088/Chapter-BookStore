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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("genre_id");
            $table->foreign('genre_id',"FK_BOOKS_GENRE")->references('id')->on('genre');
            $table->string("title")->unique("UQ_TITLE");
            $table->string("ISBN",15)->unique("UQ_ISBN");
            $table->string('cover_image');
            $table->text('description');
            $table->string('excrept',100);
            $table->string('format',40)->nullable();
            $table->integer('pages')->unsigned()->nullable();
            $table->string('language')->nullable();
            $table->date('publication_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
