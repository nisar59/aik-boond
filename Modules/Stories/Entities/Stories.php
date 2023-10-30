<?php

namespace Modules\Stories\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stories extends Model
{
    use HasFactory;

    protected $fillable = ['title','slug','description'];
    protected $table='stories';
    
    protected static function newFactory()
    {
        return \Modules\Stories\Database\factories\StoriesFactory::new();
    }
}
