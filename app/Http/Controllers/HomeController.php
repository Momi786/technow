<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeContentModel;
use App\Models\FooterModel;

// Service Model Load

use App\Models\Services;
use App\Models\Team;

class HomeController extends Controller
{
    // Home Page Function
    public function index(){
        $allContent = HomeContentModel::all();
        $service = Services::orderBy('id','desc')->where('feature',1)->skip(0)->take(4)->get();
        $team = Team::orderBy('id','desc')->where('feature',1)->skip(0)->take(4)->get();
        $footer = FooterModel::all();
        return view('web.index',compact('team','service','allContent','footer'));
    }

    // Serevice Page function
    public function services(){
        $service = Services::all();
        $allContent = HomeContentModel::all();
        return view('web.service',compact('service','allContent'));
    }


    // team Page Function
    public function team(){
        $team = Team::all();
        $allContent = HomeContentModel::all();
        return vieW('web.team',compact('team','allContent'));
    }



    // team Page Function
    public function about(){
        $service = Services::orderBy('id','desc')->where('feature',1)->skip(0)->take(4)->get();
        $allContent = HomeContentModel::all();
        return vieW('web.about',compact('allContent'));
    }


    // contact Page Function
    public function contact(){
        return vieW('web.contact');
    }
}
