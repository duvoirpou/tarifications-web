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
        Schema::table('functionalities', function (Blueprint $table) {
            $table->integer('type_id')->unsigned()->references('id')->on('types')->onDelete('cascade')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('functionalities', function (Blueprint $table) {
            $table->dropColumn('type_id');
        });
    }
};
