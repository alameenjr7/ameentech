<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function questionSubmit(Request $request)
    {
        $this->validate($request,[
            'full_name'=>'string|required',
            'email'=>'string|required',
            'question'=>'string|required|min:5',
        ]);

        $data = $request->all();

        $status = Question::create($data);

        if($status)
        {

            return back()->with('success', 'Question envoyee avec succes');
        }
        else{
            return back()->with('error','Quelque chose s\'est mal passe !');
        }
    }
}
