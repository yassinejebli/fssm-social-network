@extends('layouts.master')

@section("content")





    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header">
            <div class="page-header-content">
                <div class="page-title">
                    <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Actualité</span>
                        -Publications</h4>

                </div>

                <div class="heading-elements">

                    <ul>
                        <li class="dropdown">
                            <a href="#" class="btn bg-danger-800 btn-labeled heading-btn dropdown-toggle"
                               data-toggle="dropdown"><b><span class="caret"></span></b>
                                Créer
                                une publication</a>

                            <ul class="dropdown-menu dropdown-menu-left width-200">
                                <li><a href="{{url("/publications/addOffre")}}"> Offre</a></li>
                                <li><a href="#"> Evénement</a></li>

                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">

            <!-- Detached content -->
            <div class="container-detached">
                <div class="content-detached">

                    <!-- Search field -->

                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Filtrer les résultats</h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">
                            <form action="#" class="main-search">
                                <div class="input-group content-group">
                                    <div class="has-feedback has-feedback-left">
                                        <input type="text" class="form-control input-xlg"
                                               placeholder="critère de recherche">
                                        <div class="form-control-feedback">
                                            <i class="icon-search4 text-muted text-size-base"></i>
                                        </div>
                                    </div>

                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-primary btn-xlg">Search</button>
                                    </div>
                                </div>

                                <div class="row search-option-buttons">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <select class="select" data-placeholder="Choisissez le date..."
                                                    name="parDate">
                                                <option></option>
                                                <option value="0">Aujourdh'hui</option>
                                                <option value="1">Cette semaine</option>
                                                <option value="2">Ce mois</option>
                                                <option value="3">Tous</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <select class="select" data-placeholder="Choisissez le type..."
                                                    name="parTypePublication">
                                                <option value="0">Offre de stage</option>
                                                <option value="1">Offre d'emploi</option>
                                                <option value="2">Offre de formation</option>
                                                <option value="3">Evenement</option>
                                                <option value="4">Tous</option>

                                            </select>
                                        </div>
                                    </div>


                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /search field -->
                    <div class="row">
                        @for($i=0;$i<count($publications["data"]);$i++)



                            <div class="col-md-6" id="pub{{$publications["data"][$i]["_id"]}}">
                                <div class="timeline-row ">

                                    <div class="panel panel-flat timeline-content
                                    @if($publications["data"][$i]["typePublication"]=="0")
                                            border-top-blue-300 border-left-blue-300 border-bottom-blue-300 border-right-blue-300

                                             @elseif($publications["data"][$i]["typePublication"]=="1")
                                            border-top-green-600 border-left-green-600 border-bottom-green-600 border-right-green-600
                                      @else
                                            border-top-orange-600 border-left-orange-600 border-bottom-orange-600 border-right-orange-600
                                    @endif">
                                        <div class="panel-heading">
                                            @if($publications["data"][$i]["typePublication"]!="3")
                                            <h6 class="panel-title">{{$publications["data"][$i]["titre"]}}</h6>
                                            @endif
                                            <div class="heading-elements">
                                                <span class="heading-text"><i
                                                            class="icon-checkmark-circle position-left text-success"></i>{{$publications["data"][$i]["created_at"]}}</span>

                                            </div>
                                        </div>

                                        <div class="panel-body">
                                            <a href="#" class="display-block content-group">
                                                @if($publications["data"][$i]["typePublication"]=="0")
                                                    <img src="/uploads/offres/stage{{$publications["data"][$i]["image"]}}"
                                                         class="img-responsive content-group"
                                                         alt="">
                                                @elseif($publications["data"][$i]["typePublication"]=="1")
                                                <!--  <img src="\uploads\offres\emlpoi1482327713.jpg"
                                                         class="img-responsive content-group"
                                                         alt="">-->
                                                    <img src="\uploads\offres\emploi{{$publications["data"][$i]["image"]}}"
                                                         class="img-responsive content-group"
                                                         alt="">
                                                @elseif($publications["data"][$i]["typePublication"]=="3")
                                                <!--  <img src="\uploads\offres\emlpoi1482327713.jpg"
                                                         class="img-responsive content-group"
                                                         alt="">-->
                                                <img src="\uploads\avatars{{$publications["data"][$i]["photo"]}}"
                                                class="img-responsive content-group"
                                                alt="">
                                                @else
                                                    <img src="/uploads/offres/formation{{$publications["data"][$i]["image"]}}"
                                                         class="img-responsive content-group"
                                                         alt="">
                                                @endif

                                            </a>

                                            <h6 class="content-group">
                                                <i class=" icon-user position-left"></i>
                                                Publié par:
                                                @if(\Illuminate\Support\Facades\Auth::user()->toArray()["_id"]==$publications["data"][$i]["user"]["_id"])
                                                    <a href="#"> Vous</a>
                                                @else
                                                    <a href="#">   {{$publications["data"][$i]["user"]["fullName"]}}</a>
                                                @endif

                                            </h6>

                                            <blockquote>
                                                @if($publications["data"][$i]["typePublication"]!="3")
                                                <p>{{$publications["data"][$i]["description"]}}</p>
                                                @endif
                                                @if($publications["data"][$i]["typePublication"]=="0")
                                                    <footer><p class="text-danger">Date
                                                            debut: {{$publications["data"][$i]["dateDebut"]}}, Date fin:
                                                            {{$publications["data"][$i]["dateFin"]}}</p>
                                                        <p style="color: black;">
                                                            L'entreprise: {{$publications["data"][$i]["nomEntreprise"]}}</p>
                                                        <p style="color: black;">
                                                            Poste: {{$publications["data"][$i]["posteDesire"]}}
                                                            ayant {{$publications["data"][$i]["niveauEtude"]}}</p>
                                                    </footer>
                                                @elseif($publications["data"][$i]["typePublication"]=="1")
                                                    <footer><p class="text-danger">Dernier délai de
                                                            postuler: {{$publications["data"][$i]["delais"]}}</p>
                                                        <p style="color: black;">
                                                            L'entreprise: {{$publications["data"][$i]["nomEntreprise"]}}</p>
                                                        <p style="color: black;">
                                                            Poste:{{$publications["data"][$i]["posteDesire"]}} ayant
                                                            un {{$publications["data"][$i]["niveauEtude"]}}
                                                            , type
                                                            contrat: {{$publications["data"][$i]["typeContrat"]}}</p>
                                                    </footer>
                                                @elseif($publications["data"][$i]["typePublication"]=="2")
                                                    <footer><p class="text-danger">Date
                                                            debut:{{$publications["data"][$i]["dateDebut"]}}, Date fin:
                                                            {{$publications["data"][$i]["dateFin"]}}</p>
                                                        <p style="color: black;">(L'entreprise ou l'entreprise):
                                                            {{$publications["data"][$i]["nomEntreprise"]}}</p>
                                                        <p style="color: black;">
                                                            Domaine: {{$publications["data"][$i]["domaine"]}}, nivaux
                                                            min: {{$publications["data"][$i]["niveauEtude"]}}
                                                            ({{$publications["data"][$i]["typeFormation"]}})</p>
                                                    </footer>
                                                @endif
                                            </blockquote>
                                        </div>

                                        <div class="panel-footer panel-footer-transparent">
                                            <div class="heading-elements">
                                                   <span class="heading-btn pull-left">
                                                        <span class="text-default commentIndicator"
                                                              id="{{$publications["data"][$i]["_id"]}}"><i
                                                                    class="icon-comment-discussion position-left"></i> 71</span>
																	<a href="#" class="btn btn-flat-">Postuler <i
                                                                                class=" icon-checkmark5 position-left"></i></a>
																</span>


                                                <span class="heading-btn pull-right">
																	<a href="#" class="btn btn-link">Lire la suite <i
                                                                                class="icon-arrow-right14 position-right"></i></a>
																</span>
                                            </div>

                                        </div>
                                        @if(\Illuminate\Support\Facades\Auth::user()->toArray()["_id"]==$publications["data"][$i]["user"]["_id"])
                                            <div>
                                                <div class="panel-footer panel-footer-condensed">
                                                    <div class="heading-elements">

                                                        <ul class="list-inline list-inline-condensed heading-text pull-right">
                                                            <li>
                                                                <a href="/publications/editOffre/{{$publications['data'][$i]['_id']}}"
                                                                   class="text-default"><i
                                                                            class="icon-pencil7"></i></a></li>
                                                            <li><a class="text-default"
                                                                   onclick="supprimerPublication('{{$publications["data"][$i]["_id"]}}')"><i
                                                                            class="icon-bin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        <div id="comment{{$publications["data"][$i]["_id"]}}" class="comment">
                                            <div class="panel-heading">
                                                <h6 class="panel-title">Commentaires</h6>
                                            </div>

                                            <div class="panel-body">
                                                <ul class="media-list chat-list content-group">

                                                    <li class="media">
                                                        <div class="media-left">
                                                            <a href="assets/images/placeholder.jpg">
                                                                <img src="assets/images/placeholder.jpg"
                                                                     class="img-circle" alt="">
                                                            </a>
                                                        </div>

                                                        <div class="media-body">

                                                            <div class="media-content"><a class="media-link" href="#">Bouziane
                                                                    Marwane</a>: Tolerantly some understood this
                                                                stubbornly
                                                                after snarlingly frog far added insect into snorted more
                                                                auspiciously heedless drunkenly jeez foolhardy oh.
                                                            </div>
                                                            <span class="media-annotation display-block mt-10">Wed, 4:20 pm <a
                                                                        href="#"><i
                                                                            class="icon-pin-alt position-right text-muted"></i></a></span>
                                                        </div>
                                                    </li>


                                                    <li class="media">
                                                        <div class="media-left">
                                                            <a href="assets/images/placeholder.jpg">
                                                                <img src="assets/images/placeholder.jpg"
                                                                     class="img-circle" alt="">
                                                            </a>
                                                        </div>

                                                        <div class="media-body">
                                                            <div class="media-content"><a class="media-link" href="#">Hajar
                                                                    Es-sobhy</a>: Grunted smirked and grew less but
                                                                rewound
                                                                much despite and impressive via alongside out and gosh
                                                                easy manatee dear ineffective yikes.
                                                            </div>
                                                            <span class="media-annotation display-block mt-10">13 minutes ago <a
                                                                        href="#"><i
                                                                            class="icon-pin-alt position-right text-muted"></i></a></span>
                                                        </div>
                                                    </li>

                                                </ul>


                                                <div class="row">

                                                    <textarea name="enter-message" class="form-control content-group"
                                                              rows="2" cols="1"
                                                              placeholder="Enter your comment..."></textarea>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endfor
                    </div>


                    <!-- /tasks grid -->


                    <!-- Pagination -->
                    <div class="text-center content-group-lg pt-20">
                        <ul class="pagination">
                            <li><a href="{{$publications["prev_page_url"]}}"><i
                                            class="icon-arrow-small-left"></i></a></li>

                            @for($ii=1;$ii<=$publications["last_page"];$ii++)
                                @if($publications["current_page"]==$ii)
                                    <li class="active"><a href="{{"?page=".$ii}}">{{$ii}}</a></li>
                                @else
                                    <li><a href="{{"?page=".$ii}}">{{$ii}}</a></li>
                                @endif
                            @endfor

                            <li><a href="{{$publications["next_page_url"]}}"><i class="icon-arrow-small-right"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!-- /pagination -->

                </div>
            </div>
            <!-- /detached content -->


        </div>
        <!-- /content area -->

    </div>
    <!-- /main content -->

    <!-- /page content -->



@endsection