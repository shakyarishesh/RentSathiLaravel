<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;

    // protected $table = 'rents';

    protected $fillable = [
        'image_name', 
        'rent_type', 
        'property_specification', 
        'title', 
        'price', 
        'status', 
        'description', 
        'created_by', 
        'created_at', 
        'updated_at'
        // add other columns here
    ];
}
