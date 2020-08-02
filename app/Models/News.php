<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded = [];

    public function school(){
        return $this->belongsTo(School::class, 'user_id', 'user_id');
    }
}
