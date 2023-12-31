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
        Schema::table('data_financial', function (Blueprint $table) {
            // $table->string('account_type_vip')->nullable(); // thuws tuwj
            // $table->timestamp('date_update_vip')->nullable(); // thuws tuwj
            // $table->string('role_admin')->nullable();
            // $table->string('role_manage')->nullable();
            // $table->string('role_cv_admin')->nullable();
            // $table->string('role_cv_pro')->nullable();
            // $table->string('role_cv_basic')->nullable();
            // $table->string('role_sale_admin')->nullable();
            // $table->string('role_Sale')->nullable();
            // $table->string('role_Users')->nullable();
            $table->string('user_take_on')->nullable(); // NGười đảm nhận

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('data_financial', function (Blueprint $table) {
            //
        });
    }
};
