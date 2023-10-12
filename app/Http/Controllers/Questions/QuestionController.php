<?php

namespace App\Http\Controllers\Questions;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function index(Request $request)
    {
        $categories = ['History', 'Art', 'Geography', 'Science', 'Sports'];
        $questions = [];
        // dd($request->session()->get("quiz"));
        if (!$request->session()->has("quiz")) {
            //getting 4 random questions from each category
            foreach ($categories as $cat) {
                $query_questions = Question::inRandomOrder()->where('category', $cat)->with("answers")->limit(4)->get();
                foreach ($query_questions as $qq) {
                    array_push($questions, $qq);
                }
            }

            $request->session()->put('quiz' ,$questions);
            shuffle($questions);
        }else{
            $questions=session("quiz");
        }

        return view('questions.list')->with("quiz",$questions);;
    }




    public function store(Request $request)
    {
        //get quiz from DB
        $quiz = Quiz::where('id', $request->quiz)->get()->first();
        $requests = $request->all();
        //makes quiz completed
        dd($requests);
        $quiz['completed'] = 1;

        $results = array('overall' => 0, 'art' => 0, 'geography' => 0, 'history' => 0, 'science' => 0, 'sports' => 0);
        $xp = 0;

        //figuring out which answers are correct
        foreach ($requests as $key => $value) {
            if (is_numeric($key)) {
                $correct_answer = Answer::where('question_id', $key)->where('correct', 1)->get()->first()['answer'];
                if ($correct_answer == $value) {
                    $question = Question::where('id', $key)->get()->first();
                    $results['overall']++;
                }
            }
        }
        $request->session()->forget('quiz');
        //adding xp to the
        Auth::user()['xp'] += $xp;

        //adding categories score to the user
        foreach ($results as $key => $value) {
            if ($key != 'overall') {
                [$correct, $total] = [explode("/", Auth::user()[$key])[0], explode("/", Auth::user()[$key])[1]];
                Auth::user()[$key] = ($correct + $value) . "/" . ($total + 4);
            }
        }

        //adding xp to the user
        Auth::user()['xp'] += $xp;

        //save changes in DB
        Auth::user()->save();
        $quiz->save();


        return view('questions.results', ['results' => $results]);
    }
}