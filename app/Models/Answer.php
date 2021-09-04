<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable=['name','answer','question_id','up','down'];


    public function question(){
        return $this->belongsTo('App\Models\Question');
    }


}
