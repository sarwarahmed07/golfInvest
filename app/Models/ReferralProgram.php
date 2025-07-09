<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferralProgram extends Model
{
    use HasFactory;

    protected $fillable = [
        'level',
        'percentage',
        'description',
        'status'
    ];

    protected $casts = [
        'percentage' => 'decimal:2',
        'status' => 'boolean',
        'level' => 'integer'
    ];
}