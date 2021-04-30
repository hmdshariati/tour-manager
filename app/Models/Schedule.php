<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'start',
        'end',
    ];

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }

    public function scheduleDetails()
    {
        return $this->hasMany(Scheduledetail::class);
    }

    public function createScheduleDetails()
    {
        $oldScheduleDetails = $this->scheduleDetails;

        $start = Carbon::createFromTimestamp(strtotime($this->start));
        $end = Carbon::createFromTimestamp(strtotime($this->end));
        $diffDays = $end->diffInDays($start);
        $dateRange = [
            ['date' => $start->format('Y-m-d')]
        ];
        for ($day = 1; $day <= $diffDays; $day++) {
            $date = $start->addDay($day);
            $dateRange[] = ['date' => $date->format('Y-m-d')];
        }
        $this->scheduleDetails()->createMany($dateRange);
        if ($oldScheduleDetails) {
            foreach ($this->scheduleDetails as $scheduleDetail) {

            }

        }
    }
}
