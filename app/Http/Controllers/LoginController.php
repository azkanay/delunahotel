<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        //$credentials = $request->validate([
          //  'username' => 'required|email:dns',
            //'password' => 'required'
        //]);

        $validationData = User::where('email', $request->email)->where('password', $request->password) -> first();
        //dd($validationData);
        if($validationData)
        {
            return redirect('admin');
        }
        else{
            return back() ->with('error', 'Wrong Login Details');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('signin');
    }
}
