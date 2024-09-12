<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;

    protected $table = 'registers'; // Update this if your table name is different

    // The attributes that are mass assignable
    protected $fillable = [
        'fullname',
        'dob',
        'email',
        'phone',
        'gender',
        'occupation',
        'idType',
        'idNumber',
        'issuedAuthority',
        'addressType',
        'city',
        'province',
        'district',
        'password', // Make sure you are careful with passwords
    ];

}
