<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FixedDepositPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'duration_days',
        'min_percentage',
        'max_percentage',
        'daily_rate',
        'min_investment',
        'max_investment',
        'loyalty_bonus',
        'status',
        'description'
    ];

    protected $casts = [
        'min_percentage' => 'decimal:2',
        'max_percentage' => 'decimal:2',
        'daily_rate' => 'decimal:4',
        'min_investment' => 'decimal:2',
        'max_investment' => 'decimal:2',
        'loyalty_bonus' => 'decimal:2',
        'status' => 'boolean',
    ];
}