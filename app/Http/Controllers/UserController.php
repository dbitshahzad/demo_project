<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   public function create()
   {
      return view('content.register');
   }
   public function store(Request $request)
   {
      $request->validate([
         'name' => ['required',],
         'email' => ['required', 'email'],
         'password' => ['required'],
         'role' => ['required', 'string', 'in:Employee,Visitor'],
         // 'cnic' => ['required'],

      ]);
      $user = new User();
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = Hash::make($request->password);
      // $user->cnic=$request->cnic;
      $user->save();
      return back()->with('message', 'You are Registerd Successfully');
   }
   public function Dashbord()
   {
      return view('content.index');
   }


}
