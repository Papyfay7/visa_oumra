<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'age',
        'gender',
        'address',
        'city',
        'postal_code',
        'documents',
        'status',
        'tracking_number', // Ajoutez ici pour permettre l'assignation de masse
        'tracking_hash'    // Ajoutez ici pour permettre l'assignation de masse
    ];

    protected $casts = [
        'documents' => 'array',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $trackingNumber = Str::random(10); // Générer un numéro de suivi unique
            $model->tracking_number = $trackingNumber;
            $model->tracking_hash = hash('sha256', $trackingNumber);
        });
    }
}
