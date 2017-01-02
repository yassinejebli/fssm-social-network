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
                    <form action="{{url("/publications/saveOffre")}}" method="post" enctype="multipart/form-data"
                          style="width:80%; margin: auto;" class="form-validate-jquery">
                        {{csrf_field()}}
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h5 class="panel-title">Nouvelle offre</h5>
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
                                                   name="titre" placeholder="Titre de l'offre">
                                        </div>


                                        <div class="form-group">
                                            <label>Niveau d'étude permis:(<span
                                                        class="text-danger">*</span>)</label>
                                            <select name="niveauEtude"
                                                    data-placeholder="Choisissez le niveau d'étude..."
                                                    class="select" name="niveauEtude">
                                                <option></option>
                                                <option value="Bac+2">Bac+2</option>
                                                <option value="Bac+3">Bac+3</option>
                                                <option value="Bac+4">Bac+4</option>
                                                <option value="Bac+5">Bac+5</option>
                                                <option value="Professeurs">Professeurs</option>
                                                <option value="Tous les niveaux">Tous les niveaux</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Pays:</label>
                                            <select name="pays" class="select" data-placeholder="Choisissez le pays...">
                                                <option></option>
                                                <option value="Maroc">Maroc</option>
                                                <option value="France">France</option>
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
                                                      name="textarea"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Description de l'offre:(<span
                                                        class="text-danger">*</span>)</label>
                                            <textarea name="description" rows="3" cols="5" class="form-control"
                                                      placeholder="Description de l'offre"
                                                      name="textarea2"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class=" control-label text-semibold">Image:(<span
                                                        class="text-danger">*</span>)</label>

                                            <input type="file" name="image" class="file-input" multiple="multiple"
                                                   data-show-upload="false" data-show-caption="true"
                                                   data-show-preview="true" id="imageAjoutOffre">

                                        </div>
                                        <div class="form-group">
                                            <label>URL vers l'origine de l'offre:(<span
                                                        class="text-danger">*</span>)</label>
                                            <input name="urlSource" type="text" class="form-control"
                                                   placeholder="http://" name="url">
                                        </div>
                                        <div class="form-group">
                                            <label>Type de l'offre:</label>(<span class="text-danger">*</span>)
                                            <select name="typeOffre"
                                                    data-placeholder="Choisissez le type de l'offre..."
                                                    class="select" id="selectTypeOffre">
                                                <option></option>
                                                <option value="0">Stage</option>
                                                <option value="1">Emploi</option>
                                                <option value="2">Formation</option>
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

                                    <div class="collapse in" id="dStage">
                                        <div class="form-group">
                                            <label>Nom de l'entreprise </label>(<span class="text-danger">*</span>)
                                            <input type="text" class="form-control"
                                                   placeholder="Nom de l'entreprise" name="nomEntrepriseStage">
                                        </div>
                                        <div class="form-group">
                                            <label>Poste désiré </label>(<span class="text-danger">*</span>)
                                            <input type="text" class="form-control"
                                                   placeholder="Poste désiré" name="posteDesireStage">
                                        </div>
                                        <div class="form-group">
                                            <label>Date de début/Date de fin </label>(<span
                                                    class="text-danger">*</span>)
                                            <div class="input-group">
                                                <input type="text" class="form-control daterange-datemenu"
                                                       value="18/02/2013 - 23/02/2013" id="datedf"
                                                name="dateDebutFinStage">
                                                <span class="input-group-addon"><i
                                                            class="icon-calendar22"></i></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="collapse in" id="dEmploi">
                                        <div class="form-group">
                                            <label>Nom de l'entreprise </label>(<span class="text-danger">*</span>)
                                            <input type="text" class="form-control"
                                                   placeholder="Nom de l'entreprise" name="nomEntrepriseEmploi">
                                        </div>
                                        <div class="form-group">
                                            <label>Poste désiré </label>(<span class="text-danger">*</span>)
                                            <input type="text" class="form-control"
                                                   placeholder="Poste désiré" name="posteDesireEmploi">
                                        </div>
                                        <div class="form-group">
                                            <label>Type de contrat:(<span class="text-danger">*</span>)</label>
                                            <select name="typeContrat"
                                                    data-placeholder="Choisissez le type de contrat..."
                                                    class="select">
                                                <option></option>
                                                <option value="CDI">CDI</option>
                                                <option value="CDD">CDD</option>
                                                <option value="...">...</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Delais: </label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="icon-calendar22"></i></span>
                                                <input type="text" name="delais" class="form-control daterange-single" value="18/10/2013">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="collapse in" id="dFormation">
                                        <div class="form-group">
                                            <label>Nom de l'entreprise </label>(<span class="text-danger">*</span>)
                                            <input type="text" class="form-control"
                                                   placeholder="Nom de l'entreprise" name="nomEntrepriseFormation">
                                        </div>
                                        <div class="form-group">
                                            <label>Le domain:(<span class="text-danger">*</span>)</label>
                                            <select name="domaine" data-placeholder="Choisissez le domaine..."
                                                    class="select">
                                                <option></option>
                                                <option value="Informatique">Informatique</option>
                                                <option value="Electronique">Electronique</option>
                                                <option value="...">...</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Le type de la formation:(<span
                                                        class="text-danger">*</span>)</label>
                                            <select name="typeFormation" data-placeholder="Choisissez un type..."
                                                    class="select">
                                                <option></option>
                                                <option value="Diplomante">Diplomante</option>
                                                <option value="Qualifiante">Qualifiante</option>
                                                <option value="...">...</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Le rythme de la formation:(<span
                                                        class="text-danger">*</span>)</label>
                                            <select name="rythmeFormation" data-placeholder="Choisissez un rythme..."
                                                    class="select">
                                                <option></option>
                                                <option value="Continue">Continue</option>
                                                <option value="Samedi soir">Samedi soir</option>
                                                <option value="...">...</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Date de début/Date de fin </label>(<span
                                                    class="text-danger">*</span>)
                                            <div class="input-group">
                                                <input type="text" class="form-control daterange-datemenu"
                                                       name="dateDebutFinFormation" id="datedfF"
                                                >
                                                <span class="input-group-addon"><i
                                                            class="icon-calendar22"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>


                                <div class="text-right">
                                    <button type="reset" class="btn btn-default" id="reset">Effacer<i
                                                class=" icon-brush position-right"></i></button>
                                    <button type="submit" class="btn bg-danger-700">Publier l'offre<i
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