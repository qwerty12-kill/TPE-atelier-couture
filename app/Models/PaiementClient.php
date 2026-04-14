<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaiementClient extends Model
{
    use HasFactory;

    protected $fillable = [
        'couture_id',
        'montant',
        'mode',
        'date'
    ];

    public function couture()
    {
        return $this->belongsTo(Couture::class);
    }
}