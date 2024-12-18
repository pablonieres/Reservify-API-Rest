<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'reservation_id', 'date', 'time', 'location', 'status',
    ];

    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }

    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }
}
