<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;




class UserController extends Controller
{
    // User list
    public function userlist(){
        $user = User::all();
        return view('Admin.user.userlist',compact('user'));
    }


    // Add Service
    public function adduser(){
        return view('Admin.user.add-user');
    }

    // Add process
    public function addprocess(Request $request){
        $data = $request->all();
        if ($request->file('img') != null) {
            $path = $request->file('img')->store('UserImage');
            $userimg = $path;

        }
        $newData = new User;
        $data['img'] = $userimg;
        $newData->fill($data);
        $newData-> save();
        return back()->with('success', 'User Has Been Added Succesfully');
    }


}
