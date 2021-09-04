<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use App\Models\Question;
use Exception;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(){
        return Question::orderBy('created_at','desc')
        ->orderBy('up','desc')
        ->paginate(PAGINATOR);
    }

    public function show($id){
        try{
             $question=Question::with('answers')->find($id);
             if(!$question)
             return "This question Not Exist";
             return $question;
        }catch(Exception $ex){
            return $ex;
        }
    }

    public function store(QuestionRequest $request){
        try{
            Question::create([
                'name'=>$request->name,
                'title'=>$request->title,
                'question'=>$request->question
            ])->searchable();
            return "Question created successfuly";
          }catch(Exception $ex){
              return $ex;
          }
    }

    public function search(Request $request){
        $questions = Question::search($request->term)
         ->orderBy('up','desc')->paginate(PAGINATOR);
        // dd($questions);
        return $questions;
    }

    public function upQuestion($id){
        try{
            $question = Question::find($id);
            if(!$question)
               return "This question Not Exist";

            $question->update(['up'=>$question->up +1]);
          return $question;
        }catch(Exception $ex){
            return $ex;
        }
    }

    public function downQuestion($id){
        try{
            $question = Question::find($id);
            if(!$question)
               return "This question Not Exist";

            $question->update(['down'=>$question->down +1]);
          return $question;
        }catch(Exception $ex){
            return $ex;
        }
    }
    public function delete($id){
        try{
            $question = Question::find($id);
            if(!$question)
               return "This question Not Exist";
            $question->answers()->delete();
            $question->unsearchable();
            $question->delete();
            return "Question and its answers deleted";
        }catch(Exception $ex){
            return $ex;
        }
    }


}
