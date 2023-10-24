<?php

namespace Modules\States\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class States extends Model
{
    use HasFactory;

    protected $fillable = ['name','country_id'];
    protected $table='states';
    
    protected static function newFactory()
    {
        return \Modules\States\Database\factories\StatesFactory::new();
    }
}
