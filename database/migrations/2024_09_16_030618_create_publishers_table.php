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
        Schema::create('publishers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique("UQ_NAME");
            $table->string('nationality')->nullable();
            $table->string("email")->unique("UQ_EMAIL");
            $table->text('address_1');
            $table->text('address_2')->nullable();
            $table->tinyInteger('type');
            $table->string('website_url')->nullable()->unique('UQ_WEBSITE_URL');
            $table->string('year-founded',4);
            $table->text("comments")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publishers');
    }
};
