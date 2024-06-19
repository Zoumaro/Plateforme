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

            $table->foreignId('department_id')->references('id')->on('departments')->onDelete('cascade')->nullable();
            $table->foreignId('municipality_id')->references('id')->on('municipalities')->onDelete('cascade')->nullable();
            $table->foreignId('district_id')->references('id')->on('districts')->onDelete('cascade')->nullable();
            $table->foreignId('locality_id')->references('id')->on('localities')->onDelete('cascade')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {

        });
    }
};
