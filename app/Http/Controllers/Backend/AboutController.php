<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $abouts = About::orderBy('id','DESC')->get();
        return view('backend.abouts.index',compact('abouts'));
    }


    public function aboutStatus(Request $request){
        if($request->_this =='true'){
            DB::table('abouts')->where('id', $request->id)->update(['status'=>'active']);

            return response()->json(['msg'=> 'A Propos activée avec succès', 'status'=>true]);
        }
        else{
            DB::table('abouts')->where('id', $request->id)->update(['status'=>'inactive']);

            return response()->json(['msg'=> 'A Propos désactivée avec succès', 'status'=>true]);
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
        return view('backend.abouts.create');
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
            'title'=>'string|required',
            'description'=>'string|nullable',
            'photo'=>'required',
            'status'=>'nullable|in:active,inactive',
        ]);

        $data = $request->all();

        $status = About::create($data);

        if($status){
            return redirect()->route('apropos.index')->with('success', 'Créer avec succès!');
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
        $abouts = About::find($id);

        if($abouts){
            return view('backend.abouts.edit', compact('abouts'));
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
        $abouts = About::find($id);

        if($abouts){
            $this->validate($request, [
                'title'=>'string|required',
                'description'=>'string|nullable',
                'photo'=>'required',
                'status'=>'nullable|in:active,inactive',
            ]);

            $data = $request->all();

            $status = $abouts->fill($data)->save();

            if($status){
                return redirect()->route('apropos.index')->with('success', 'A Propos mise à jour avec succès');
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
        $abouts = About::find($id);

        if($abouts){

            $status = $abouts->delete();

            if($status){
                return redirect()->route('apropos.index')->with('success', 'A Propos supprimée avec succès');
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
