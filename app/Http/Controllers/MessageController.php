<?php

namespace App\Http\Controllers;

use App\Exceptions\Handler;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Message;
class MessageController extends Controller
{
    //

 public function ajouterMessage(Request $request)
 {
     echo Auth::user()->messages()->create($request->all());
 }

    public function listeMessages(Request $request)
    {
        //wheeeeeeeeeere
       // $messages = Auth::user()->messages()->orderBy("created_at","desc")->get();
        $messages = Message::with("user")->get();
        echo json_encode($messages);
    }

    public function supprimerMessage(Request $request)
    {
        Auth::user()->messages()->where('_id',$request->all()["message_id"])->delete();

        echo "1";
    }
}
