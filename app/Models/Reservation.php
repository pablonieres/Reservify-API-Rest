<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'user_id',
        'service_id',
         'date_field',
         'location',
         'time_field',
          'status'
        ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Service::class); // Relación con el producto/servicio
    }
}
