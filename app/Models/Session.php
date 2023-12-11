<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    protected $fillable = ['patient_id', 'session_date', 'session_number', 'doctor_id', 'diagnosis'];

    public function examinations() {
        return $this->hasMany(Examination::class);
    }

    public function sessions() {
        return $this->hasMany(Session::class);
    }
}
