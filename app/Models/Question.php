<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class Question extends Model
{
    use HasFactory , Searchable;

    protected $fillable=['name','question','title','up','down'];

    public function answers(){
        return $this -> hasMany('App\Models\Answer','question_id','id')->orderBy('up','desc');

    }


}
