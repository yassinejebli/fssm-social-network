<?php

namespace App\Http\Controllers;

use App\OffreEmploi;
use App\Publication;
use Faker\Provider\cs_CZ\DateTime;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class PublicationsController extends Controller
{

//Ajout de l'offre
    public function addOffre()
    {
        return view("nouvelleOffre");
    }

    public function saveOffre(Request $request)
    {
        $typeOffre = $request->input("typeOffre");
        $titre = $request->input("titre");
        $niveauEtude = $request->input("niveauEtude");
        $pays = $request->input("pays");
        $ville = $request->input("ville");
        $adresse = $request->input("adresse");
        $description = $request->input("description");
        $urlSource = $request->input("urlSource");
        $image = Input::file("image");
        $fileName = null;
        if ($typeOffre == "0")//stage
        {

            if ($image) {
                $fileName = time() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->resize(500, 200)->save(public_path('uploads/offres/stage' . $fileName));
            }
            $nomEntrepriseStage = $request->input("nomEntrepriseStage");
            $posteDesireStage = $request->input("posteDesireStage");
            $debut_Fin = explode("-", $request->input("dateDebutFinStage"));
            Auth::user()->publications()->create(["titre" => $titre,
                "niveauEtude" => $niveauEtude,
                "pays" => $pays,
                "ville" => $ville,
                "adresse" => $adresse,
                "description" => $description,
                "image" => $fileName,
                "urlSource" => $urlSource,
                "nomEntreprise" => $nomEntrepriseStage,
                "posteDesire" => $posteDesireStage,
                "dateDebut" => $debut_Fin[0],
                "dateFin" => $debut_Fin[1],
                "typePublication" => "0"]);
            return redirect("/index");

        } else if ($typeOffre == "1")//emploi
        {

            if ($image) {
                $fileName = time() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->resize(500, 200)->save(public_path('uploads/offres/emploi' . $fileName));
            }
            $nomEntrepriseEmploi = $request->input("nomEntrepriseEmploi");
            $posteDesireEmploi = $request->input("posteDesireEmploi");
            $typeContrat = $request->input("typeContrat");
            $delais = $request->input("delais");
            Auth::user()->publications()->create(["titre" => $titre,
                    "niveauEtude" => $niveauEtude,
                    "pays" => $pays,
                    "ville" => $ville,
                    "adresse" => $adresse,
                    "description" => $description,
                    "image" => $fileName,
                    "urlSource" => $urlSource,
                    "nomEntreprise" => $nomEntrepriseEmploi,
                    "posteDesire" => $posteDesireEmploi,
                    "typeContrat" => $typeContrat,
                    "typePublication" => "1",
                    "delais" => $delais
                ]
            );

            return redirect("/index");

        } else//formation
        {
            if ($image) {
                $fileName = time() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->resize(500, 200)->save(public_path('uploads/offres/formation' . $fileName));
            }
            $domaine = $request->input("domaine");
            $typeFormation = $request->input("typeFormation");
            $rythmeFormation = $request->input("rythmeFormation");
            $nomEntreprise = $request->input("nomEntrepriseFormation");
            $debut_FinFormation = explode("-", $request->input("dateDebutFinFormation"));

            Auth::user()->publications()->create(["titre" => $titre,
                "niveauEtude" => $niveauEtude,
                "pays" => $pays, "ville" => $ville,
                "adresse" => $adresse,
                "description" => $description,
                "image" => $fileName,
                "urlSource" => $urlSource,
                "domaine" => $domaine,
                "typeFormation" => $typeFormation,
                "rythmeFormation" => $rythmeFormation,
                "dateDebut" => $debut_FinFormation[0],
                "dateFin" => $debut_FinFormation[1],
                "typePublication" => "2",
                "nomEntreprise" => $nomEntreprise]);
            return redirect("/index");
        }

    }

//modification
    public function editOffre($id)
    {
        $offre = Publication::find($id);
        return view("modifierOffre", ["offre" => $offre]);
    }

    public function saveOModifications(Request $request)
    {
        $typeOffre = $request->input("typeOffre");

        $_id = $request->input("idOffre");
        $offre = Publication::find($_id);
        $offre->titre = $request->input("titre");
        $offre->niveauEtude = $request->input("niveauEtude");
        $offre->pays = $request->input("pays");
        $offre->ville = $request->input("ville");
        $offre->adresse = $request->input("adresse");
        $offre->description = $request->input("description");
        $offre->urlSource = $request->input("urlSource");
        $image = Input::file("image");
        $fileName = null;
        if ($typeOffre == "0")//stage
        {
            //suppression de l'image ancienne
            File::delete(public_path('uploads/offres/stage' . $offre['image']));
            //ajout de la nouvelle image
            if ($image) {
                $fileName = time() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->resize(500, 200)->save(public_path('uploads/offres/stage' . $fileName));
                $offre->image = $fileName;
            }
            $offre->nomEntreprise = $request->input("nomEntrepriseStage");
            $offre->posteDesire = $request->input("posteDesireStage");
            $debut_Fin = explode("-", $request->input("dateDebutFinStage"));
            $offre->dateDebut = $debut_Fin[0];
            $offre->dateFin = $debut_Fin[1];
            $offre->typePublication = '0';

            $offre->save();
            return redirect("/index");

        } else if ($typeOffre == "1")//emploi
        {

            //suppression de l'image ancienne
            File::delete(public_path('uploads/offres/stage' . $offre['image']));
            //ajout de la nouvelle image
            if ($image) {
                $fileName = time() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->resize(500, 200)->save(public_path('uploads/offres/emploi' . $fileName));
                $offre->image = $fileName;
            }
            $offre->nomEntreprise = $request->input("nomEntrepriseEmploi");
            $offre->posteDesire = $request->input("posteDesireEmploi");
            $offre->typeContrat = $request->input("typeContrat");
            $offre->delais = $request->input("delais");
            $offre->typePublication = '1';

            $offre->save();

            return redirect("/index");

        } else//formation
        {
            //suppression de l'image ancienne
            File::delete(public_path('uploads/offres/formation' . $offre['image']));
            //ajout de la nouvelle image
            if ($image) {
                $fileName = time() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->resize(500, 200)->save(public_path('uploads/offres/stage' . $fileName));
                $offre->image = $fileName;
            }
            $offre->domaine = $request->input("domaine");
            $offre->typeFormation = $request->input("typeFormation");
            $offre->rythmeFormation = $request->input("rythmeFormation");
            $offre->nomEntreprise = $request->input("nomEntrepriseFormation");
            $debut_FinFormation = explode("-", $request->input("dateDebutFinFormation"));
            $offre->dateDebut = $debut_FinFormation[0];
            $offre->dateFin = $debut_FinFormation[1];
            $offre->typePublication = '2';

            $offre->save();
            return redirect("/index");
        }

    }

    public function addEvenement()
    {
        return view("nouveauEvenement");
    }

    public function saveEvenement(Request $request)
    {
        return view("nouveauEvenement");
    }

    public function deletePublication(Request $request)
    {
        $_id = $request->input("_id");
        $offre = Publication::find($_id);
        if ($offre['typePublication'] == '0')
            File::delete(public_path('uploads/offres/stage' . $offre['image']));
        elseif ($offre['typePublication'] == '1')
            File::delete(public_path('uploads/offres/emploi' . $offre['image']));
        else if($offre['typePublication'] == '3')
            File::delete(public_path('uploads/avatars' . $offre['photo']));
        else
            File::delete(public_path('uploads/offres/formation' . $offre['image']));
        Publication::destroy($_id);
        return "true";

    }
    //la recherche
    public function chercherPublication(Request $request)
    {
        $publications = Publication::where('votes', '>', 100)->where('name', '=', 'John');

        return view("home", ["publications" => $publications]);

    }
}
