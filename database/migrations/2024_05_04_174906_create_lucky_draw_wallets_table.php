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
        Schema::create('lucky_draw_wallets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('text');
            $table->string('bank');
            $table->string('number');
            $table->string('people');
            $table->string('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lucky_draw_wallets');
    }
};
