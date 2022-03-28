<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Client;
use App\Models\Language;
use App\Models\Publication;
use App\Models\Realisation;
use App\Models\Service;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    //
    public function index()
    {
        $banners = Banner::where('status','active')->orderBy('id','DESC')->get();
        $categories = Category::where(['status'=>'active','is_parent'=>1])->orderBy('id','DESC')->get();
        $languages = Language::where(['status'=>'active','is_language'=>1])->orderBy('id','DESC')->get();
        $services = Service::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        $realisations = Realisation::where(['status'=>'active','condition'=>'terminer','condition'=>'en_cours'])->orderBy('id','DESC')->limit(2)->get();
        $clients = Client::where('status','active')->orderBy('id','DESC')->get();
        $items = DB::table('publication_reviews')
            ->select('publication_id',DB::raw('COUNT(publication_id) as count'))
            ->groupBy('publication_id')
            ->orderBy('count','DESC')
            ->paginate(3);
        $publication_ids = [];
        foreach($items as $item){
            array_push($publication_ids,$item->publication_id);
        }
        // $idImplodedPub = implode(',',array_fill(0,count($publication_ids),'?'));
        $bestPub = Publication::whereIn('id',$publication_ids)->limit(3)->get();
        $lastPublication = Publication::where('status','active')
        ->orderBy('id','DESC')
        ->limit(3)
        ->get();
        // dd($lastPublication);
        return view('welcome',compact(
            'banners',
            'categories',
            'languages',
            'services',
            'realisations',
            'clients',
            'bestPub'
        ));
    }

}
