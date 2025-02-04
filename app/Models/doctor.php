<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    /** @use HasFactory<\Database\Factories\DoctorFactory> */
    use HasFactory;

        protected $primaryKey = 'doctor_id';

        protected $fillable = [
            'user_id',
            'specialisation_id',
        ];
}
