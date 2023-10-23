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
        Schema::table('register', function (Blueprint $table) {
            // $table->tinyInteger('order')->nullable();
            $table->string('account_tkck_vps')->nullable();
            //  $table->string('investment_time')->nullable();
            //  $table->string('investment_taste')->nullable();
            //  $table->string('investment_company')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('register', function (Blueprint $table) {
            //
        });
    }
};
