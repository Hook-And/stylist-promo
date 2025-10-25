<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('site_contents', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique(); // Уникальный ключ для каждого элемента контента
            $table->longText('value'); // Значение (текст, ссылка и т.д.)
            $table->string('type')->default('text'); // Тип: text, link, email, phone
            $table->string('section')->nullable(); // Раздел (header, purpose, content, purchase, payment, footer)
            $table->text('description')->nullable(); // Описание для админа
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('site_contents');
    }
};
