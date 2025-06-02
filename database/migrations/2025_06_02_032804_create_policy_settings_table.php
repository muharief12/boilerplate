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
        Schema::create('policy_settings', function (Blueprint $table) {
            $table->id();
            $table->float('tax');
            $table->time('start_hour');
            $table->time('end_hour');
            $table->float('late_punishment');
            $table->string('account_name')->nullable();
            $table->integer('account_number')->nullable();
            $table->string('logo')->nullable();
            $table->string('signature')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('policy_settings');
    }
};
