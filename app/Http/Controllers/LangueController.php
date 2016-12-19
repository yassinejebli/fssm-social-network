<?php

namespace App\Http\Controllers;

use App\Exceptions\Handler;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Formation;
class LangueController extends Controller
{
    //

 public function ajouterLangue(Request $request)
 {
   //  dd($request);
    // Formation::create($request->all());
    Auth::user()->langues()->create($request->all());

     echo "1";
 }

    public function listeLangues(Request $request)
    {
        //  dd($request);
        // Formation::create($request->all());
        $langues = Auth::user()->langues()->get();
//dd($formations);
        echo json_encode($langues);
    }

    public function supprimerLangue(Request $request)
    {
        //  dd($request);
        // Formation::create($request->all());
        Auth::user()->competences()->where('_id',$request->all()["competence_id"])->delete();

        echo "1";
    }
}
