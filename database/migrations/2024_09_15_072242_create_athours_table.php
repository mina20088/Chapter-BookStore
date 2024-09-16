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
        Schema::create('athours', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',40);
            $table->string('last_name',40);
            $table->string('middle_name',40)->nullable();
            $table->string("email")->unique('UQ_EMAIL');
            $table->date("DOB");
            $table->date("death_date")->nullable();
            $table->text('bio')->nullable();
            $table->tinyInteger('nationality')->unsigned();
            $table->string("website")->unique()->nullable();
            $table->string("image");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('athours');
    }
};
