<?php

namespace App\Http\Controllers;

use App\Exceptions\Handler;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Formation;
class ExperienceController extends Controller
{
    //

 public function ajouterExperience(Request $request)
 {
     // On la formation à l'utilisateur connecté
    Auth::user()->experiences()->create($request->all());
     $users = DB::collection('users_collection')->get();
  //  dd(Auth::user()->formations());

     echo "1";
 }

    public function listeExperiences(Request $request)
    {
        $experiences = Auth::user()->experiences()->orderBy("dateDebut","desc")->get();
        echo json_encode($experiences);
    }

    public function supprimerExperience(Request $request)
    {
        //  dd($request);
        // Formation::create($request->all());
        Auth::user()->experiences()->where('_id',$request->all()["experience_id"])->delete();

        echo "1";
    }
}
