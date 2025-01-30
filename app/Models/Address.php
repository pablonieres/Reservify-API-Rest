<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
         'user_id',
         'street',
         'number',
         'city',
         'state',
         'postal_code'
 
     ];


     public function user()
     {
        $this->belongsTo(User::class);
     }
}
