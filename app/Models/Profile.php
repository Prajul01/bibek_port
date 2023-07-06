<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'ports';
    protected $fillable = [
        'name',
        'address',
        'email',
        'password',
        'phone',
        'DateOfBirth',
        'degree',
        'about_description',
        'image'
    ];



}
