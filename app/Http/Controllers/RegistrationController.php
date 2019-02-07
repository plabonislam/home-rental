<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('register.reg');
    }

    public function store()
    {
    	      $this->validate (request(),[
            'name'=>'required',
'email'=>'required|email',
'password'=>'required|confirmed'
        ]);


    	 $user=User::create([
'name'=>request('name'),
'email'=>request('email'),
'password'=>bcrypt(request('password'))
]);
//   \Auth:: or auth() are same

//sign the user
auth()->login($user);    
return redirect('/'); 
    }

}
