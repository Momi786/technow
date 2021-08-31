<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;


class TeamController extends Controller
{
    // Services List
    public function teamList(){
        $allData = Team::all();
        return view('Admin.team.teamList',compact('allData'));
    }



    // Add Service\
    public function teamService(){
        return view('Admin.team.addTeam');
    }

    // Add Process data
    public function addprocess(Request $request){
        $data = $request->all();
        if ($request->file("img") != null) {
            $path = $request->file("img")->store("TeamImages");
            $teamimg = $path;
        }
        $newData = new Team;
        $data['img'] = $teamimg;
        $newData->fill($data);
        $newData->save();
        return back();
    }

    // Edit FUnction
    // Services List
    public function edit(Request $request,$id){
        $allData = Team::find($id);
        return view('Admin.team.editteam',compact('allData'));
    }


    // Add Edit data
    public function EditProcess(Request $request,$id){
        $data = $request->all();
        if(!isset($data['feature'])){
            $data['feature'] = 0;
        }
        $newData = Team::find($id);
        $newData->fill($data);
        $newData->save();
        return back()->with("success","You Have Updated Your Data");
    }

    // Delete function
    public function delete(Request $request,$id){
        $newData = Team::find($id);
        $newData->delete();
        return back();
    }



    //Team Page COntant

     public function teamPage()
    {
        return view('Admin.team.teamPageContant');
    }



    // sponser Function

    public function sponser()
    {
        return view('Admin.sponser.index');
    }
}
