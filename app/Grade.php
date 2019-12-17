<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grade extends Model
{
    //
    use SoftDeletes;
    protected $fillable=['name','sn'];

    public function grades()
    {
        return $this->hasMany(Classroom::class);
    }
}
