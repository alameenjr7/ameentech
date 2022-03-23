<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $banners = Banner::orderBy('id','DESC')->get();
        return view('backend.banner.index',compact('banners'));
    }

    public function bannerStatus(Request $request){
        if($request->_this =='true'){
            DB::table('banners')->where('id', $request->id)->update(['status'=>'active']);

            return response()->json(['msg'=> 'Bannière activée avec succès', 'status'=>true]);
        }
        else{
            DB::table('banners')->where('id', $request->id)->update(['status'=>'inactive']);

            return response()->json(['msg'=> 'Bannière désactivée avec succès', 'status'=>true]);
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
        return view('backend.banner.create');
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
            'subtitle'=>'string|required',
            'description'=>'string|nullable',
            'photo'=>'required',
            'status'=>'nullable|in:active,inactive',
        ]);

        $data=$request->all();

        $slug = Str::slug($request->input('title'));
        $slug_count = Banner::where('slug',$slug)->count();

        if($slug_count>0){
            $slug = time().'-'.$slug;
        }
        $data['slug'] = $slug;

        $status = Banner::create($data);

        if($status){
            return redirect()->route('banniere.index')->with('success', 'Vouz avez créer une bannière avec succès!');
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
        $banners = Banner::find($id);

        if($banners){
            return view('backend.banner.edit', compact('banners'));
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
        $banners = Banner::find($id);

        if($banners){
            $this->validate($request, [
                'title'=>'string|required',
                'subtitle'=>'string|required',
                'description'=>'string|nullable',
                'photo'=>'required',
                'status'=>'nullable|in:active,inactive',
            ]);

            $data = $request->all();

            $status=$banners->fill($data)->save();

            if($status){
                return redirect()->route('banniere.index')->with('success', 'Bannière mise à jour avec succès');
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
        $banners = Banner::find($id);

        if($banners){

            $status = $banners->delete();

            if($status){
                return redirect()->route('banniere.index')->with('success', 'Bannière supprimée avec succès');
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
