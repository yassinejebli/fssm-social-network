<?php

namespace App\Http\Controllers;

use App\Exceptions\Handler;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Conversation;
class ConversationController extends Controller
{
    //

 public function ajouterConversation(Request $request)
 {

    // dd($request->all());

     $conversation = Auth::user()->conversations()->create($request->all());
     $conversationWithUser2 = Conversation::with("user2")->where("_id",$conversation->_id)->get()[0];

     echo json_encode($conversationWithUser2);

 }

    public function listeConversations(Request $request)
    {

        //wheeeeeeeeeere
        //$conversations = Auth::user()->conversations()->orderBy("created_at","desc")->get();
        $conversations = Conversation::with("user2","messages","user")->where("user_id",Auth::user()->id)->orWhere("user2_id",Auth::user()->id)->get();
        echo json_encode($conversations);
    }

    public function supprimerConversation(Request $request)
    {
        Auth::user()->conversations()->where('_id',$request->all()["conversation_id"])->delete();

        echo "1";
    }
}
