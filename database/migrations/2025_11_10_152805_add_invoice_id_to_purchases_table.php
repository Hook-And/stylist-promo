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
        Schema::table('purchases', function (Blueprint $table) {
            // Добавляем новый столбец invoice_id.
            // Используем unsignedBigInteger, так как это, вероятно, внешний ключ.
            // Делаем его nullable, чтобы не нарушить существующие записи.
            $table->unsignedBigInteger('invoice_id')->nullable()->after('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('purchases', function (Blueprint $table) {
            // Затем удаляем сам столбец
            $table->dropColumn('invoice_id');
        });
    }
};
