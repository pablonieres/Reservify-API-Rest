<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

   protected $fillable = [
        'user_id',
        'phone_number',

    ];

    public function user()
    {
       $this->belongsTo(User::class);
    }
}
