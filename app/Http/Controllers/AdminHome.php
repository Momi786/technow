<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\HomeContentModel;

class AdminHome extends Controller
{
    public function adminHome(Request $request){

            return view('Admin.index');

    }


    // Login process
        public function login()
        {
            return view('Admin.login');
        }

        // login Process

        public function loginProcess(Request $request)
        {
            // validate input fields
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:6'
            ]);

            // Get USer From Data Base
            $credentials = User::where('email', '=', $request->email);

            if(!$credentials){
                return back()->with('fail','We Do not Recognize Your Email');
            }else {
                
            }

        }



    // // login Process
    // public function loginProcess(Request $request){
    //     $data = $request->all();
    //     $user = User::where('email',$data['email'])->where('password',$data['password'])->first();
    //     if ($user) {
    //         $request->session()->put('onlineuser',$user);
    //         return back();
    //     }else{
    //         return back()->with('error','wrong username or password.');
    //     }
    // }
    // // logout process
    // public function logout(Request $request){
    //     if($request->Session()->has('onlineuser')){
    //         $request->Session()->pull('onlineuser');
    //     }
    //     return redirect('admin');
    // }
    // homeContent process
    public function homeContent(Request $request){
        $allData = HomeContentModel::all();
      return view('Admin/content/home-content',compact('allData'));
    }
    // homeContent process
    public function homeContentChange(Request $request){
        $data = $request->all();
        $allData = HomeContentModel::where('name',$data['name'])->first();
        $allData->fill($data);
        $allData->save();
      return back();
    }
}
