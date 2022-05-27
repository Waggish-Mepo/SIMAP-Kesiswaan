<?php

namespace App\Http\Controllers\Auth;
use App\Http\Traits\ApiResponse;
use Validator;
use App\Models\User;
use App\Models\EmailTokenVerification;
use App\Models\PersonalAccessToken;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationEmail as VerificationEmail;
use App\Mail\PasswordResetEmail as PasswordResetEmail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use ApiResponse;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    // public function index(){
    //     $data = User::all();
    //     return $this->success([$data],'Fetched SuccessFully');
    // }


    public function register(Request $request)
    {
      $request->validate([
        'userable_id'=>'required',
        'role' => 'required',
        'email' => 'required|email|unique:m_user',
        'password'=> 'required|confirmed',
      ]);
      $user = new User();
      $user->userable_id = $request->userable_id;
      $user->email = $request->email;
      $user->role = $request->role;
      $user->password = Hash::make($request->password);
      $user->save();
      // return response()->json();
      return $this->success(['user' => $user, 'token' => $user->createToken($user->name)->plainTextToken],'succesfully register new user');
    }

    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
        if(auth()->attempt(array('username' => $input['username'], 'password' => $input['password'])))
        {
            return redirect('/dashboard')->with('success','berhasil Login, Selamat Datang admin '.auth()->user()->nama);
        }else{
            // dd(auth()->attempt(array('username' => $input['username'], 'password' => $input['password'])));
            return redirect('/login')->with('errors','gagal login');
        }

    }
    public function logout(Request $request)
    {
        Auth::logout();
        alert()->success('Berhasil', 'Berhasil Logout');
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with('success','berhasil Logout');
    }
}
