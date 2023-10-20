<?php

namespace Modules\Donors\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Donor extends Model
{
    use HasFactory;

    protected $fillable = ['id','image','name', 'age', 'upazila_name', 'blood_group', 'contact_no', 'last_donate_date'];
    protected $table='donors';
    protected static function newFactory()
    {
        return \Modules\Donors\Database\factories\DonorFactory::new();
    }
}
