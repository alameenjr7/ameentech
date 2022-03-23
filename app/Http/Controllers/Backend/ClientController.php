<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clients = Client::orderBy('id','DESC')->get();
        return view('backend.client.index',compact('clients'));
    }

    public function clientStatus(Request $request){
        if($request->_this =='true'){
            DB::table('clients')->where('id', $request->id)->update(['status'=>'active']);

            return response()->json(['msg'=> 'Client activé avec succès', 'status'=>true]);
        }
        else{
            DB::table('clients')->where('id', $request->id)->update(['status'=>'inactive']);

            return response()->json(['msg'=> 'Client désactivé avec succès', 'status'=>true]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'prenom'=>'string|required',
            'nom'=>'string|required',
            'email'=>'string|required',
            'poste'=>'string|required',
            'rate'=>'numeric|required',
            'feedback'=>'string|nullable',
            'web_url'=>'string|nullable',
            'fb_url'=>'string|nullable',
            'tw_url'=>'string|nullable',
            'ig_url'=>'string|nullable',
            'photo'=>'required',
            'status'=>'nullable|in:active,inactive',
        ]);

        $data=$request->all();

        $status = Client::create($data);

        if($status){
            return redirect()->route('client.index')->with('success', 'Vouz avez créer un client avec succès!');
        } else {
            return back()->while('error', 'Quelque chose s\'est mal passé !');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $clients = Client::find($id);

        if($clients){
            return view('backend.client.edit', compact('clients'));
        }
        else{
            return back()->with('error', 'Données introuvables');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $clients = Client::find($id);

        if($clients){
            $this->validate($request, [
                'prenom'=>'string|required',
                'nom'=>'string|required',
                'email'=>'string|required',
                'poste'=>'string|required',
                'rate'=>'numeric|required',
                'feedback'=>'string|nullable',
                'web_url'=>'string|nullable',
                'fb_url'=>'string|nullable',
                'tw_url'=>'string|nullable',
                'ig_url'=>'string|nullable',
                'photo'=>'required',
                'status'=>'nullable|in:active,inactive',
            ]);

            $data = $request->all();

            $status=$clients->fill($data)->save();

            if($status){
                return redirect()->route('client.index')->with('success', 'Client mise à jour avec succès');
            } else {
                return back()->while('error', 'Quelque chose s\'est mal passé !');
            }
        }
        else{
            return back()->with('error', 'Données introuvables');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $clients = Client::find($id);

        if($clients){

            $status = $clients->delete();

            if($status){
                return redirect()->route('client.index')->with('success', 'Client supprimée avec succès');
            }
            else {
                return back()->with('error', 'Quelque chose s\'est mal passé');
            }
        }
        else{
            return back()->with('error', 'Données introuvables');
        }
    }
}
