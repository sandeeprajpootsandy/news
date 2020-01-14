<?php
   
namespace App\Http\Controllers\Auth;
   
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Auth;
use Exception;
use App\Admin;
   
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
   
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
   
    public function handleGoogleCallback()
    {
          
            $user = Socialite::driver('google')->user();
            
            $finduser = admin::where('google_id', $user->id)->first();
                
            if($finduser)
            {
                               
   
             //   Auth::login($finduser);
                
    
  
                return view('dashboard')->with('user',$user);
   
            }
            
            else
            {
                
                $name = $user->name;
                $email = $user->email;
                $google_id = $user->id;
                
                 $gd = new admin();
                $gd->name = $name;
                $gd->email = $email;
                $gd->google_id = $google_id;
                 
                if($gd->save())
                {
   
                return view('dashboard')->with('user',$gd);
                }
            }
  
        } 
    
}