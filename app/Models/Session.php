<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    protected $fillable = ['patient_id', 'session_date', 'session_number', 'doctor_id', 'diagnosis'];


    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
    
    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

    public function examinations() {
        return $this->hasMany(Examination::class);
    }

    public function sessions() {
        return $this->hasMany(Session::class);
    }
}
