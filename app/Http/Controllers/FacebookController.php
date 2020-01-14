<?php


namespace App\Http\Controllers\Auth;

use App\Admin;
use App\Http\Controllers\Controller;
use Socialite;
use Exception;
use Auth;


class FacebookController extends Controller
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

    use AuthenticatesUsers;
   
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';
   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
   
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
   
    public function handleFacebookCallback()
    {
          
            $user = Socialite::driver('facebook')->user();
            
            $finduser = admin::where('facebook_id', $user->id)->first();
                
            if($finduser)
            {
                               
   
             //   Auth::login($finduser);
                
    
  
                return view('dashboard')->with('user',$user);
   
            }
            
            else
            {
                
                $name = $user->name;
                $email = $user->email;
                $facebook_id = $user->id;
                
                 $gd = new admin();
                $gd->name = $name;
                $gd->email = $email;
                $gd->facebook_id = $facebook_id;
                 
                if($gd->save())
                {
   
                return view('dashboard')->with('user',$gd);
                }
            }
  
        } 
}