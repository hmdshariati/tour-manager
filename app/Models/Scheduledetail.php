<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scheduledetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'note',
        'meal',
        'camp',
        'attention'
    ];

    protected $appends = ['city_name'];

    public function schedule(){
        return $this->belongsTo(Schedule::class);
    }

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function provience(){
        return $this->belongsTo(Provience::class);
    }

    public function fileable()
    {
        return $this->morphMany();
    }

    public function getCityNameAttribute()
    {
        return $this->city_id ? City::find($this->city_id)->title : '';
    }
}
