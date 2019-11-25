<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\tbl_users;
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
      $user=new \App\Model\tbl_users;
        $user->Name = 'Zoro';
        $user->Email = 'Zoro@gmail.com';
        $user->Password = 'Zoro123';
        $user->IsLock = true;
        $user->save();
    }

}
