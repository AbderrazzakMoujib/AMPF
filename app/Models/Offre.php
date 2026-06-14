<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Offre extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'email',
        'company_name',
        'phone',
        'adresse',
        'type_offre',
        'status',
        'confirmed_at',
    ];
}