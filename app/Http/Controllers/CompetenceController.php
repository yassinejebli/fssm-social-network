<?php

namespace App\Http\Controllers;

use App\Exceptions\Handler;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Formation;
class CompetenceController extends Controller
{
    //

 public function ajouterCompetence(Request $request)
 {
   //  dd($request);
    // Formation::create($request->all());
    Auth::user()->competences()->create($request->all());

     echo "1";
 }

    public function listeCompetences(Request $request)
    {
        //  dd($request);
        // Formation::create($request->all());
        $competences = Auth::user()->competences()->get();
//dd($formations);
        echo json_encode($competences);
    }

    public function supprimerCompetence(Request $request)
    {
        //  dd($request);
        // Formation::create($request->all());
        Auth::user()->competences()->where('_id',$request->all()["competence_id"])->delete();

        echo "1";
    }
}
