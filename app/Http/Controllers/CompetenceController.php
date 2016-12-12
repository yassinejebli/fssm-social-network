<?php

namespace App\Http\Controllers;

use App\Exceptions\Handler;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Formation;
class FormationController extends Controller
{
    //

 public function ajouterFormation(Request $request)
 {
   //  dd($request);
    // Formation::create($request->all());
    Auth::user()->formations()->create($request->all());
     $users = DB::collection('users_collection')->get();
  //  dd(Auth::user()->formations());

     echo "1";
 }

    public function listeFormations(Request $request)
    {
        //  dd($request);
        // Formation::create($request->all());
        $formations = Auth::user()->formations()->orderBy("anneeDepart","desc")->get();
//dd($formations);
        echo json_encode($formations);
    }

    public function supprimerFormation(Request $request)
    {
        //  dd($request);
        // Formation::create($request->all());
        Auth::user()->formations()->where('_id',$request->all()["formation_id"])->delete();

        echo "1";
    }
}
