<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;

class ServicesController extends Controller
{
    // Services List
    public function serviceList(){
        $allData = Services::all();
        return view('Admin.services.serviceList',compact('allData',));
    }



    // Add Service\
    public function addService(){
        return view('Admin.services.addService');
    }

    // Add Process data
    public function addprocess(Request $request){
        $data = $request->all();
        $newData = new Services;
        $newData->fill($data);
        $newData->save();
        return back();
    }

    // Edit FUnction
    // Services List
    public function edit(Request $request,$id){
        $allData = Services::find($id);
        return view('Admin.services.editService',compact('allData'));
    }


    // Add Edit data
    public function EditProcess(Request $request,$id){
        $data = $request->all();
        $newData = Services::find($id);
        $newData->fill($data);
        $newData->save();
        return back();
    }

    // Delete function
    public function delete(Request $request,$id){
        $newData = Services::find($id);
        $newData->delete();
        return back();
    }
}
