<?php

namespace App\Http\Controllers;

use App\Exceptions\Handler;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Image;


class UserController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('home');
    }
    public function seConnecter(Request $request)
    {
        return view('login');
    }
    public function postSignIn(Request $request)
{
    $users = DB::collection('users_collection')->get();
    if (Auth::attempt(['email' =>$request['email'],
        'password' => $request["password"]])) {
        return redirect()->route('index');
    }
    return redirect()->back();
}

    public function postSignUp(Request $request)
    {
        //dd($request);
//        $this->validate($request, [
//            'fullName' => 'required|min:4|max:255',
//            'email' => 'required|email'
//        ]);
//        if ($request->hasFile('photo')) {
//            dd("has file");
            //$photo = $request->file('photo');
            $file = Input::file('photo');
            $fileName =  null;
            if($file){
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                Image::make($file)->resize(300, 300)->save(public_path('uploads/avatars' . $fileName));
            }
            //$ext = Input::file('photo')->getClientOriginalExtension();
            //dd($file);

//            $user = Auth::user();
//            $user->$photo = $fileName;
//            $user->save();
            \App\User::create([
                'fullName' => $request['fullName'],
                'password' => bcrypt($request['password']),
                'email' => $request['email'],
                'address' => $request['address'],
                'gender' => $request['gender'],
                'photo' => $fileName,
            ]);
//        }
//        dd("no file");

        return view('login');
    }

    public function logout()
    {
        Auth::logout();
        return view('login');
    }

    public function getProfile()
    {
        return view('profile');
    }

}
