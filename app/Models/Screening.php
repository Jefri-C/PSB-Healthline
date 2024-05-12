<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Screening extends Model
{
    use HasFactory;

    protected $fillable = [
        'apoointment_id',
        'patient_id',
        'doctor_id',
        'summary',
        'advice',
        'date',
    ];
}
