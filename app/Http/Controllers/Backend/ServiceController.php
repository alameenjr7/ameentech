<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $services = Service::orderBy('id','DESC')->get();
        return view('backend.services.index',compact('services'));
    }

    public function servicestatus(Request $request){
        if($request->_this =='true'){
            DB::table('services')->where('id', $request->id)->update(['status'=>'active']);

            return response()->json(['msg'=> 'Service activée avec succès', 'status'=>true]);
        }
        else{
            DB::table('services')->where('id', $request->id)->update(['status'=>'inactive']);

            return response()->json(['msg'=> 'Service désactivée avec succès', 'status'=>true]);
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
        return view('backend.services.create');
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

        $data=$request->all();

        $slug = Str::slug($request->input('title'));
        $slug_count = Service::where('slug',$slug)->count();

        if($slug_count>0){
            $slug = time().'-'.$slug;
        }
        $data['slug'] = $slug;

        $status = Service::create($data);

        if($status){
            return redirect()->route('service.index')->with('success', 'Vouz avez créer une Service avec succès!');
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
        $services = Service::find($id);

        if($services){
            return view('backend.services.edit', compact('services'));
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
        $services = Service::find($id);

        if($services){
            $this->validate($request, [
                'title'=>'string|required',
                'description'=>'string|nullable',
                'photo'=>'required',
                'status'=>'nullable|in:active,inactive',
            ]);

            $data = $request->all();

            $status=$services->fill($data)->save();

            if($status){
                return redirect()->route('service.index')->with('success', 'Service mise à jour avec succès');
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
        $services = Service::find($id);

        if($services){

            $status = $services->delete();

            if($status){
                return redirect()->route('service.index')->with('success', 'Service supprimée avec succès');
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
