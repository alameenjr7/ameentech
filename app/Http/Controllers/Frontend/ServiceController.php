<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function index()
    {
        $clients = Client::where('status','active')->orderBy('id','DESC')->get();
        $services = Service::where('status','active')->orderBy('id','DESC')->limit(6)->get();

        return view('frontend.services.index',compact(
            'clients',
            'services',
        ));
    }
}
