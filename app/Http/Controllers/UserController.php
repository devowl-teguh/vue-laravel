<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\serviceMail;
use App\User;
use Hash, Mail;

class UserController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    public function index(){
      $user = User::get();
      return response()->json($user, 200);
    }

    public function store(Request $request){
      $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
      ]);
      $user = new User();
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = Hash::make($request->password);
      $user->save();
      return response()->json($user, 200);
    }

    public function updateUser($id, Request $request){
      $user = User::find($id);
      if($user){
        $update = $request->all();
        $user->update($update);
        return response()->json($user, 200);
      }
      return response()->json(['message'=>'User not found'], 404);
    }

    public function deleteUser(){

    }

    public function sendMail(){
          Mail::to('teguhh.pratama@gmail.com')->send(new serviceMail());
          return response()->json('Success send email',200);
      
    }
}
