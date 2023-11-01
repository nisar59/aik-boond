<?php

namespace Modules\Tokens\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tokens extends Model
{
    use HasFactory;

    protected $fillable = ['payment_method','fee_slip','token'];
    protected $table='token';
    
    protected static function newFactory()
    {
        return \Modules\Tokens\Database\factories\TokensFactory::new();
    }
}
