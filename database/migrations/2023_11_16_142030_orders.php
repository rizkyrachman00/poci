<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable(false)->references('id')->on('users');
            $table->date('date')->nullable(false);
            $table->string('status', 100)->nullable(false);
            $table->string('payment_method', 255)->nullable(false);
            $table->integer('total_quantity')->nullable(false);
            $table->decimal('total_ammount')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
