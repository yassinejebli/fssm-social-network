@extends('layouts.master')

@section('content')
<div class="col-md-12" ng-cloak>
    <div class="user-profile-tab">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs  nav-justified icon-tab">
            <li class="active"><a href="#about-me" class="user-google-location" data-toggle="tab"><i
                            class="fa fa-gears"></i> <span>Mon mur</span></a>
            </li>
            <li><a href="#friends" data-toggle="tab"><i class="fa fa-home"></i>
                    <span>Formation</span></a></li>
            <li><a href="#job-history" data-toggle="tab"><i class="fa fa-envelope-o"></i> <span>Experience</span></a>
            </li>
            <li><a href="#competences" data-toggle="tab"><i class="fa fa-envelope-o"></i> <span>Compétences</span></a>
            </li>
            <li><a href="#langues" data-toggle="tab"><i class="fa fa-envelope-o"></i> <span>Langues</span></a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content tab-border">
            <div class="tab-pane fade" id="friends">
                <div class="row pull-right">
                    <div class="col-md-12">
                        <button class="btn btn-default" data-toggle="modal" data-target="#ajouterFormationModel"><i
                                    class="fa fa-plus"></i> Ajouter
                        </button>
                    </div>
                </div>
                <div class="row" style="margin-top:45px;">

                    <div ng-repeat="f in formations">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title" ng-bind="f.ecole"></h3>
                                    <!--                                    <ul class="panel-note-control">-->
                                    <!--                                        <li><a class="minus" href="javascript:void(0)"><i class="fa fa-minus"></i></a>-->
                                    <!--                                        </li>-->
                                    <!--                                        <li><a class="close-panel" ng-click="supprimerFormation(f)"><i class="fa fa-times"></i></a></li>-->
                                    <!--                                    </ul>-->
                                    <div class="heading-elements">
                                        <ul class="icons-list">
                                            <li><a data-action="collapse"></a></li>
                                            <li><a data-action="reload"></a></li>
                                            <li><a data-action="close" ng-click="supprimerFormation(f)"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="myEditor">
                                        <div><h5><span ng-bind="f.diplome"></span>, <span ng-bind="f.discipline"></span>
                                            </h5></div>
                                        <div><span ng-bind="f.anneeDepart"></span> - <span ng-bind="f.anneeFin"></span>
                                        </div>
                                        {{--
                                        <div></div>
                                        --}}

                                        <div style="margin-top:20px"><a href="#" data-toggle="modal"
                                                                        data-target="#myModal">Ajouter description</a>
                                        </div>
                                        <div><a href="#">Ajouter des résultats</a></div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="tab-pane fade" id="langues">
                <div class="row pull-right">
                    <div class="col-md-12">
                        <button class="btn btn-default" data-toggle="modal" data-target="#ajouterLangueModel"><i
                                    class="fa fa-plus"></i> Ajouter
                        </button>
                    </div>
                </div>
                <div class="row" style="margin-top:45px;">

                    <div ng-repeat="l in langues">
                        <div class="col-md-12">
                            <div clas="panel panel-flat panel-collapsed">
                                <div class="panel panel-white">
                                    <div class="panel-heading">
                                        <h6 class="panel-title">
                                            <a data-toggle="collapse" href="#@{{l._id}}" aria-expanded="false"
                                               class="collapsed" ng-bind="l.intitule"></a>
                                        </h6>
                                    </div>
                                    <div id="@{{l._id}}" class="panel-collapse collapse" aria-expanded="false"
                                         style="height: 0px;">
                                        <div class="panel-body" ng-bind="l.description">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
            <div class="tab-pane fade" id="job-history">
                <div class="row pull-right">
                    <div class="col-md-12">
                        <button class="btn btn-default" data-toggle="modal" data-target="#ajouterExperienceModel"><i
                                    class="fa fa-plus"></i> Ajouter
                        </button>
                    </div>
                </div>

                <div class="row" style="margin-top:45px;">

                    <div ng-repeat="e in experiences">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title" ng-bind="e.poste"></h3>
                                    <!--                                    <ul class="panel-note-control">-->
                                    <!--                                        <li><a class="minus" href="javascript:void(0)"><i class="fa fa-minus"></i></a>-->
                                    <!--                                        </li>-->
                                    <!--                                        <li><a class="close-panel" href="javascript:void(0)"-->
                                    <!--                                               ng-click="supprimerExperience(e)"><i class="fa fa-times"></i></a></li>-->
                                    <!--                                    </ul>-->
                                    <div class="heading-elements">
                                        <ul class="icons-list">
                                            <li><a data-action="collapse"></a></li>
                                            <li><a data-action="reload"></a></li>
                                            <li><a data-action="close" ng-click="supprimerExperience(e)"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="myEditor">
                                        <div><h5><span ng-bind="e.entreprise"></span></h5></div>
                                        <div><span ng-bind="e.dateDebut | date"></span> - <span
                                                    ng-bind="e.dateFin | date"></span></div>
                                        {{--
                                        <div></div>
                                        --}}


                                        <div style="margin-top:20px"><a href="#" data-toggle="modal"
                                                                        data-target="#myModal">Ajouter description</a>
                                        </div>
                                        <div><a href="#">Ajouter des résultats</a></div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="tab-pane fade  in active" id="about-me">

                <div class="timeline-row">

                    <div class="row">


                        <div class="col-lg-12">
                            <div class="panel panel-flat timeline-content">
                                <div class="panel-heading">
                                    <h6 class="panel-title">Nouvelle publication</h6>


                                        <div class="pull-right" ng-file-drop ng-file-select ng-model="photo" class="drop-box"
                                             drag-over-class="dragover" ng-multiple="false" allow-dir="false"
                                             accept="image/*,application/pdf" ><img src="/uploads/upload.png" /></div>
                                        <div ng-no-file-drop>File Drag/Drop is not supported for this browser</div>
                                        <div class="input-group">
<!--                                            <input type="text" disabled class="form-control" ng-model="publication.photo" placeholder="Téléchargez l'image dans le contrôle suivant" />-->
                                            <button class="input-group-addon btn btn-danger" ng-click="clearLogo();"><i class="mdi-action-highlight-remove"></i></button>
                                        </div>




<!--                                    <ul class="nav nav-tabs  nav-justified icon-tab">-->
<!--                                        <li class="active"><input type="file" class="file-styled-primary" ng-model="photo" name="photo" id="photo">-->
<!--                                        </li>-->
<!--                                    </ul>-->
                                    <div class="form-group">
                                        <img src="/uploads/avatars{{ Auth::user()->photo }}" class=" img-responsive"
                                             alt="" width="40" height="40"/>
                                        <textarea class="form-control" name="body" id="new-post"
                                                  placeholder="Exprimez vous"
                                                  rows="5" ng-model="publication.contenu"></textarea>
<!--                                        <div ng-bind-html="publication.contenu | emoji"></div>-->
                                        <div class="row">
                                            <button type="submit" class="btn btn-primary pull-right"
                                                    ng-click="ajouterPublication()" style="margin-top: 10px">Publier
                                            </button>
                                        </div>
                                        <img class="img-responsive img-thumbnail" src="/uploads/avatars@{{publication.photo}}" alt="" ng-show="publication.photo!=null" style="width: 100px ; height: 100px ">

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-6" ng-repeat="p in publications">
                            <div class="panel panel-flat timeline-content">
                                <div class="panel-heading">
                                    <div class="heading-elements">
                                        <span class="heading-text"><i
                                                    class="position-left text-success" >@{{ p.created_at | date }}</i></span>

                                    </div>
                                    <a class="heading-elements-toggle"><i class="icon-more"></i></a></div>

                                <div class="panel-body">
<!--                                    <a href="#" class="display-block content-group">-->
<!--                                        <img src="/uploads/avatars@{{ p.photo }}" class="img-responsive content-group" alt="" style="width: 100%; height:100%">-->
<!--                                    </a>-->
                                    <div class="display-block content-group" ng-show="p.photo.indexOf('pdf') != -1">
                                        <iframe ng-src="@{{p.photo}}" style="width: 100%; height:300px"></iframe>
                                    </div>

                                    <div class="display-block content-group" ng-show="p.photo.indexOf('.png') != -1 || p.photo.indexOf('.PNG') != -1 || p.photo.indexOf('.jpg') != -1 || p.photo.indexOf('.JPG') != -1">
                                        <img src="@{{p.photo}}" class="img-responsive content-group" alt="" style="width: 100%; height:300px">
                                    </div>

<!--                                    <h6 class="content-group">-->
<!--                                        <i class="icon-comment-discussion position-left"></i>-->
<!--                                        <a href="#">Jason Ansley</a> commented:-->
<!--                                    </h6>-->

                                    <blockquote>
                                        <p  ng-bind-html="p.contenu | emoji"></p>
                                        <footer>{{Auth::user()->fullName}} <cite title="Source Title">@{{ p.created_at | date : 'HH:mm'}}</cite></footer>
                                    </blockquote>
                                </div>

                                <div class="panel-footer panel-footer-transparent">
                                    <div class="heading-elements">
                                                   <span class="heading-btn pull-left">
                                                        <span class="text-default commentIndicator"
                                                              id="@{{p._id}}"><i
                                                               class="icon-comment-discussion position-left"></i>@{{p.commentaires.length}} </span>
                                        </span>

                                    </div>

                                    <div id="comment@{{p._id}}" class="comment">
                                    <div class="panel-heading">
                                        <h6 class="panel-title">Commentaires</h6>
                                    </div>

                                    <div class="panel-body">
                                        <ul class="media-list chat-list content-group" style="max-height:200px;">

                                            <li class="media" ng-repeat="c in p.commentaires">
                                                <div class="media-left">
                                                        <a href="/profileUser/@{{c.user._id}}">
                                                        <img src="/uploads/avatars@{{c.user.photo}}"
                                                             class="img-circle" alt="">
                                                    </a>
                                                </div>

                                                <div class="media-body">

                                                    <div class="media-content"><a class="media-link" href="#">@{{c.user.fullName}} </a> <span ng-bind-html="c.contenu | emoji"></span>
                                                    </div>
                                                    <span class="media-annotation display-block mt-10">@{{c.created_at | date:'EEEE, MMMM d, y  HH:mm'}} <a
                                                                href="#"><i
                                                                    class="icon-pin-alt position-right text-muted"></i></a></span>
                                                </div>
                                            </li>

                                        </ul>


                                        <div class="row">

                                                    <textarea name="enter-message" class="form-control content-group"
                                                              rows="2" cols="1" placeholder="Saisir votre commentaire" ng-model="p.commentaire.contenu"></textarea>

                                            <button type="submit" class="btn btn-primary pull-right"
                                                    ng-click="ajouterCommentaire(p)" style="margin-top: 10px">Commenter
                                            </button>


                                        </div>
                                    </div>
                                </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="tab-pane fade" id="competences">
                <div class="row pull-right">
                    <div class="col-md-12">
                        <button class="btn btn-default" data-toggle="modal" data-target="#ajouterCompetenceModel"><i
                                    class="fa fa-plus"></i> Ajouter
                        </button>
                    </div>
                </div>

                <div class="content-group">
                    <div class="bootstrap-tagsinput">
                        <div ng-repeat="c in competences">
                            <span class="tag label label-info"><span ng-bind="c.intitule"></span><span
                                        data-role="remove" ng-click="supprimerCompetence(c)"></span></span>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    @endsection

    <!--Models-->
    <div class="modal fade" id="ajouterExperienceModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Nouvelle Experience</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nom de l'entreprise (*)</label>
                                <input placeholder="Ex : Managem" ng-model="experience.entreprise" class="form-control"
                                       type="text"/>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Titre (*)</label>
                                <input placeholder="Ex : Chef de département" ng-model="experience.poste"
                                       class="form-control" type="text"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Lieu</label>
                                <input placeholder="Marrakech" ng-model="experience.lieu" class="form-control"
                                       type="text"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Période (*)</label><br/>
                                <input type="date" ng-model="experience.dateDebut" id="dateDebut"> -
                                <input type="date" ng-model="experience.dateFin" id="dateFin">
                                <!--                            <select ng-model="formation.anneeDepart" name="anneeDepart" id="anneeDepart">-->

                                <!--                            </select> --->
                                <!--                            <select name="anneeFin" ng-model="formation.anneeFin" id="anneeFin">-->
                                <!---->
                                <!--                            </select>-->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea ng-model="experience.description" style="min-width: 100%"></textarea>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                    <button type="button" id="ajouterExperienceBtn" ng-click="ajouterExperience()"
                            class="btn btn-primary">Enregistrer
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ajouterFormationModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Nouvelle Formation</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Ecole</label>
                                <input placeholder="Ex : Faculté des sciences Semlalia" ng-model="formation.ecole"
                                       class="form-control" type="text"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Années</label><br/>
                                <select ng-model="formation.anneeDepart" name="anneeDepart" id="anneeDepart">

                                </select> -
                                <select name="anneeFin" ng-model="formation.anneeFin" id="anneeFin">

                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Diplome</label>
                                <input placeholder="Ex : Master en ingénierie des systèmes d'information"
                                       ng-model="formation.diplome" class="form-control" type="text"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Discipline</label>
                                <input placeholder="" ng-model="formation.discipline" class="form-control" type="text"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea ng-model="formation.description" style="min-width: 100%"></textarea>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                    <button type="button" id="ajouterFormationBtn" ng-click="ajouterFormation()"
                            class="btn btn-primary">Enregistrer
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="ajouterPublicationModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Nouvelle Publication</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Photo</label>
                                <input placeholder="Ex : Faculté des sciences Semlalia" ng-model="formation.ecole"
                                       class="form-control" type="text"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Années</label><br/>
                                <select ng-model="formation.anneeDepart" name="anneeDepart" id="anneeDepart">

                                </select> -
                                <select name="anneeFin" ng-model="formation.anneeFin" id="anneeFin">

                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Diplome</label>
                                <input placeholder="Ex : Master en ingénierie des systèmes d'information"
                                       ng-model="formation.diplome" class="form-control" type="text"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Discipline</label>
                                <input placeholder="" ng-model="formation.discipline" class="form-control" type="text"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea ng-model="formation.description" style="min-width: 100%"></textarea>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                    <button type="button" id="ajouterFormationBtn" ng-click="ajouterFormation()"
                            class="btn btn-primary">Enregistrer
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ajouterCompetenceModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Nouvelle Compétence</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Intitulé du compétence</label>
                                <input placeholder="Ex : Développement mobile" ng-model="competence.intitule"
                                       class="form-control" type="text"/>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                        <button type="button" id="ajouterCompetenceBtn" ng-click="ajouterCompetence()"
                                class="btn btn-primary">Enregistrer
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ajouterLangueModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Nouvelle Langue</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Intitulé du Langue</label>
                                <input placeholder="Francais" ng-model="langue.intitule" class="form-control"
                                       type="text"/>

                                <label>Niveau</label>
                                <select class="form-control" id="anim" ng-model="langue.description">
                                    <option value="">--</option>
                                    <option value="Notions">Notions</option>
                                    <option value="Compétence professionnelle limitée">Compétence professionnelle
                                        limitée
                                    </option>
                                    <option value="Capacité professionnelle complète">Capacité professionnelle
                                        complète
                                    </option>
                                    <option value="Bilingue ou langue natale">Bilingue ou langue natale</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                        <button type="button" id="ajouterLangueeBtn" ng-click="ajouterLangue()"
                                class="btn btn-primary">Enregistrer
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @section('script')

    <script type="text/javascript">
        $(function () {
            app.controller("ctrl", ['$scope', 'notificationFactory', '$http', '$upload', function ($scope, notificationFactory, $http, $upload) {
                $scope.formation = new Object({"_token": "{{ csrf_token() }}"});
                $scope.experience = new Object({"_token": "{{ csrf_token() }}"});
                $scope.competence = new Object({"_token": "{{ csrf_token() }}"});
                $scope.langue = new Object({"_token": "{{ csrf_token() }}"});
                $scope.publication = new Object({"_token": "{{ csrf_token() }}"});
                $scope.commentaire = new Object({"_token": "{{ csrf_token() }}"});
                $scope.formations = [];
                $scope.experiences = [];
                $scope.competences = [];
                $scope.langues = [];
                $scope.publications = [];
                $scope.getSrc = function (src) {
                    return "/uploads/avatars"+src;
                }
                //$scope.commentaires = [];
                $scope.ajouterPublication = function () {
                    //console.log($scope.formation);
                    $scope.publication.typePublication = "3";
                    $.ajax({
                        url: "{{route('ajouterPublication')}}",
                        data: $scope.publication,
                        type: "post",
                        dataType: 'json',
                        cache: false,
                        async: false,
                        success: function (result) {
                            console.log($scope.publication);

                            notificationFactory.success();
                            result.created_at = new Date(result.created_at);
                            result.photo = "uploads/avatars"+result.photo;
                            $scope.publications.unshift(result);
                        },
                        error: function (error) {
                            notificationFactory.error("Erreur lors de l'ajout de publication !", "Erreur");
                        }
                    });


                    $scope.publication = new Object({"_token": "{{ csrf_token() }}"});

                }

                $scope.ajouterCommentaire = function (p) {
                    p.commentaire._token='{{ csrf_token()}}';
                    p.commentaire.user_id="{{Auth::user()->id}}";
                    p.commentaire.publication_id=p._id;
                    $.ajax({
                        url: "{{route('ajouterCommentaire')}}",
                        data: p.commentaire,
                        type: "post",
                        dataType: 'json',
                        cache: false,
                        async: false,
                        success: function (result) {
                            console.log(p.commentaire);

                            notificationFactory.success();
                            result.created_at = new Date(result.created_at);
                            p.commentaires.push(result);
                        },
                        error: function (error) {
                            notificationFactory.error("Erreur lors de l'ajout de commentaire !", "Erreur");
                        }
                    });


                    p.commentaire = new Object();

                }
                $scope.ajouterFormation = function () {
                    //console.log($scope.formation);
                    $.ajax({
                        url: "{{route('ajouterFormation')}}",
                        data: $scope.formation,
                        type: "post",
                        dataType: 'json',
                        cache: false,
                        async: false,
                        success: function (result) {
                            notificationFactory.success();
                            $scope.formations.unshift($scope.formation);
                            $("#ajouterFormationModel").modal('hide');

                        },
                        error: function (error) {
                            notificationFactory.error("Erreur lors de l'ajout de formation !", "Erreur");
                        }
                    });


                    $scope.formation = new Object({"_token": "{{ csrf_token() }}"});


                }

                $scope.ajouterLangue = function () {
                    console.log($scope.langue);
                    $.ajax({
                        url: "{{route('ajouterLangue')}}",
                        data: $scope.langue,
                        type: "post",
                        dataType: 'json',
                        cache: false,
                        async: false,
                        success: function (result) {
                            notificationFactory.success();
                            $scope.langues.unshift($scope.langue);
                            $("#ajouterLangueModel").modal('hide');

                        },
                        error: function (error) {
                            notificationFactory.error("Erreur lors de l'ajout de langue !", "Erreur");
                        }
                    });


                    $scope.langue = new Object({"_token": "{{ csrf_token() }}"});


                }

                $scope.ajouterExperience = function () {
                    //console.log($scope.formation);
                    $.ajax({
                        url: "{{route('ajouterExperience')}}",
                        data: $scope.experience,
                        type: "post",
                        dataType: 'json',
                        cache: false,
                        async: false,
                        success: function (result) {
                            notificationFactory.success();
                            $scope.experiences.unshift($scope.experience);
                            $("#ajouterExperienceModel").modal('hide');
                        },
                        error: function (error) {
                            notificationFactory.error("Erreur lors de l'ajout d experience !", "Erreur");
                        }
                    });


                    $scope.experience = new Object({"_token": "{{ csrf_token() }}"});

                }

                $scope.ajouterCompetence = function () {
                    //console.log($scope.formation);
                    $.ajax({
                        url: "{{route('ajouterCompetence')}}",
                        data: $scope.competence,
                        type: "post",
                        dataType: 'json',
                        cache: false,
                        async: false,
                        success: function (result) {
//                            $scope.competence._id = result;
                            notificationFactory.success();
                            $scope.competences.unshift($scope.competence);
                            $("#ajouterCompetenceModel").modal('hide');
                        },
                        error: function (error) {
                            notificationFactory.error("Erreur lors de l'ajout de compétence !", "Erreur");
                        }
                    });


                    $scope.competence = new Object({"_token": "{{ csrf_token() }}"});

                }

                $scope.getFormations = function () {
                    $.ajax({
                        url: "{{route('listeFormations')}}", type: "get", dataType: 'json', cache: false, async: false,
                        success: function (result) {
                            $scope.formations = result;
                        }, error: function (error) {
                            notificationFactory.error("Erreur lors du chargement des formations !", "Erreur");
                        }
                    });


                }

                $scope.getExperiences = function () {
                    $.ajax({
                        url: "{{route('listeExperiences')}}", type: "get", dataType: 'json', cache: false, async: false,
                        success: function (result) {
                            console.log(result)
                            for (i = 0; i < result.length; i++) {
                                result[i].dateDebut = new Date(result[i].dateDebut);
                                result[i].dateFin = new Date(result[i].dateFin);
                            }
                            $scope.experiences = result;
                        }, error: function (error) {
                            notificationFactory.error("Erreur lors du chargement des experiences !", "Erreur");
                        }
                    });
                }
                $scope.getCompetences = function () {
                    $.ajax({
                        url: "{{route('listeCompetences')}}", type: "get", dataType: 'json', cache: false, async: false,
                        success: function (result) {
                            console.log(result)
                            $scope.competences = result;
                        }, error: function (error) {
                            notificationFactory.error("Erreur lors du chargement des experiences !", "Erreur");
                        }
                    });
                }

                $scope.getPublications = function () {
                    $.ajax({
                        url: "{{route('listePublications')}}",
                        type: "get",
                        dataType: 'json',
                        cache: false,
                        async: false,
                        success: function (result) {
                            console.log(result)
                            for (i = 0; i < result.length; i++) {
                                result[i].photo = "/uploads/avatars"+result[i].photo;
                                result[i].created_at = new Date(result[i].created_at);
                                for(k = 0; k < result[i].commentaires.length; k++){
                                    result[i].commentaires[k].created_at = new Date(result[i].commentaires[k].created_at);

                                }
                            }
                            $scope.publications = result;
                        },
                        error: function (error) {
                            notificationFactory.error("Erreur lors du chargement des experiences !", "Erreur");
                        }
                    });
                }

//                $scope.getCommentairess = function () {
//                    $.ajax({
//                        url: "{{route('listePublications')}}",
//                        type: "get",
//                        dataType: 'json',
//                        cache: false,
//                        async: false,
//                        success: function (result) {
//                            console.log(result)
//                            for (i = 0; i < result.length; i++) {
//                                result[i].created_at = new Date(result[i].created_at);
//                            }
//                            $scope.publications = result;
//                        },
//                        error: function (error) {
//                            notificationFactory.error("Erreur lors du chargement des experiences !", "Erreur");
//                        }
//                    });
//                }

                $scope.getLangues = function () {
                    $.ajax({
                        url: "{{route('listeLangues')}}", type: "get", dataType: 'json', cache: false, async: false,
                        success: function (result) {
                            console.log(result)
                            $scope.langues = result;
                        }, error: function (error) {
                            notificationFactory.error("Erreur lors du chargement des experiences !", "Erreur");
                        }
                    });
                }

                $scope.supprimerFormation = function (item) {
                    $.ajax({
                        url: "{{route('supprimerFormation')}}",
                        type: "delete",
                        dataType: 'json',
                        cache: false,
                        async: false,
                        data: {formation_id: item._id, _token: '{{ csrf_token() }}'},
                        success: function (result) {
                            notificationFactory.success();
                            $scope.formations.splice($scope.formations.indexOf(item), 1)

                        },
                        error: function (error) {
                            notificationFactory.error("Erreur lors de la suppression des formations !", "Erreur");
                        }
                    });
                }
                var csrf_token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                console.log("tokeeen : "+csrf_token)
                $scope.upload = function (files) {
                    if (files && files.length) {
                        for (var i = 0; i < files.length; i++) {
                            var file = files[i];
                            $upload.upload({
                                url: "{{ route('chargerImage') }}",
                                //fields: { _token : '{{ csrf_token() }}' },
                                file: file
                            }).progress(function (evt) {
                                console.log('progress : '+'{{ csrf_token() }}');
                                var progressPercentage = parseInt(100.0 * evt.loaded / evt.total);
                                file.progressPercentage = progressPercentage;
                                console.log('progress: ' + progressPercentage + '% ' + evt.config.file.name);
                            }).success(function (data, status, headers, config) {
                                //file.url = data;
                                console.log('success : '+'{{ csrf_token() }}');
                                $scope.publication.photo = data;
                                //console.log('file ' + config.file.name + 'uploaded. Response: ' + data);
                            });
                        }
                    }
                };
            console.log('{{ csrf_token() }}');
                $scope.$watch('photo', function () {
                    $scope.upload($scope.photo);
                });
                $scope.supprimerExperience = function (item) {
                    $.ajax({
                        url: "{{route('supprimerExperience')}}",
                        type: "delete",
                        dataType: 'json',
                        cache: false,
                        async: false,
                        data: {experience_id: item._id, _token: '{{ csrf_token() }}'},
                        success: function (result) {
                            notificationFactory.success();
                            $scope.experiences.splice($scope.experiences.indexOf(item), 1)

                        },
                        error: function (error) {
                            notificationFactory.error("Erreur lors de la suppression des experiences !", "Erreur");
                        }
                    });
                }

                $scope.supprimerCompetence = function (item) {
                    $.ajax({
                        url: "{{route('supprimerCompetence')}}",
                        type: "delete",
                        dataType: 'json',
                        cache: false,
                        async: false,
                        data: {competence_id: item._id, _token: '{{ csrf_token() }}'},
                        success: function (result) {
                            notificationFactory.success();
                            $scope.competences.splice($scope.competences.indexOf(item), 1)

                        },
                        error: function (error) {
                            notificationFactory.error("Erreur lors de la suppression des compétences !", "Erreur");
                        }
                    });
                }

                $scope.getPublications();
                $scope.getFormations();
                $scope.getExperiences();
                $scope.getCompetences();
                $scope.getLangues();
            }]);
            angular.bootstrap(document, ['AdminModule']);
        });

        var currentYear = new Date().getFullYear();

        var anneeDepart = document.getElementById("anneeDepart");
        var anneeFin = document.getElementById("anneeFin");

        var option = document.createElement('option'),
            yearText = document.createTextNode("-");

        option.appendChild(yearText);
        anneeDepart.appendChild(option);

        var option = document.createElement('option'),
            yearText = document.createTextNode("-");

        option.appendChild(yearText);
        anneeFin.appendChild(option);

        for (i = currentYear; i >= 1900; i--) {
            var option = document.createElement('option'),
                yearText = document.createTextNode(i);

            option.appendChild(yearText);
            anneeDepart.appendChild(option);
        }

        for (i = currentYear + 10; i >= 1900; i--) {
            var option = document.createElement('option'),
                yearText = document.createTextNode(i);

            option.appendChild(yearText);
            anneeFin.appendChild(option);
        }
    </script>

    @endsection