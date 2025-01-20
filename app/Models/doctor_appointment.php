<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctor_appointment extends Model
{
    /** @use HasFactory<\Database\Factories\DoctorAppointmentFactory> */
    use HasFactory;

    public $incrementing = false;
    protected $primaryKey = ['doctor_id', 'start_time'];
    
    protected $fillable = [
        'taj_number',
        'treatment_id',
        'status',
        'rating'
    ];
}
