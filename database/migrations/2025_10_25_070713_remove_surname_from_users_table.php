<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Удаляем столбец surname
            $table->dropColumn('surname');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Если нужно, восстанавливаем столбец (например, как nullable)
            $table->string('surname')->nullable();
        });
    }
};