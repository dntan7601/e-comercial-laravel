<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;


class UserController extends Controller
{
    //
   function login(Request $req) {
         $user =  User::where(['email' => $req->email])->first();
         if(!$user || !Hash::check($req->password, $user->password )) {
            return 'Email or password incorrect';
         }else {
            $req->session()->put('user', $user);
            return redirect("/");
         }
   }

   static function getCurrentUser() {
      $userName =  Session::get('user')['name'];
      return $userName;
   }

   // function logout() {

   // }
}
