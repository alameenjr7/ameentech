<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function projectSubmit(Request $request)
    {
        $this->validate($request,[
            'user_fullname'=>'string|required',
            'email'=>'string|required',
            'telephone'=>'string|required',
            'residence'=>'string|required',
            'project'=>'string|nullable',
            'budget'=>'numeric|nullable',
            'besoin_client'=>'string|required|min:20',
        ]);

        $data = $request->all();

        $status = Project::create($data);

        if($status)
        {
            return back()->with('success', 'Votre projet a été enregistré avec succès');
        }
        else{
            return back()->with('error','Quelque chose s\'est mal passe !');
        }
    }
}
