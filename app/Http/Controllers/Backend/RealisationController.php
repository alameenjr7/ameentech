<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Language;
use App\Models\Realisation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RealisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $realisations = Realisation::orderBy('id','DESC')->get();
        return view('backend.realisation.index',compact('realisations'));
    }

    public function realisationStatus(Request $request){
        if($request->_this =='true'){
            DB::table('realisations')->where('id', $request->id)->update(['status'=>'active']);

            return response()->json(['msg'=> 'Réalisation activée avec succès', 'status'=>true]);
        }
        else{
            DB::table('realisations')->where('id', $request->id)->update(['status'=>'inactive']);

            return response()->json(['msg'=> 'Réalisation désactivée avec succès', 'status'=>true]);
        }
    }

    public function realisationDetail($slug)
    {
        $realisations = Realisation::with('rel_reals')->where('slug',$slug)->first();
        $lastRealisation = Realisation::where('status','active')
        ->orderBy('id','DESC')
        ->limit(3)
        ->get();
        $categories = Category::where(['status'=>'active','is_parent'=>1])->with('realisations')->orderBy('title','ASC')->get();
        $languages = Language::where(['status'=>'active','is_language'=>1])->with('realisations')->orderBy('title','ASC')->get();


        if($realisations) {
            return view('backend.realisation.detail',compact(['realisations','lastRealisation','categories','languages']));
        }
        else {
            return view('backend.errors.404');
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
        return view('backend.realisation.create');
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
        // dd($request->all());
        $this->validate($request, [
            'title'=>'string|required',
            'contenu'=>'string|required',
            'client_id'=>'string|nullable',
            'categorie_id'=>'integer|required',
            'child_cat_id'=>'integer|nullable',
            'child_lang_id'=>'integer|nullable',
            'language_id'=>'integer|required',
            'photo'=>'required',
            'condition'=>'nullable|in:terminer,en_cours,future',
            'status'=>'nullable|in:active,inactive',
        ]);

        $data=$request->all();

        $slug = Str::slug($request->input('title'));
        $slug_count = Realisation::where('slug',$slug)->count();

        if($slug_count>0){
            $slug = time().'-'.$slug;
        }
        $data['slug'] = $slug;

        $status = Realisation::create($data);

        if($status){
            return redirect()->route('realisation.index')->with('success', 'Vouz avez ajouter une Realisation avec succès!');
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
        $realisations = Realisation::find($id);

        if($realisations){
            return view('backend.realisation.edit', compact('realisations'));
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
        $realisations = Realisation::find($id);

        if($realisations){
            $this->validate($request, [
                'title'=>'string|required',
                'contenu'=>'string|required',
                'client_id'=>'string|nullable',
                'categorie_id'=>'integer|required',
                'child_cat_id'=>'integer|nullable',
                'child_lang_id'=>'integer|nullable',
                'language_id'=>'integer|required',
                'photo'=>'required',
                'condition'=>'nullable|in:terminer,en_cours,future',
                'status'=>'nullable|in:active,inactive',
            ]);

            $data = $request->all();

            $status = $realisations->fill($data)->save();

            if($status){
                return redirect()->route('realisation.index')->with('success', 'Realisation mise à jour avec succès');
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
        $realisations = Realisation::find($id);

        if($realisations){

            $status = $realisations->delete();

            if($status){
                return redirect()->route('realisation.index')->with('success', 'Realisation supprimée avec succès');
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
