<?php
namespace App\Http\Controllers;

use APP\User;
use Illuminate\Http\Request;
use APP\Http\Requests;
use APP\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function getDashboard()
    {
        return view('dashboard');
    }

    public function postSignUp(Request $request)
    {
      
      //validate the data 
        $this->validate($request, [
            'email' => 'required|email|unique:users',
            'first_name' => 'required|max:120',
            'password' => 'required|min:4'
        ]);
        $first_name = $request['first_name'];
        $email = $request['email'];
        $password = bcrypt($request['password']); // encrypt the password
        $user = new User();
        $user->first_name = $first_name;
        $user->email = $email;
        $user->password = $password;
        $user->save();
      //let user login directy
        Auth::login($user);
        return redirect()->route('dashboard');
    }

    public function postSignIn(Request $request)
    {
       //validate the data 
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return redirect()->route('dashboard');
        }
        return redirect()->bacK();
    }
}
