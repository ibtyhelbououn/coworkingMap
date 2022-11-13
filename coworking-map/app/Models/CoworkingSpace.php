<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Booking;

class CoworkingSpace extends Model
{
    use HasFactory;

    protected $table = 'coworking_spaces';

    protected $fillable = ['name','address','phoneNumber','description','image','options','type'];

    public function setOptionsAttribute($value)
    {
        $this->attributes['options'] = json_encode($value);
    }

    public function getOptionsAttribute($value)
    {
        return $this->attributes['options'] = json_decode($value);
    }

    public function booking()
    {
        return $this->hasMany(Booking::class);
    }
}
