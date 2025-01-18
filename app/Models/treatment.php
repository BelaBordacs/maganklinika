<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class treatment extends Model
{
    /** @use HasFactory<\Database\Factories\TreatmentFactory> */
    use HasFactory;

    protected $primaryKey = 'treatment_id';

    protected $fillable = [
        'specialisation_id',
        'treatment_name',
        'treatment_length',
        'price'
    ];
}
