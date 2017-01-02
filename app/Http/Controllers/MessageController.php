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
         $message = Auth::user()->messages()->create($request->all());

         return Message::with("user")->find($message->id);
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

    public function getLastUnseenMessages(){

        return Auth::user()->messages->where("isSeen",false);
    }

    public function getCountUnseenMessages(){

        $NbrUnseenMessages = Message::with("conversation")->where("isSeen","false")->where("user_id","<>",Auth::user()->id)->count();
        echo json_encode($NbrUnseenMessages);

    }


    public function seenConversation(Request $request){

        $message = Message::where("_id",$request->all()["message_id"])->first();
        $message->isSeen = true;
        $message->save();
        echo "1";
    }
}
