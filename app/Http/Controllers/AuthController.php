<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthController extends Controller
{
    use HasFactory;

    public function login() {
        if (Auth::check()) {
            return redirect('index');
        }

        return view('layout.login');
    }

    public function register()
    {
        if (Auth::check()) {
            return redirect('index');
        }
        return view('layout.register');
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('/');
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/login');
        }
    }

    public function actionregister(Request $request)
    {

        // Session::flash("message", $request->nama.$request->email);
        try {
            $existingUser = DB::table("users")->where("email", $request->email)->exists();
            
            if ($existingUser) {
                Session::flash('error', 'Failed creating account, email exists');
                return redirect()->route('register');
            }

            $user = DB::table("users")
            ->insert([
                'name' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 1,
                'no_hp' => $request->nomor,
            ]);
            Session::flash('message', 'Registration successful! Please login. '.$request->name);
            return redirect()->route('register');
        } catch (\Illuminate\Database\QueryException $e) {
            $errorMessage = 'Failed creating account.';
            if (env('APP_DEBUG')) {
                $errorMessage .= ' (' . $e->getMessage() . ')';
            }
            Session::flash('error', $errorMessage);
            return redirect()->route('register');
        }
    }
    public function actionlogout()
    {
        Auth::logout();
        return redirect()->route("index");
    }
}
