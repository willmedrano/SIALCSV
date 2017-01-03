<?php



namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Http\Requests\loginRequest;
use App\usuario;
use DB;
use Auth;
use Session;
class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
      //login

       protected function getLogin()
    {
        
   
         return view('inicio.inicios');
    }

      public function postLogin(loginRequest $request)
   {
     


    if (Auth::attempt(['login'=>$request['username'],'password'=>$request['pass']]))
    {

          // $users = DB::table('usuarios')->where('login', '=', $request['username'])->get();
           //$emp=DB::table('empleados')->where('empleados.id', '=', $users[0]->idemp)->get();

      // return view('layouts.inicio',compact('emp'));
        return view('layouts.inicio');
    }
    Session::flash('menssage-error',"Los datos son Incorectos");
    return view('inicio.inicios');
    }
}
