<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Basedata extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
    ];

    public function parent(){
        return $this->belongsTo(BaseData::class,'parent_id');
    }
}
