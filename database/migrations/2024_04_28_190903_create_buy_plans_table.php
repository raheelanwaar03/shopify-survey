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
        Schema::create('buy_plans', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('plan_name');
            $table->string('user_name');
            $table->string('trx');
            $table->string('account');
            $table->string('img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buy_plans');
    }
};
