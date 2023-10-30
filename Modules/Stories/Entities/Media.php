<?php

namespace Modules\Stories\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Media extends Model
{
    use HasFactory;

    protected $fillable = ['story_id','media_type','media'];
    protected $table='media';
    
    protected static function newFactory()
    {
        return \Modules\Stories\Database\factories\MediaFactory::new();
    }
}
