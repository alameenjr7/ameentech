<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Language;
use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    //
    public function index()
    {
        $publications = Publication::query();

        // Filtrer par categorie
        if(!empty($_GET['category']))
        {
            $slug = explode(',',$_GET['category']);
            $cat_ids = Category::select('id')->whereIn('slug',$slug)->pluck('id')->toArray();
            $publications = $publications->whereIn('cat_id',$cat_ids);
        }

        if(!empty($_GET['language']))
        {
            $slug = explode(',',$_GET['language']);
            $lang_ids = Language::select('id')->whereIn('slug',$slug)->pluck('id')->toArray();
            $publications = $publications->whereIn('language_id',$lang_ids);
        }

        else
        {
            $publications = $publications->where(['status'=>'active','conditions'=>'publier'])->paginate(8);
        }

        $languages = Language::where(['status'=>'active','is_language'=>1])->orderBy('title','ASC')->with('publications')->get();
        $cats = Category::where(['status'=>'active','is_parent'=>1])->with('publications')->orderBy('title','ASC')->get();
        $lastPublications = Publication::where(['status'=>'active','conditions'=>'publier'])->orderBy('id','DESC')->limit(4)->get();

        return view('frontend.blogs.index',compact('publications','cats','languages','lastPublications'));
    }

    public function publicationDetail($slug)
    {
        $publications = Publication::query();
        $lastPublications = Publication::where(['status'=>'active','conditions'=>'publier'])
        ->orderBy('id','DESC')
        ->limit(4)
        ->get();
        $categories = Category::where(['status'=>'active','is_parent'=>1])->with('publications')->orderBy('title','ASC')->get();
        $languages = Language::where(['status'=>'active','is_language'=>1])->orderBy('title','ASC')->with('publications')->get();

        if(!empty($_GET['category']))
        {
            $slug = explode(',',$_GET['category']);
            $cat_ids = Category::select('id')->whereIn('slug',$slug)->pluck('id')->toArray();
            $publications = $publications->whereIn('cat_id',$cat_ids);
        }

        if(!empty($_GET['language']))
        {
            $slug = explode(',',$_GET['language']);
            $lang_ids = Language::select('id')->whereIn('slug',$slug)->pluck('id')->toArray();
            $publications = $publications->whereIn('language_id',$lang_ids);
        }
        else{
            $publications = Publication::with('rel_pubs')->where('slug',$slug)->first();
        }

        if($publications) {
            return view('frontend.blogs.blog-detail',compact(['publications','lastPublications','categories','languages']));
        }
        else {
            return view('errors.404');
        }
    }

    public function publicationFilter(Request $request)
    {
        $data = $request->all();

        $catUrl = '';
        if(!empty($data['category']))
        {
            foreach($data['category'] as $category)
            {
                if(empty($catUrl))
                {
                    $catUrl .='&category='.$category;
                }
                else{
                    $catUrl .=','.$category;
                }
            }
        }

        // $sortByUyl = '';
        // if(!empty($data['sortBy']))
        // {
        //     $sortByUyl.='&sortBy='.$data['sortBy'];
        // }

        $langUrl = '';
        if(!empty($data['language']))
        {
            foreach($data['language'] as $language)
            {
                if(empty($langUrl)){
                    $langUrl.='&language='.$language;
                }
                else{
                    $langUrl.=','.$language;
                }
            }
        }

        return \redirect()->route('publication',$catUrl.$langUrl);
    }

    public function autoSearch(Request $request)
    {
        $query = $request->get('term','');

        $publications = Publication::where('title','LIKE','%'.$query.'%')->get();

        $data = array();
        foreach($publications as $publication)
        {
            $data[]=array('value'=>$publication->title,'id'=>$publication->id);
        }
        if(count($data))
        {
            return $data;
        }
        else
        {
            return ['value'=>'Aucun résultat trouvé!','id'=>''];
        }
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $publications = Publication::where('title','LIKE','%'.$query.'%')->orderBy('id','DESC')->paginate(8);
        $languages = Language::where(['status'=>'active','is_language'=>1])->with('publications')->orderBy('title','ASC')->get();
        $cats = Category::where(['status'=>'active','is_parent'=>1])->with('publications')->orderBy('title','ASC')->get();
        $lastPublications = Publication::where(['status'=>'active','conditions'=>'publier'])
        ->orderBy('id','DESC')
        ->limit(4)
        ->get();

        return view('frontend.blogs.index',compact('publications','cats','languages','lastPublications'));
    }

}
