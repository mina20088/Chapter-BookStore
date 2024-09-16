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
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn("name", 'first_name');
            $table->string('last_name',40)->after('first_name');
            $table->integer('gender')->after('email')->unsigned();
            $table->date("DOB")->after('gender');
            $table->string('phone_number')->nullable()->after("DOB");
            $table->text('address_1')->after('phone_number');
            $table->text("address_2")->nullable()->after('address_1');
            $table->boolean('active')->default(0)->after("address_2");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('first_name', 'name');
            $table->dropColumn('last_name');
            $table->dropColumn('gender');
            $table->dropColumn("DOB");
            $table->dropColumn("phone_number");
            $table->dropColumn("address_1");
            $table->dropColumn("address_2");
            $table->dropColumn('active');
        });
    }
};
