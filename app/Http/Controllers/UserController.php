<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function saveUser(Request $request){
        $data = $request->all();
        if($request->hasFile('profile_image')){
            $data['profile_image'] = $request->profile_image->store("avatar","public");
        }
        User::create($data);
        return redirect()->back();
    }

    public function getUsers(){
        $users = User::get();
        return view("user-list", ["users" => $users]);
    }
}
