<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\tbl_users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class tbl_usersController extends Controller
{
    function index()
    {
        $persons = \App\Model\tbl_users::all();
        //$dictionary = ['cat'=> 'dog bad!','dog'=>'dog Good!'];
        //echo  $dictionary['cat'];
        return view('index', ['persons' => $persons]);
    }

    function addUser()
    {
        return view('registerUser');
    }

    function addUserPost(Request $req)
    {
//        $user = new \App\Model\tbl_users;
//        $user->Name = $req->input('name');
//        $user->Email = $req->input('email');
//        $user->Password = Hash::make($req->input('password'));
//        $user->IsLock = true;
//        $user->save();
        echo '<br>';
        foreach ($_FILES["fileToUpload"] as $val => $tmp) {
            echo $val;
            echo ' |||||||||||||||||||||| ';
            echo $tmp;
            echo '<br>';
        }
        $target_dir = "uploads/";
        $target_file = $target_dir .uniqid().'.'.basename($_FILES["fileToUpload"]["type"]);
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {

                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

                    echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";

                } else {

                    echo "Sorry, there was an error uploading your file.";
                }

            } else {
                echo "Sorry, your file was not uploaded.";

            }
        }

    }


}
