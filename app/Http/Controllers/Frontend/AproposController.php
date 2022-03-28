<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Client;
use App\Models\Question;
use Illuminate\Http\Request;

class AproposController extends Controller
{
    //
    public function index()
    {
        $abouts = About::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        $clients = Client::where('status','active')->orderBy('id','DESC')->get();
        $questions = Question::where('status','active')->where('response', '<>', '', 'and')->orderBy('id','DESC')->limit('6')->get();
        
        return view('frontend.abouts.index',compact(
            'abouts',
            'clients',
            'questions'
        ));
    }
}
