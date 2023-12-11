<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examination extends Model
{
    use HasFactory;
    protected $fillable = ['patient_id', 'follow'];

    public function patient() {
        return $this->belongsTo(Patient::class);
    }
}
