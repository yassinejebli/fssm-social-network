@extends('layouts.master')
@section('content')


    <!-- Page content -->


    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header">
            <div class="page-header-content">
                <div class="page-title">


                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">

            <!-- Detached content -->
            <div class="container-detached">
                <div class="content-detached">

                    <!-- Advanced legend -->
                    <form action="{{url("/publications/saveOModifications")}}" method="post"
                          enctype="multipart/form-data"
                          style="width:80%; margin: auto;" class="form-validate-jquery">
                        <input type="hidden" value="{{$offre["_id"]}}" name="idOffre">
                        {{csrf_field()}}
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h5 class="panel-title">Modification de l'offre {{$offre["titre"]}}</h5>
                            </div>

                            <div class="panel-body">
                                <fieldset>
                                    <legend class="text-semibold">
                                        <i class="icon-file-text2 position-left"></i>
                                        informations de l'offre
                                        <a class="control-arrow" data-toggle="collapse" data-target="#demo1">
                                            <i class="icon-circle-down2"></i>
                                        </a>
                                    </legend>

                                    <div class="collapse in" id="demo1">
                                        <div class="form-group">
                                            <label>Titre de l'offre </label>(<span class="text-danger">*</span>)
                                            <input type="text" class="form-control"
                                                   name="titre" placeholder="Titre de l'offre"
                                                   value="{{$offre['titre']}}">
                                        </div>


                                        <div class="form-group">
                                            <label>Niveau d'étude permis:(<span
                                                        class="text-danger">*</span>)</label>
                                            <select name="niveauEtude"
                                                    data-placeholder="Choisissez le niveau d'étude..."
                                                    class="select" name="niveauEtude">
                                                <option></option>
                                                <option value="Bac+2"
                                                        @if($offre['niveauEtude']=='Bac+2') selected @endif>Bac+2
                                                </option>
                                                <option value="Bac+3"
                                                        @if($offre['niveauEtude']=='Bac+3') selected @endif>Bac+3
                                                </option>
                                                <option value="Bac+4"
                                                        @if($offre['niveauEtude']=='Bac+4') selected @endif>Bac+4
                                                </option>
                                                <option value="Bac+5"
                                                        @if($offre['niveauEtude']=='Bac+5') selected @endif>Bac+5
                                                </option>
                                                <option value="Professeurs"
                                                        @if($offre['niveauEtude']=='Professeurs') selected @endif>
                                                    Professeurs
                                                </option>
                                                <option value="Tous les niveaux"
                                                        @if($offre['niveauEtude']=='Tous les niveaux') selected @endif>
                                                    Tous les niveaux
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Pays:</label>
                                            <select name="pays" class="select" data-placeholder="Choisissez le pays...">
                                                <option></option>
                                                <option value="Maroc" @if($offre['pays']=='Maroc') selected @endif>
                                                    Maroc
                                                </option>
                                                <option value="France" @if($offre['pays']=='France') selected @endif>
                                                    France
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Ville: </label>
                                            <select name="ville" class="select"
                                                    data-placeholder="Choisissez la ville...">
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Adresse(Lieu):(<span class="text-danger">*</span>)</label>
                                            <textarea name="adresse" rows="2" cols="5" class="form-control"
                                                      placeholder="Lieu..."
                                                      name="textarea">{{$offre['adresse']}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Description de l'offre:(<span
                                                        class="text-danger">*</span>)</label>
                                            <textarea name="description" rows="3" cols="5" class="form-control"
                                                      placeholder="Description de l'offre"
                                                      name="textarea2">{{$offre['description']}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class=" control-label text-semibold">Image:(<span
                                                        class="text-danger">*</span>)</label>

                                            <input type="file" name="image" class="file-input"
                                                   data-show-upload="false" data-show-caption="true"
                                                   data-show-preview="true" value="{{$offre['image']}}"
                                                   id="imageModificationOffre">

                                        </div>
                                        <div class="form-group">
                                            <label>URL vers l'origine de l'offre:(<span
                                                        class="text-danger">*</span>)</label>
                                            <input name="urlSource" type="text" class="form-control"
                                                   placeholder="http://" name="url" value="{{$offre['urlSource']}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Type de l'offre:</label>(<span class="text-danger">*</span>)
                                            <select name="typeOffre"
                                                    data-placeholder="Choisissez le type de l'offre..."
                                                    class="select" id="selectTypeOffre">
                                                <option></option>
                                                <option value="0" @if($offre['typePublication']=='0')selected @endif>
                                                    Stage
                                                </option>
                                                <option value="1" @if($offre['typePublication']=='1')selected @endif>
                                                    Emploi
                                                </option>
                                                <option value="2" @if($offre['typePublication']=='2')selected @endif>
                                                    Formation
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset id="typeOffre">
                                    <legend class="text-semibold">
                                        <i class="icon-file-text2 position-left"></i>
                                        informations spécifique au <span id="titreFieldSet"></span>
                                        <a class="control-arrow" data-toggle="collapse" data-target="#fStage">
                                            <i class="icon-circle-down2"></i>
                                        </a>
                                    </legend>
                                    @if($offre['typePublication']=='0')
                                        <div class="collapse in" id="dStage">
                                            <div class="form-group">
                                                <label>Nom de l'entreprise </label>(<span class="text-danger">*</span>)
                                                <input type="text" class="form-control"
                                                       placeholder="Nom de l'entreprise" name="nomEntrepriseStage" value="{{$offre['nomEntreprise']}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Poste désiré </label>(<span class="text-danger">*</span>)
                                                <input type="text" class="form-control"
                                                       placeholder="Poste désiré" name="posteDesireStage" value="{{$offre['posteDesire']}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Date de début/Date de fin </label>(<span
                                                        class="text-danger">*</span>)
                                                <div class="input-group">
                                                    <input type="text" class="form-control daterange-datemenu"
                                                           value="{{$offre['dateDebut']}}-{{$offre['dateFin']}}" id="datedf"
                                                           name="dateDebutFinStage">
                                                    <span class="input-group-addon"><i
                                                                class="icon-calendar22"></i></span>
                                                </div>
                                            </div>

                                        </div>
                                    @endif
                                    @if($offre['typePublication']=='1')
                                        <div class="collapse in" id="dEmploi">
                                            <div class="form-group">
                                                <label>Nom de l'entreprise </label>(<span class="text-danger">*</span>)
                                                <input type="text" class="form-control"
                                                       placeholder="Nom de l'entreprise" name="nomEntrepriseEmploi" value="{{$offre['nomEntreprise']}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Poste désiré </label>(<span class="text-danger">*</span>)
                                                <input type="text" class="form-control"
                                                       placeholder="Poste désiré" name="posteDesireEmploi" value="{{$offre['posteDesire']}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Type de contrat:(<span class="text-danger">*</span>)</label>
                                                <select name="typeContrat"
                                                        data-placeholder="Choisissez le type de contrat..."
                                                        class="select">
                                                    <option></option>
                                                    <option value="CDI" @if($offre['typeContrat']=='CDI') selected @endif>CDI</option>
                                                    <option value="CDD" @if($offre['typeContrat']=='CDD') selected @endif>CDD</option>
                                                    <option value="...">...</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Delais: </label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                                class="icon-calendar22"></i></span>
                                                    <input type="text" name="delais"
                                                           class="form-control daterange-single" value="{{$offre['delais']}}">
                                                </div>
                                            </div>

                                        </div>
                                    @endif
                                    @if($offre['typePublication']=='2')
                                        <div class="collapse in" id="dFormation">
                                            <div class="form-group">
                                                <label>Nom de l'entreprise </label>(<span class="text-danger">*</span>)
                                                <input type="text" class="form-control"
                                                       placeholder="Nom de l'entreprise" name="nomEntrepriseFormation" value="{{$offre['nomEntreprise']}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Le domain:(<span class="text-danger">*</span>)</label>
                                                <select name="domaine" data-placeholder="Choisissez le domaine..."
                                                        class="select">
                                                    <option></option>
                                                    <option value="Informatique" @if($offre['domaine']=='Informatique')selected @endif>Informatique</option>
                                                    <option value="Electronique" @if($offre['domaine']=='Electronique')selected @endif>Electronique</option>
                                                    <option value="...">...</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Le type de la formation:(<span
                                                            class="text-danger">*</span>)</label>
                                                <select name="typeFormation" data-placeholder="Choisissez un type..."
                                                        class="select">
                                                    <option></option>
                                                    <option value="Diplomante" @if($offre['typeFormation']=='Diplomante')selected @endif>Diplomante</option>
                                                    <option value="Qualifiante"
                                                            @if($offre['typeFormation']=='Qualifiante')selected @endif>Qualifiante</option>
                                                    <option value="...">...</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Le rythme de la formation:(<span
                                                            class="text-danger">*</span>)</label>
                                                <select name="rythmeFormation"
                                                        data-placeholder="Choisissez un rythme..."
                                                        class="select">
                                                    <option></option>
                                                    <option value="Continue" @if($offre['rythmeFormation']=='Continue')selected @endif>Continue</option>
                                                    <option value="Samedi soir" @if($offre['rythmeFormation']=='Samedi soir')selected @endif>Samedi soir</option>
                                                    <option value="...">...</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Date de début/Date de fin </label>(<span
                                                        class="text-danger">*</span>)
                                                <div class="input-group">
                                                    <input type="text" class="form-control daterange-datemenu"
                                                           name="dateDebutFinFormation" id="datedfF" value="{{$offre['dateDebut']}}-{{$offre['dateFin']}}"
                                                    >
                                                    <span class="input-group-addon"><i
                                                                class="icon-calendar22"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </fieldset>


                                <div class="text-right">
                                    <button type="reset" class="btn btn-default" id="reset">Effacer<i
                                                class=" icon-brush position-right"></i></button>
                                    <button type="submit" class="btn bg-orange-700">modifier l'offre<i
                                                class=" icon-checkmark4 position-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- /a legend -->
                </div>
            </div>
            <!-- /detached content -->


        </div>
        <!-- /content area -->

    </div>
    <!-- /main content -->


    <!-- /page content -->


    <!-- /page container -->

@endsection