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
        Schema::create('withdraw_settings', function (Blueprint $table) {
            $table->id();
            $table->string('min_amount');
            $table->string('max_amount');
            $table->float('planA', 7, 5);
            $table->float('planB', 7, 5);
            $table->float('dollar_rate', 7, 5);
            $table->float('first_commission', 7, 5);
            $table->float('second_commission', 7, 5);
            $table->string('status')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('withdraw_settings');
    }
};
