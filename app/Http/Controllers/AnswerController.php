<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnswerRequest;
use App\Models\Answer;
use Exception;
use Illuminate\Http\Request;

class AnswerController extends Controller
{


    public function store(AnswerRequest $request){
        try{
            Answer::create([
                'name'=>$request->name,
                'answer'=>$request->answer,
                'question_id'=>$request->question_id
            ]);
            return "Answer created successfuly";
          }catch(Exception $ex){
              return $ex;
          }
    }

    public function upAnswer($id){
        try{
            $answer = Answer::find($id);
            if(!$answer)
               return "This answer Not Exist";

            $answer->update(['up'=>$answer->up +1]);
          return $answer;
        }catch(Exception $ex){
            return $ex;
        }
    }

    public function downAnswer($id){
        try{
            $answer = Answer::find($id);
            if(!$answer)
               return "This answer Not Exist";

            $answer->update(['down'=>$answer->down +1]);
          return $answer;
        }catch(Exception $ex){
            return $ex;
        }
    }

    public function delete($id){
        try{
            $answer= Answer::find($id);
            if(!$answer)
               return "This anser Not Exist";
            $answer->delete();
            return "Answer deleted";
        }catch(Exception $ex){
            return $ex;
        }
    }

}
