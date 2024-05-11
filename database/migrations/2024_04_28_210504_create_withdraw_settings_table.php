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
            $table->float('planA', 5, 5);
            $table->float('planB', 5, 5);
            $table->float('dollar_rate', 5, 5);
            $table->float('first_commission', 5, 5);
            $table->float('second_commission', 5, 5);
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
