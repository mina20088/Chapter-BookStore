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
        //TODO: ['books', 'authors','genre', 'publisher','users']

        Schema::table('books', function (Blueprint $table) {
            $table->string('slug')->unique()->after('title');
        });
        Schema::table('authors', function (Blueprint $table) {
            $table->string('slug')->unique()->after('last_name');
        });
        Schema::table('genres', function (Blueprint $table) {
            $table->string('slug')->unique()->after('name');
        });
        Schema::table('publishers', function (Blueprint $table) {
            $table->string('slug')->unique()->after('name');
        });
        Schema::table('users', function (Blueprint $table) {
            $table->string('slug')->unique()->after('last_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
        Schema::table('authors', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
        Schema::table('genres', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
        Schema::table('publishers', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
};
