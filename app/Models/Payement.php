<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payement extends Model
{
    use HasFactory;
    protected $table = 'payement';
    protected $fillable = [
        'date','autorisation_id','quittence','date_quittence','annee','trim','active',
    ];
    public function autorisation()
    {
        return $this->belongsTo(Autorisation::class, 'autorisation_id', 'id')->get();
    }
}
