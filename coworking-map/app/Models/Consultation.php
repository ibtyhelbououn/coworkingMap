<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    protected $table = 'consultations';

    protected $fillable = ['name','email','address','phoneNumber','place_name','description','image','options','type'];

    public function setOptionsAttribute($value)
    {
        $this->attributes['options'] = json_encode($value);
    }

    public function getOptionsAttribute($value)
    {
        return $this->attributes['options'] = json_decode($value);
    }
}
