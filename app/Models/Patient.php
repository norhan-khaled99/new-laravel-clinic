<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'age', 'phone_number', 'chronic_diseases', 'ct'];

    public static function boot()
    {
        parent::boot();

        // Auto-generate patient_id using timestamp when creating a new patient
        static::creating(function ($patient) {
            $patient->patient_id = time();
        });
    }

    public function examinations()
    {
        return $this->hasMany(Examination::class);
    }

    public function sessions()
    {
        return $this->hasMany(Session::class);
    }
}
