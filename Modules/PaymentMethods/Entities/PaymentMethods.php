<?php

namespace Modules\PaymentMethods\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PaymentMethods extends Model
{
    use HasFactory;

    protected $fillable = ['bank_name','account_title','iban_no'];
    protected $table='payment-methods';
    
    protected static function newFactory()
    {
        return \Modules\PaymentMethods\Database\factories\PaymentMethodsFactory::new();
    }
}
