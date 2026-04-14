<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Couture extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'agent_id',
        'type_habit',
        'description',
        'date_depot',
        'date_retrait',
        'statut',
        'montant',
        'mesures'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    public function paiements()
    {
        return $this->hasMany(PaiementClient::class);
    }
}