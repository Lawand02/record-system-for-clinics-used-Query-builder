<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class healthe extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'First_name',
        'Last_name',
        'State',
        'The_disease',
        'Address',
        'Date',
        'Doctor_name',
    ];
}
