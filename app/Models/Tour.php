<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tour extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'type',
        'code',
        'relation',
        'start',
        'end',
        'regional',
        'services',
        'driver',
        'notes'
    ];

    public function starter(){
        return $this->belongsTo(User::class,'starter_id');
    }

    public function guide(){
        return $this->belongsTo(User::class,'guide_id');
    }

    public function actionboss(){
        return $this->belongsTo(User::class,'actionboss_id');
    }

    public function boss(){
        return $this->belongsTo(User::class,'boss_id');
    }

    public function schedule(){
        return $this->hasOne(Schedule::class);
    }

    public function travellers(){
        return $this->hasOne(Traveler::class);
    }

    /**
     * create schedule for a tour
     */
    public function createSchedule()
    {
        $this->schedule()->create([
            'start' => $this->start ?? now(),
            'end' => $this->end ?? now()
        ]);
    }
}
