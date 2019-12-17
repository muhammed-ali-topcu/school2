<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    //
    protected $fillable=['name','grade_id'];

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }
    public function my_all($school_id)
    {

    }

}
