<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Language;
use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publications = Publication::orderBy('id', 'DESC')->get();
        return view('backend.publication.index', compact('publications'));
    }

    public function publicationStatus(Request $request){
        if($request->_this=='true'){
            DB::table('publications')->where('id', $request->id)->update(['status'=>'active']);
                    
            return response()->json(['msg'=> 'Publication activée avec succès', 'status'=>true]);

        }
        else{
            DB::table('publications')->where('id', $request->id)->update(['status'=>'inactive']);

            return response()->json(['msg'=> 'Publication désactivée avec succès', 'status'=>true]);
        }
    }

    public function publicationDetail($slug)
    {
        $publications = Publication::with('rel_pubs')->where('slug',$slug)->first();
        $lastPublication = Publication::where('status','active')
        ->orderBy('id','DESC')
        ->limit(3)
        ->get();
        $categories = Category::where(['status'=>'active','is_parent'=>1])->with('publications')->orderBy('title','ASC')->get();
        $languages = Language::where(['status'=>'active','is_language'=>1])->with('publications')->orderBy('title','ASC')->get();


        if($publications) {
            return view('backend.publication.detail',compact(['publications','lastPublication','categories','languages']));
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
        return view('backend.publication.create');
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
        $this->validate($request,[
            'title' => 'string|required',
            'photo' => 'nullable',
            'contenu' => 'string|required',
            'cat_id'=>'integer|required',
            'child_cat_id'=>'integer|nullable',
            'child_lang_id'=>'integer|nullable',
            'language_id'=>'integer|required',
            'conditions' => 'nullable|in:publier,future',
            'status' => 'nullable|in:active,inactive'
        ]);

        $data = $request->all();

        $slug = Str::slug($request->input('title'));
        $slug_count = Publication::where('slug',$slug)->count();
        if($slug_count>0){
            $slug = time().'-'.$slug;
        }
        $data['slug'] = $slug;

        $status = Publication::create($data);
        
        if($status){
            return redirect()->route('publication.index')->with('success','Publication créée avec succès');
        }
        else {
            return back()->withErrors('Quelque chose s\'est mal passé!');
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
        $publications = Publication::find($id);
        if($publications){
            return view('backend.publication.edit',compact('publications'));
        }
        else{
            return back()->withErrors('Publication introuvable');
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
        $publications = Publication::find($id);
        if($publications){
            $this->validate($request,[
                'title' => 'string|required',
                'photo' => 'nullable',
                'contenu' => 'string|required',
                'cat_id'=>'integer|required',
                'child_cat_id'=>'integer|nullable',
                'child_lang_id'=>'integer|nullable',
                'language_id'=>'integer|required',
                'conditions' => 'nullable|in:publier,future',
                'status' => 'nullable|in:active,inactive'
            ]);

            $data = $request->all();

            $status = $publications->fill($data)->save();
            if($status){
                return redirect()->route('publication.index')->with('success','Publication modifiée avec succès');
            }
            else {
                return back()->withErrors('Quelque chose s\'est mal passé!');
            }
        }
        else{
            return back()->withErrors('Publication introuvable');
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
        $publications = Publication::find($id);
        if($publications){
            $status = $publications->delete();
            if($status){
                return redirect()->route('publication.index')->with('success','Publication supprimée avec succès');
            }
            else {
                return back()->withErrors('Quelque chose s\'est mal passé!');
            }
        }
        else {
            return back()->withErrors('Donnée introuvable');
        }

    }
}
