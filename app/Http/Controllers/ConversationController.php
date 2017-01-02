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
         $conversationWithUser = null;
        // dd($request->all());

         //verification
         $conversRequest = $request->all();

         //select count(*) from conversation where user_id = $conversRequest->user_id and user2_id = $conversRequest->user2_id or user_id = $conversRequest->user2_id and user2_id = $conversRequest->user_id
         //$count = Conversation::where("user_id",$conversRequest->user_id)->where("user_id",$conversRequest->user_id)->count();

         $c = Conversation::where(function($query) use ($conversRequest)
         {
             $query->where('user_id', $conversRequest['user_id'])
                 ->where('user2_id', $conversRequest['user2_id']);
         })->orWhere(function($query) use ($conversRequest)
             {
                 $query->where('user2_id', $conversRequest['user_id'])
                     ->where('user_id', $conversRequest['user2_id']);
             });

         if($c->count() == 0){
             $conversationCreated = Auth::user()->conversations()->create($request->all());

             $conversationWithUser = Conversation::with("user2","user")->where("_id",$conversationCreated->_id)->get()[0];
             echo json_encode($conversationWithUser);

         }else{
             echo json_encode($c->get()->first()->_id);
         }




     }

    public function listeConversations(Request $request)
    {

        //wheeeeeeeeeere
        //$conversations = Auth::user()->conversations()->orderBy("created_at","desc")->get();
        $conversations = Conversation::with("user2","messages","messages.user","user")->where("user_id",Auth::user()->id)->orWhere("user2_id",Auth::user()->id)->get();
        echo json_encode($conversations);
    }

    public function supprimerConversation(Request $request)
    {
        Auth::user()->conversations()->where('_id',$request->all()["conversation_id"])->delete();

        echo "1";
    }
}
