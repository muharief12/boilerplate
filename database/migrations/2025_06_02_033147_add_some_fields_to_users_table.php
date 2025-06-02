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
            $table->string('avatar')->nullable()->after('password');
            $table->string('phone_number')->nullable()->after('avatar');
            $table->string('address')->nullable()->after('phone_number');
            $table->string('position')->nullable()->after('address');
            $table->enum('level', ['staff', 'supervisor', 'manager'])->nullable()->after('position');
            $table->integer('salary')->nullable()->after('level');
            $table->string('account_name')->nullable()->after('salary');
            $table->string('account_number')->nullable()->after('account_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('avatar');
            $table->dropColumn('phone_number');
            $table->dropColumn('address');
            $table->dropColumn('position');
            $table->dropColumn('level');
            $table->dropColumn('salary');
            $table->dropColumn('account_name');
            $table->dropColumn('account_number');
        });
    }
};
