<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Realisation;
use Illuminate\Http\Request;

class RealisationController extends Controller
{
    //
    public function index()
    {
        $realisations = Realisation::where('status','active')->where(['condition'=>'terminer,en_cours'])->paginate(6);

        return view('frontend.cas.index',compact(
            'realisations'
        ));
    }
}
