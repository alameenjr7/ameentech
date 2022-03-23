<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'DESC')->get();
        return view('backend.categories.index', compact('categories'));
    }

    public function categoriestatus(Request $request){
        if($request->_this=='true'){
            DB::table('categories')->where('id', $request->id)->update(['status'=>'active']);

            return response()->json(['msg'=> 'Catégorie activée avec succès', 'status'=>true]);

        }
        else{
            DB::table('categories')->where('id', $request->id)->update(['status'=>'inactive']);
            
            return response()->json(['msg'=> 'Catégorie désactivée avec succès', 'status'=>true]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent_cats = Category::where('is_parent',1)->orderBy('title','ASC')->get();
        return view('backend.categories.create',compact('parent_cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'title'=>'string|required',
            'description'=>'string|nullable',
            'is_parent'=>'sometimes|in:1',
            'parent_id'=>'nullable|exists:categories,id',
            'status'=>'required|in:active,inactive',
        ]);
        $data = $request->all();

        $slug = Str::slug($request->input('title'));
        $slug_count = Category::where('slug',$slug)->count();
        if($slug_count>0){
            $slug = time().'-'.$slug;
        }
        $data['slug'] = $slug;
        $data['is_parent'] = $request->input('is_parent',0);

        $status = Category::create($data);
        if($status){
            return redirect()->route('categorie.index')->with('success', 'Catégorie créée avc succs');
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
        $categories = Category::find($id);
        $parent_cats = Category::where('is_parent',1)->orderBy('title','ASC')->get();
        if($categories){
            return view('backend.categories.edit', compact(['categories','parent_cats']));
        }
        else{
            return back()->with('error', 'Catégorie introuvable');
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
        $categories = Category::find($id);
        if($categories){
            $this->validate($request, [
                'title'=>'string|required',
                'description'=>'string|nullable',
                'is_parent'=>'sometimes|in:1',
                'parent_id'=>'nullable|exists:categories,id',
                'status'=>'nullable|in:active,inactive',
            ]);
            $data=$request->all();

            if($request->is_parent == 1)
            {
                $data['parent_id'] = null;
            }
            else
            {
                $data['parent_id'] = $request->input('parent_id');
            }

            $data['is_parent'] = $request->input('is_parent',0);

            $status = $categories->fill($data)->save();

            if($status){
                return redirect()->route('categorie.index')->with('success', 'Catégorie mise à jour avec succès');
            } else {
                return back()->while('error', 'Quelque chose s\'est mal passé !');
            }
        }
        else{
            return back()->with('error', 'Donnée introuvable');
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
        $categories=Category::find($id);
        $child_cat_id = Category::where('parent_id',$id)->pluck('id');
        if($categories){
            $status = $categories->delete();
            if($status){
                if(count($child_cat_id)>0){
                    Category::shiftChild($child_cat_id);
                }
                return redirect()->route('categorie.index')->with('success', 'Categorie successfully deleted');
            }
            else {
                return back()->with('error', 'Quelque chose s\'est mal passé !');
            }
        }
        else{
            return back()->with('error', 'Donnée introuvable');
        }
    }

    public function getChildByParentID(Request $request,$id)
    {
        $categories = Category::find($request->id);
        if($categories){
            $child_id = Category::getChildByParentID($request->id);
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
