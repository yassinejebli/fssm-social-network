<?php

namespace App\Http\Controllers;

use App\Commentaire;
use App\Exceptions\Handler;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Formation;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class PublicationController extends Controller
{
 public function ajouterPublication(Request $request)
 {
     echo json_encode(Auth::user()->publications()->create($request->all()));
 }

    public function ajouterCommentaire(Request $request)
    {

        $createdComment = Auth::user()->commentaires()->create($request->all());
        echo json_encode(Commentaire::with("user")->where("_id",$createdComment->_id)->get()->first());
    }

 public function chargerImage()
 {
     $file = Input::file('file');
     $fileName =  null;
     if($file){
         $fileName = time() . '.' . $file->getClientOriginalExtension();
         //Image::make($file)->resize(300, 300)->save(public_path('uploads/avatars' . $fileName));
         $file->move(public_path('uploads/'), 'avatars'.$fileName);
         echo $fileName;
     }
 }

    public function listePublications(Request $request)
    {
        //  dd($request);
        // Formation::create($request->all());
        $publications = Auth::user()->publications()->with('commentaires','commentaires.user')->get();
//dd($formations);
        echo json_encode($publications);
    }

    public function listePublicationsFriend(Request $request)
    {
        $publications = \App\User::find($request->all()['friend_id'])->publications()->with('commentaires','commentaires.user')->get();
        echo json_encode($publications);
    }
    public function listeCommentaires(Request $request)
    {

        $commentaires = User::with()->publications()->get();
        echo json_encode($commentaires);
    }

    public function supprimerLangue(Request $request)
    {
        //  dd($request);
        // Formation::create($request->all());
        Auth::user()->competences()->where('_id',$request->all()["competence_id"])->delete();

        echo "1";
    }
}
