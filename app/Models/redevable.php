<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Redevable extends Model
{
    use HasFactory;
    protected $table = 'redevable';
   

    protected $fillable = [
        'nom','adress','type','cin','email','telephone','active',
    ];
}
