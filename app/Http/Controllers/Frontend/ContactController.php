<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Mailing;
use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('frontend.contacts.index');
    }

    public function contactSubmit(Request $request)
    {
        $this->validate($request,[
            'full_name'=>'string|required',
            'email'=>'string|required',
            'telephone'=>'string|required',
            'sujet'=>'min:4|string|required',
            'message'=>'string|required|min:20',
        ]);

        $data = $request->all();

        $status = Message::create($data);

        if($status)
        {
            // Mail::to('contact@ameenaltech.com')->send(new Contact($data));

            return back()->with('success', 'Message envoye avec succes');
        }
        else{
            return back()->with('error','Quelque chose s\'est mal passe !');
        }
    }

    public function mailing(Request $request)
    {
        $this->validate($request,[
            'email'=>'string|required|unique:mailings,email',
        ]);

        $data = $request->all();

        $status = Mailing::create($data);

        if($status)
        {
            // Mail::to('contact@ameenaltech.com')->send(new Contact($data));

            return back()->with('success', 'Merci de vous être abonné!');
        }
        else{
            return back()->with('error','Quelque chose s\'est mal passe !');
        }
    }
}
