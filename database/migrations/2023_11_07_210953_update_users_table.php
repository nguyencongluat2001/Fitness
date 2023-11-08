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
            $table->dropColumn('role_admin');
            $table->dropColumn('role_manage');
            $table->dropColumn('role_cv_admin');
            $table->dropColumn('role_cv_pro');
            $table->dropColumn('role_cv_basic');
            $table->dropColumn('role_sale_admin');
            $table->dropColumn('role_Sale');
            $table->dropColumn('role_Users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
