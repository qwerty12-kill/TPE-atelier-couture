<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaiementAgent extends Model
{
    use HasFactory;

    protected $fillable = [
        'agent_id',
        'montant',
        'date'
    ];

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }
}