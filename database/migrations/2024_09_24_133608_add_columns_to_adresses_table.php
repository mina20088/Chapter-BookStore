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
        Schema::table('addresses', function (Blueprint $table) {
            $table->dropColumn('address_1');
            $table->dropColumn('address_2');
            $table->string('house-number/building-number');
            $table->string('street-name');
            $table->string("unit/apartment-number");
            $table->string("building-name/complex-name")->nullable();
            $table->string('floor/level-number')->nullable();
            $table->string('suite/office-number')->nullable();
            $table->text("landmark/point-of-reference")->nullable();
            $table->string('city');
            $table->string('state/province/region');
            $table->string('zip-code');
            $table->string('country')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('addresses', function (Blueprint $table) {
            $table->string('address_1');
            $table->string('address_2')->nullable();
            $table->dropColumn("house-number/building-number");
            $table->dropColumn("street-name");
            $table->dropColumn("unit/apartment-number");
            $table->dropColumn("building-name/complex-name");
            $table->dropColumn('floor/level-number');
            $table->dropColumn('suite/office-number');
            $table->dropColumn("landmark/point-of-reference");
            $table->dropColumn('city');
            $table->dropColumn('state/province/region');
            $table->dropColumn('zip-code');
            $table->dropColumn('country');

        });
    }
};
