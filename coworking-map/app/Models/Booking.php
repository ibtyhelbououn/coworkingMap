<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CoworkingSpace;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings';

    protected $fillable = ['name','email','phoneNumber','date','spots','spaceID'];

    public function coworkingSpace()
    {
        return $this->belongsTo(CoworkingSpace::class,'spaceID');
    }
}
