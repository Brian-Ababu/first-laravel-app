<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function signup(Request $request){
        //View user entry array
        // return dd($request->all());

        //Save user in the Db
        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'phone_no'=> $request->phone_no,
            'password'=> $request->password,
            'country'=> $request->country
        ]);
    }
}
