<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    /** @use HasFactory<\Database\Factories\PatientFactory> */
    use HasFactory;

    protected $primaryKey = 'taj_number';

    protected $fillable = [
        'user_id',
        'birth_date',
        'address',
    ];
}
