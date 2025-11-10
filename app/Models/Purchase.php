<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'name',
        'phone',
        'email',
        'amount',
        'status',
        'paid_at',
        'invoice_id',
    ];

    protected $casts = [
        'paid_at' => 'datetime',
    ];
}
