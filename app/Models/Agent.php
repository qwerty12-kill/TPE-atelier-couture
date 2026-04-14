<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'specialite'
    ];

    public function coutures()
    {
        return $this->hasMany(Couture::class);
    }

    public function paiements()
    {
        return $this->hasMany(PaiementAgent::class);
    }
}