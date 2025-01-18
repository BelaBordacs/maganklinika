<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class specialisation extends Model
{
    /** @use HasFactory<\Database\Factories\SpecialisationFactory> */
    use HasFactory;

    protected $primaryKey = 'specialisation_id';

    protected $fillable = [
        'specialisation_name'
    ];
}
