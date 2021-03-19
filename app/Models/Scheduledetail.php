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

}
