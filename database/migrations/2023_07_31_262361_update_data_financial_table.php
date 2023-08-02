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
        Schema::table('approve_payment', function (Blueprint $table) {
            // $table->string('image')->nullable();
            $table->string('type_payment')->nullable();

            
            // $table->string('account_type_vip')->nullable();
            // $table->string('date_update_vip')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('approve_payment', function (Blueprint $table) {
            //
        });
    }
};
