<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $languages = Language::orderBy('id','DESC')->get();
        return view('backend.languages.index',compact('languages'));
    }


    public function langageStatus(Request $request){
        if($request->_this =='true'){
            DB::table('languages')->where('id', $request->id)->update(['status'=>'active']);

            return response()->json(['msg'=> 'Langage activée avec succès', 'status'=>true]);
        }
        else{
            DB::table('languages')->where('id', $request->id)->update(['status'=>'inactive']);

            return response()->json(['msg'=> 'Langage désactivée avec succès', 'status'=>true]);
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
        $lang_framework = Language::where('is_language',1)->orderBy('title','ASC')->get();
        return view('backend.languages.create',compact('lang_framework'));
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
            'url' => 'string|nullable',
            'is_language'=>'sometimes|in:1',
            'framework_id'=>'nullable|exists:languages,id',
            'photo'=>'required',
            'status'=>'nullable|in:active,inactive',
        ]);

        $data = $request->all();
        
        $slug = Str::slug($request->input('title'));
        $slug_count = Language::where('slug',$slug)->count();
        if($slug_count>0){
            $slug = time().'-'.$slug;
        }
        $data['slug'] = $slug;

        $data['is_language'] = $request->input('is_language',0);
        // dd($data['is_language']);
        $status = Language::create($data);

        if($status){
            return redirect()->route('langage.index')->with('success', 'Vouz avez créer une Langage avec succès!');
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
        $languages = Language::find($id);
        $lang_framework = Language::where('is_language',1)->orderBy('title','ASC')->get();
        if($languages){
            return view('backend.languages.edit', compact(['languages','lang_framework']));
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
        $languages = Language::find($id);

        if($languages){
            $this->validate($request, [
                'title'=>'string|required',
                'description'=>'string|nullable',
                'is_language'=>'sometimes|in:1',
                'framework_id'=>'nullable|exists:languages,id',
                'url' => 'string|nullable',
                'photo'=>'required',
                'status'=>'nullable|in:active,inactive',
            ]);

            $data = $request->all();
// dd($request->input('framework_id'));
            if($request->is_language == 1)
            {
                $data['framework_id'] = null;
            }
            else
            {
                $data['framework_id'] = $request->input('framework_id');
            }

            $data['is_language'] = $request->input('is_language',0);
            
            $status = $languages->fill($data)->save();
// dd($status);
            if($status){
                return redirect()->route('langage.index')->with('success', 'Langage mise à jour avec succès');
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
        $languages = Language::find($id);
        $lang_framework = Language::where('framework_id',$id)->pluck('id');
        if($languages){
            $status = $languages->delete();
            if($status){
                if(count($lang_framework)>0){
                    Language::shiftChild($lang_framework);
                }
                return redirect()->route('langage.index')->with('success', 'Langage supprime avec succes');
            }
            else {
                return back()->with('error', 'Quelque chose s\'est mal passé !');
            }
        }
        else{
            return back()->with('error', 'Donnée introuvable');
        }
    }

    public function getChildByFrameworkID(Request $request,$id)
    {
        $languages = Language::find($request->id);
        if($languages){
            $child_id = Language::getChildByFrameworkID($request->id);
            if(count($child_id)<=0){
                return response()->json(['status'=>false, 'data'=>null, 'msg'=>'non']);
            }
            return response()->json(['status'=>true, 'data'=>$child_id, 'msg'=>'yes']);
        }
        else{
            return response()->json(['status'=>false, 'data'=>null, 'msg'=>'Catégorie introuvable']);
        }
    }
}
