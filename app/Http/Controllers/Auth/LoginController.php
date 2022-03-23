<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
use Session;

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
   // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
             $email = $request['email'];
             
              $user=DB::select('SELECT id,role_code FROM users
                                     WHERE email = ?',array($email));
           
             $user_id=$user[0]->id;
             $role_code=$user[0]->role_code;
             
            // $request->session()->regenerate();
             Session::put('user_id', $user_id);
             Session::put('role_code', $role_code);
    
 
            return redirect()->intended($this->redirectPath());
            
         }else{
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
            'role_code' =>'Does no match role'
        ]);
    }
    
    }
    //protected function getlogout(){
     // Auth::Logout();
     // return redirect('/');
  //}
}

