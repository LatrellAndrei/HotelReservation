<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $data = User:: all();
        return view('user.index',['users' => $data]);
    }
        
    /*public function show($id) {
      
        $data=array( 
        "id"=> $id,
        "name"=> "John Doe",
        "age"=> 35,
        "email" => "johndoe@gmail.com"
        );
      //return view('user',['data'=>$data]);
      return view('user', $data);
    }
    */
} 

