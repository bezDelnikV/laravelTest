<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\tbl_users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tbl_usersController extends Controller
{
    function index(){
        $persons=\App\Model\tbl_users::all();
        //$dictionary = ['cat'=> 'dog bad!','dog'=>'dog Good!'];
        //echo  $dictionary['cat'];
        return view('index',['persons' => $persons]);

    }
    function addUser()
    {
        return view('registerUser');
    }

    function addUserPost(Request $req)
    {
        $user = new \App\Model\tbl_users;
        $user->Name = $req->input('name');
        $user->Email = $req->input('email');
        $user->Password = $req->input('password');
        $user->IsLock = true;
        $user->save();
    }


}
