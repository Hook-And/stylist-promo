<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'value',
        'type',
        'section',
        'description',
    ];

    /**
     * Получить значение контента по ключу
     */
    public static function get($key, $default = '')
    {
        $content = self::where('key', $key)->first();
        return $content ? $content->value : $default;
    }

    /**
     * Получить все контенты по разделу
     */
    public static function getBySection($section)
    {
        return self::where('section', $section)->get();
    }
}