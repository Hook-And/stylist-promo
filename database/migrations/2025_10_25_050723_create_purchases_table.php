<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->string('order_id')->unique(); // Уникальный ID заказа PayKeeper
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->decimal('amount', 8, 2);
            $table->string('status')->default('pending'); // pending, success, failed, refunded
            $table->timestamp('paid_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};