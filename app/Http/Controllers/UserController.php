<?php

namespace App\Http\Controllers;

use App\Exceptions\Handler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Test;
class UserController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('index');
    }
    public function seConnecter(Request $request)
    {
        return view('login');
    }
    public function postLogin(Request $request)
    {
//        $this->validate($request, [
//            'email' => 'required|email'
//        ]);
        $data = $request->all();
        $u = Test::where('email', $data['email'])->first();
//        dd($data);
        if($u && $data['password'] == $u->name){
            return redirect('index');
        }else{
//            Test::create([
//                'name' => $data['password'],
//                'email' => $data['email']
//            ]);
            return view('login', ['errors' => ['erreur d\'authentification']]);
        }
    }
    public function postSignIn(Request $request)
    {

//        Test::create([
//                'email' => $request['email'],
//                'password' => bcrypt($request['password'])
//            ]);
//        dd($request);
        $users = DB::collection('users_collection')->get();
       // dd($users);
        //echo $request["password"];
//        dd(Auth::attempt(['email' =>$request['email'],
//            'password' => $request["password"]]));
        if (Auth::attempt(['email' =>$request['email'],
        'password' => $request["password"]])) {
            return redirect()->route('index');
        }
        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();
        return view('login');
    }

}
