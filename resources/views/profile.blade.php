@extends('layouts.master')

@section('content')
<div class="col-md-12">
    <div class="user-profile-tab">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs  nav-justified icon-tab">
            <li><a href="#about-me" class="user-google-location" data-toggle="tab"><i class="fa fa-gears"></i> <span>Mon mur</span></a>
            </li>
            <li class="active"><a href="#friends" data-toggle="tab"><i class="fa fa-home"></i>
                    <span>Formation</span></a></li>
            <li><a href="#job-history" data-toggle="tab"><i class="fa fa-envelope-o"></i> <span>Experience</span></a>
            </li>
            <li><a href="#competences" data-toggle="tab"><i class="fa fa-envelope-o"></i> <span>Compétences</span></a>
            </li>
            <li><a href="#job-history" data-toggle="tab"><i class="fa fa-envelope-o"></i> <span>Langues</span></a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content tab-border">
            <div class="tab-pane fade in active" id="friends">
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
                                    <ul class="panel-note-control">
                                        <li><a class="minus" href="javascript:void(0)"><i class="fa fa-minus"></i></a>
                                        </li>
                                        <li><a class="close-panel" href="javascript:void(0)"
                                               ng-click="supprimerFormation(f)"><i class="fa fa-times"></i></a></li>
                                    </ul>
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
                                    <ul class="panel-note-control">
                                        <li><a class="minus" href="javascript:void(0)"><i class="fa fa-minus"></i></a>
                                        </li>
                                        <li><a class="close-panel" href="javascript:void(0)"
                                               ng-click="supprimerExperience(e)"><i class="fa fa-times"></i></a></li>
                                    </ul>
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

            <div class="tab-pane fade" id="about-me">

                <div class="timeline-row">
                    <div class="timeline-icon">
                        <img src="assets/images/placeholder.jpg" alt="">
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="panel panel-flat timeline-content">
                                <div class="panel-heading">
                                    <h6 class="panel-title">Himalayan sunset</h6>
                                    <div class="heading-elements">
                                        <span class="heading-text"><i class="icon-checkmark-circle position-left text-success"></i> 49 minutes ago</span>
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-arrow-down12"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-user-lock"></i> Hide user posts</a></li>
                                                    <li><a href="#"><i class="icon-user-block"></i> Block user</a></li>
                                                    <li><a href="#"><i class="icon-user-minus"></i> Unfollow user</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-embed"></i> Embed post</a></li>
                                                    <li><a href="#"><i class="icon-blocked"></i> Report this post</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="heading-elements-toggle"><i class="icon-more"></i></a></div>

                                <div class="panel-body">
                                    <a href="#" class="display-block content-group">
                                        <img src="assets/images/cover.jpg" class="img-responsive content-group" alt="">
                                    </a>

                                    <h6 class="content-group">
                                        <i class="icon-comment-discussion position-left"></i>
                                        <a href="#">Jason Ansley</a> commented:
                                    </h6>

                                    <blockquote>
                                        <p>When suspiciously goodness labrador understood rethought yawned grew piously endearingly inarticulate oh goodness jeez trout distinct hence cobra despite taped laughed the much audacious less inside tiger groaned darn stuffily metaphoric unihibitedly inside cobra.</p>
                                        <footer>Jason, <cite title="Source Title">10:39 am</cite></footer>
                                    </blockquote>
                                </div>

                                <div class="panel-footer panel-footer-transparent">
                                    <div class="heading-elements">
                                        <ul class="list-inline list-inline-condensed heading-text">
                                            <li><a href="#" class="text-default"><i class="icon-eye4 position-left"></i> 438</a></li>
                                            <li><a href="#" class="text-default"><i class="icon-comment-discussion position-left"></i> 71</a></li>
                                        </ul>

                                        <span class="heading-btn pull-right">
														<a href="#" class="btn btn-link legitRipple">Read post <i class="icon-arrow-right14 position-right"></i></a>
													</span>
                                    </div>
                                    <a class="heading-elements-toggle"><i class="icon-more"></i></a></div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="panel panel-flat timeline-content">
                                <div class="panel-heading">
                                    <h6 class="panel-title">Diving lesson in Dubai</h6>
                                    <div class="heading-elements">
                                        <span class="heading-text"><i class="icon-checkmark-circle position-left text-success"></i> 3 hours ago</span>
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-arrow-down12"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-user-lock"></i> Hide user posts</a></li>
                                                    <li><a href="#"><i class="icon-user-block"></i> Block user</a></li>
                                                    <li><a href="#"><i class="icon-user-minus"></i> Unfollow user</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-embed"></i> Embed post</a></li>
                                                    <li><a href="#"><i class="icon-blocked"></i> Report this post</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="heading-elements-toggle"><i class="icon-more"></i></a></div>

                                <div class="panel-body">
                                    <a href="#" class="display-block content-group">
                                        <img src="assets/images/cover.jpg" class="img-responsive" alt="">
                                    </a>

                                    <h6 class="content-group">
                                        <i class="icon-comment-discussion position-left"></i>
                                        <a href="#">Melanie Watson</a> commented:
                                    </h6>

                                    <blockquote>
                                        <p>Pernicious drooled tryingly over crud peaceful gosh yet much following brightly mallard hey gregariously far gosh until earthworm python some impala belched darn a sighed unicorn much changed and astride cat and burned grizzly when jeez wonderful the outside tedious.</p>
                                        <footer>Melanie, <cite title="Source Title">12:56 am</cite></footer>
                                    </blockquote>
                                </div>

                                <div class="panel-footer panel-footer-transparent">
                                    <div class="heading-elements">
                                        <ul class="list-inline list-inline-condensed heading-text">
                                            <li><a href="#" class="text-default"><i class="icon-eye4 position-left"></i> 438</a></li>
                                            <li><a href="#" class="text-default"><i class="icon-comment-discussion position-left"></i> 71</a></li>
                                        </ul>

                                        <span class="heading-btn pull-right">
														<a href="#" class="btn btn-link legitRipple">Read post <i class="icon-arrow-right14 position-right"></i></a>
													</span>
                                    </div>
                                    <a class="heading-elements-toggle"><i class="icon-more"></i></a></div>
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
                        <span class="tag label label-info"><span ng-bind="c.intitule"></span><span data-role="remove" ng-click="supprimerCompetence(c)"></span></span>
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


    @section('script')

    <script type="text/javascript">
        $(function () {
            app.controller("ctrl", ['$scope', 'notificationFactory', '$http', function ($scope, notificationFactory, $http) {
                $scope.formation = new Object({"_token": "{{ csrf_token() }}"});
                $scope.experience = new Object({"_token": "{{ csrf_token() }}"});
                $scope.competence = new Object({"_token": "{{ csrf_token() }}"});
                $scope.formations = [];
                $scope.experiences = [];
                $scope.competences = [];
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
                        },
                        error: function (error) {
                            notificationFactory.error("Erreur lors de l'ajout de formation !", "Erreur");
                        }
                    });


                    $scope.formation = new Object({"_token": "{{ csrf_token() }}"});


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

                $scope.getFormations();
                $scope.getExperiences();
                $scope.getCompetences();
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