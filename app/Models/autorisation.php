<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autorisation extends Model
{
    use HasFactory;
    protected $table = 'autorisation';
    protected $fillable = [
        'numero','redevable_id','date','type','rc','sup','montant',	'categorie','souscate','article',	'numerolot'	,'pattante',	'observation','valeurlocative','active'
    ];

    public function redevable()
    {
        return $this->belongsTo(Redevable::class, 'redevable_id', 'id')->get();
    }
    public function payement(){
        return $this->hasMany(Payement::class,'autorisation_id','id')->get();
    }
}
