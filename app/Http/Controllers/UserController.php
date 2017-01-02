<?php

namespace App\Http\Controllers;

use App\Exceptions\Handler;
use App\Publication;
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
//    public function index(Request $request)
//    {
//        return view('home');
//    }

    public function index(Request $request)
    {

        $publications = Publication::orderBy('created_at', 'desc')->with("user")->paginate(2)->toArray();

        return view("home", ["publications" => $publications]);
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

            $file = Input::file('photo');
            $fileName =  null;
            if($file){
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                Image::make($file)->resize(300, 300)->save(public_path('uploads/avatars' . $fileName));
            }

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

    public function getProfileFreind($id)
    {
        return view('profileAmis',['user' => \App\User::find($id)]);
    }

    //added by jebli

    public function listeUsers(Request $request)
    {
        //  dd($request);
        // Formation::create($request->all());
        $users = \App\User::where('_id','<>',Auth::user()->id)->get();
        // dd($users);
        echo json_encode($users);
    }

}
