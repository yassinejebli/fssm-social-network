<?php

namespace App\Http\Controllers;

use App\Exceptions\Handler;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Formation;
class PublicationController extends Controller
{
    //

 public function ajouterPublication(Request $request)
 {
   //  dd($request);
    // Formation::create($request->all());
//    Auth::user()->publications()->create($request->all());

     echo json_encode(Auth::user()->publications()->create($request->all()));
 }

    public function listePublications(Request $request)
    {
        //  dd($request);
        // Formation::create($request->all());
        $publications = Auth::user()->publications()->get();
//dd($formations);
        echo json_encode($publications);
    }

    public function supprimerLangue(Request $request)
    {
        //  dd($request);
        // Formation::create($request->all());
        Auth::user()->competences()->where('_id',$request->all()["competence_id"])->delete();

        echo "1";
    }
}
