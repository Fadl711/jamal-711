<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    protected $fillable=[
        "currency_name",
        "currency_id",
        "currency_symbol",
        "exchange rate",
    ];
}
