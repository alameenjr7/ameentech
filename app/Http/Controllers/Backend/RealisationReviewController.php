<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\RealisationReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RealisationReviewController extends Controller
{
    //
    public function index()
    {
        $reaReviews = RealisationReview::orderBy('id','DESC')->get();
        return view('backend.reareviews.index',compact('reaReviews'));
    }

    public function reaReviewStatus(Request $request){
        if($request->_this =='true'){
            DB::table('realisation_reviews')->where('id', $request->id)->update(['status'=>'active']);
            
            return response()->json(['msg'=> 'Commentaire activer avec succes', 'status'=>true]);
        }
        else{
            DB::table('realisation_reviews')->where('id', $request->id)->update(['status'=>'inactive']);
            
            return response()->json(['msg'=> 'Commentaire desactiver avec succes', 'status'=>true]);
        }
    }

    
    //Review
    public function RealisationReview(Request $request)
    {
        $this->validate($request,[
            'rate' => 'required|numeric',
            'full_name' => 'required|string',
            'email' => 'required|string',
            'review' => 'nullable|string',
            'status' => 'nullable|in:active,inactive'
        ]);

        $data = $request->all();

        $status = RealisationReview::create($data);
        
        if($status){
            return back()->with('success','Merci pour votre feedback');
        }
        else{
            return back()->with('error','SVP! Essayer encore');
        }
    }
}
