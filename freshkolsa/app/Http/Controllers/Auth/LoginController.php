<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
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
//     public function checklogin()
// {    if (Auth::check()){
//         //get id of logged in user
//         $userid = Auth::getUser()->id;
//     }
// }        
      use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    

//     public function checkuser()
//     { $q = Users::select(['special_user as special_user']);
//         $q->where('id', '=', '$userid');
//         $q->get();
//         //$results= DB::table('users')->where('id', '=', 1)->get();
//     if($q==1)
//     {
//         $redirectTo = '/admin';
//     }
//     else if($q ==0)
//     {
//          $redirectTo = '/home';
//     }
// }


protected function authenticated($request, $user)
{
    if(auth()->user()->special_user == '1')
    {
        return redirect()->intended('/admin');
    }

    return redirect()->intended('/home');
}



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
