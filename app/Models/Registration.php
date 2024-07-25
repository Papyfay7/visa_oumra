<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
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
];

protected $casts = [
'documents' => 'array', // Convertit automatiquement le JSON en tableau
];
}
