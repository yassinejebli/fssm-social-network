@extends('layouts.master')

@section('content')
<div class="sidebar sidebar-secondary sidebar-default">
    <div class="sidebar-content">

        <!-- Search messages -->
        <div class="sidebar-category">
            <div class="category-title">
                <span>Search messages</span>
                <ul class="icons-list">
                    <li><a href="#" data-action="collapse"></a></li>
                </ul>
            </div>

            <div class="category-content">
                <form action="#">
                    <div class="has-feedback has-feedback-left">
                        <input type="search" class="form-control" placeholder="Type and hit Enter">
                        <div class="form-control-feedback">
                            <i class="icon-search4 text-size-base text-muted"></i>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /search messages -->


        <!-- Actions -->
        <div class="sidebar-category">
            <div class="category-title">
                <span>Actions</span>
                <ul class="icons-list">
                    <li><a href="#" data-action="collapse"></a></li>
                </ul>
            </div>

            <div class="category-content">
                <a href="#" data-toggle="modal" data-target="#newConversationModal" class="btn bg-pink-400 btn-rounded btn-block btn-xs">Nouvelle conversation</a>
                <a href="#" data-toggle="modal" data-target="#newConferenceModal" class="btn bg-teal-400 btn-rounded btn-block btn-xs">Nouvelle conference</a>
            </div>
        </div>
        <!-- /actions -->


        <!-- Sub navigation -->
        <div class="sidebar-category">
            <div class="category-title">
                <span>Navigation</span>
                <ul class="icons-list">
                    <li><a href="#" data-action="collapse"></a></li>
                </ul>
            </div>

            <div class="category-content no-padding">
                <ul class="navigation navigation-alt navigation-accordion">
                    <li class="navigation-header">Actions</li>
                    <li><a href="#"><i class="icon-compose"></i> Compose message</a></li>
                    <li><a href="#"><i class="icon-collaboration"></i> Conference</a></li>
                    <li><a href="#"><i class="icon-user-plus"></i> Add users <span class="label label-success">32 online</span></a></li>
                    <li><a href="#"><i class="icon-users"></i> Create team</a></li>
                    <li class="navigation-divider"></li>
                    <li><a href="#"><i class="icon-files-empty"></i> All messages <span class="badge badge-danger">99+</span></a></li>
                    <li><a href="#"><i class="icon-file-plus"></i> Active discussions <span class="badge badge-default">32</span></a></li>
                    <li><a href="#"><i class="icon-file-locked"></i> Closed discussions</a></li>
                    <li class="navigation-header">Options</li>
                    <li><a href="#"><i class="icon-reading"></i> Message history</a></li>
                    <li><a href="#"><i class="icon-cog3"></i> Settings</a></li>
                </ul>
            </div>
        </div>
        <!-- /sub navigation -->


        <!-- Latest updates -->
        <div class="sidebar-category">
            <div class="category-title">
                <span>Latest updates</span>
                <ul class="icons-list">
                    <li><a href="#" data-action="collapse"></a></li>
                </ul>
            </div>

            <div class="category-content">
                <ul class="media-list">
                    <li class="media">
                        <div class="media-left"><a href="#" class="btn border-success text-success btn-flat btn-icon btn-sm btn-rounded"><i class="icon-checkmark3"></i></a></div>
                        <div class="media-body">
                            <a href="#">Richard Vango</a> has been registered
                            <div class="media-annotation">4 minutes ago</div>
                        </div>
                    </li>

                    <li class="media">
                        <div class="media-left"><a href="#" class="btn border-slate text-slate btn-flat btn-icon btn-sm btn-rounded"><i class="icon-infinite"></i></a></div>
                        <div class="media-body">
                            Server went offline for monthly maintenance
                            <div class="media-annotation">36 minutes ago</div>
                        </div>
                    </li>

                    <li class="media">
                        <div class="media-left"><a href="#" class="btn border-success text-success btn-flat btn-icon btn-sm btn-rounded"><i class="icon-checkmark3"></i></a></div>
                        <div class="media-body">
                            <a href="#">Chris Arney</a> has been registered
                            <div class="media-annotation">2 hours ago</div>
                        </div>
                    </li>

                    <li class="media">
                        <div class="media-left"><a href="#" class="btn border-danger text-danger btn-flat btn-icon btn-sm btn-rounded"><i class="icon-cross2"></i></a></div>
                        <div class="media-body">
                            <a href="#">Chris Arney</a> left main conversation
                            <div class="media-annotation">Dec 18, 18:36</div>
                        </div>
                    </li>

                    <li class="media">
                        <div class="media-left"><a href="#" class="btn border-primary text-primary btn-flat btn-icon btn-sm btn-rounded"><i class="icon-plus3"></i></a></div>
                        <div class="media-body">
                            <a href="#">Beatrix Diaz</a> just joined conversation
                            <div class="media-annotation">Dec 12, 05:46</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /latest updates -->


        <!-- Online users -->
        <div class="sidebar-category">
            <div class="category-title">
                <span>Online users</span>
                <ul class="icons-list">
                    <li><a href="#" data-action="collapse"></a></li>
                </ul>
            </div>

            <div class="category-content no-padding">
                <ul class="media-list media-list-linked">
                    <li class="media">
                        <a href="#" class="media-link">
                            <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle" alt=""></div>
                            <div class="media-body">
                                <span class="media-heading text-semibold">James Alexander</span>
                                <span class="text-size-small text-muted display-block">UI/UX expert</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="status-mark bg-success"></span>
                            </div>
                        </a>
                    </li>

                    <li class="media">
                        <a href="#" class="media-link">
                            <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle" alt=""></div>
                            <div class="media-body">
                                <span class="media-heading text-semibold">Jeremy Victorino</span>
                                <span class="text-size-small text-muted display-block">Senior designer</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="status-mark bg-danger"></span>
                            </div>
                        </a>
                    </li>

                    <li class="media">
                        <a href="#" class="media-link">
                            <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle" alt=""></div>
                            <div class="media-body">
                                <div class="media-heading"><span class="text-semibold">Jordana Mills</span></div>
                                <span class="text-muted">Sales consultant</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="status-mark bg-grey-300"></span>
                            </div>
                        </a>
                    </li>

                    <li class="media">
                        <a href="#" class="media-link">
                            <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle" alt=""></div>
                            <div class="media-body">
                                <div class="media-heading"><span class="text-semibold">William Miles</span></div>
                                <span class="text-muted">SEO expert</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="status-mark bg-success"></span>
                            </div>
                        </a>
                    </li>

                    <li class="media">
                        <a href="#" class="media-link">
                            <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle" alt=""></div>
                            <div class="media-body">
                                <span class="media-heading text-semibold">Margo Baker</span>
                                <span class="text-size-small text-muted display-block">Google</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="status-mark bg-success"></span>
                            </div>
                        </a>
                    </li>

                    <li class="media">
                        <a href="#" class="media-link">
                            <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle" alt=""></div>
                            <div class="media-body">
                                <span class="media-heading text-semibold">Beatrix Diaz</span>
                                <span class="text-size-small text-muted display-block">Facebook</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="status-mark bg-warning-400"></span>
                            </div>
                        </a>
                    </li>

                    <li class="media">
                        <a href="#" class="media-link">
                            <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle" alt=""></div>
                            <div class="media-body">
                                <span class="media-heading text-semibold">Richard Vango</span>
                                <span class="text-size-small text-muted display-block">Microsoft</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="status-mark bg-grey-300"></span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /online users -->


        <!-- Latest messages -->
        <div class="sidebar-category">
            <div class="category-title">
                <span>Latest messages</span>
                <ul class="icons-list">
                    <li><a href="#" data-action="collapse"></a></li>
                </ul>
            </div>

            <div class="category-content no-padding">
                <ul class="media-list media-list-linked">
                    <li class="media">
                        <a href="#" class="media-link">
                            <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle" alt=""></div>
                            <div class="media-body">
                                <span class="media-heading text-semibold">Will Samuel</span>
                                <span class="text-muted">And he looked over at the alarm clock, ticking..</span>
                            </div>
                        </a>
                    </li>

                    <li class="media">
                        <a href="#" class="media-link">
                            <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle" alt=""></div>
                            <div class="media-body">
                                <span class="media-heading text-semibold">Margo Baker</span>
                                <span class="text-muted">However hard he threw himself onto..</span>
                            </div>
                        </a>
                    </li>

                    <li class="media">
                        <a href="#" class="media-link">
                            <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle" alt=""></div>
                            <div class="media-body">
                                <span class="media-heading text-semibold">Monica Smith</span>
                                <span class="text-muted">Yes, but was it spanossible to quietly sleep through..</span>
                            </div>
                        </a>
                    </li>

                    <li class="media">
                        <a href="#" class="media-link">
                            <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle" alt=""></div>
                            <div class="media-body">
                                <span class="media-heading text-semibold">Jordana Mills</span>
                                <span class="text-muted">What should he do now? The next train went at..</span>
                            </div>
                        </a>
                    </li>

                    <li class="media">
                        <a href="#" class="media-link">
                            <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle" alt=""></div>
                            <div class="media-body">
                                <span class="media-heading text-semibold">John Craving</span>
                                <span class="text-muted">Gregor then turned to look out the window..</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /latest messages -->

    </div>
</div>
<!-- /secondary sidebar -->


<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Conversation</span></h4>
            </div>


        </div>

        <div class="breadcrumb-line">


            <ul class="breadcrumb-elements">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-gear position-left"></i>
                        Settings
                        <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
                        <li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
                        <li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="icon-gear"></i> All settings</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">



        <div class="tabbable tab-content-bordered content-group-lg">
            <ul class="nav nav-tabs nav-lg nav-tabs-highlight">
                <li class="active">
                    <a href="#james" data-toggle="tab">
                        <img src="assets/images/placeholder.jpg" alt="" class="img-circle tab-img position-left"> James <span class="status-mark position-right border-danger"></span>
                    </a>
                </li>



                <li class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog7"></i> <span class="visible-xs-inline-block position-right">Options</span> <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#chat-tab3" data-toggle="tab">Dropdown tab</a></li>
                        <li><a href="#chat-tab4" data-toggle="tab">Another tab</a></li>
                    </ul>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade in active has-padding" id="james">
                    <ul class="media-list chat-list content-group">
                        <li class="media">
                            <div class="media-left">
                                <a href="assets/images/placeholder.jpg">
                                    <img src="assets/images/placeholder.jpg" class="img-circle" alt="">
                                </a>
                            </div>

                            <div class="media-body">
                                <div class="media-content">Crud reran and while much withdrew ardent much crab hugely met dizzily that more jeez gent equivalent unsafely far one hesitant so therefore.</div>
                                <span class="media-annotation display-block mt-10">Tue, 10:28 am <a href="#"><i class="icon-pin-alt position-right text-muted"></i></a></span>
                            </div>
                        </li>

                        <li class="media reversed">
                            <div class="media-body">
                                <div class="media-content">Far squid and that hello fidgeted and when. As this oh darn but slapped casually husky sheared that cardinal hugely one and some unnecessary factiously hedgehog a feeling one rudely much</div>
                                <span class="media-annotation display-block mt-10">Mon, 10:24 am <a href="#"><i class="icon-pin-alt position-right text-muted"></i></a></span>
                            </div>

                            <div class="media-right">
                                <a href="assets/images/placeholder.jpg">
                                    <img src="assets/images/placeholder.jpg" class="img-circle" alt="">
                                </a>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <a href="assets/images/placeholder.jpg">
                                    <img src="assets/images/placeholder.jpg" class="img-circle" alt="">
                                </a>
                            </div>

                            <div class="media-body">
                                <div class="media-content">Tolerantly some understood this stubbornly after snarlingly frog far added insect into snorted more auspiciously heedless drunkenly jeez foolhardy oh.</div>
                                <span class="media-annotation display-block mt-10">Wed, 4:20 pm <a href="#"><i class="icon-pin-alt position-right text-muted"></i></a></span>
                            </div>
                        </li>

                        <li class="media date-step content-divider">
                            <span>New messages</span>
                        </li>

                        <li class="media reversed">
                            <div class="media-body">
                                <div class="media-content">Satisfactorily strenuously while sleazily dear frustratingly insect menially some shook far sardonic badger telepathic much jeepers immature much hey.</div>
                                <span class="media-annotation display-block mt-10">2 hours ago <a href="#"><i class="icon-pin-alt position-right text-muted"></i></a></span>
                            </div>

                            <div class="media-right">
                                <a href="assets/images/placeholder.jpg">
                                    <img src="assets/images/placeholder.jpg" class="img-circle" alt="">
                                </a>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <a href="assets/images/placeholder.jpg">
                                    <img src="assets/images/placeholder.jpg" class="img-circle" alt="">
                                </a>
                            </div>

                            <div class="media-body">
                                <div class="media-content">Grunted smirked and grew less but rewound much despite and impressive via alongside out and gosh easy manatee dear ineffective yikes.</div>
                                <span class="media-annotation display-block mt-10">13 minutes ago <a href="#"><i class="icon-pin-alt position-right text-muted"></i></a></span>
                            </div>
                        </li>

                        <li class="media reversed">
                            <div class="media-body">
                                <div class="media-content"><i class="icon-menu display-block"></i></div>
                            </div>

                            <div class="media-right">
                                <a href="assets/images/placeholder.jpg">
                                    <img src="assets/images/placeholder.jpg" class="img-circle" alt="">
                                </a>
                            </div>
                        </li>
                    </ul>

                    <textarea name="enter-message" class="form-control content-group" rows="3" cols="1" placeholder="Tapez votre message..."></textarea>

                    <div class="row">
                        <div class="col-xs-6">
                            <ul class="icons-list icons-list-extended mt-10">
                                <li><a href="#" data-popup="tooltip" title="Send photo" data-container="body"><i class="icon-file-picture"></i></a></li>
                                <li><a href="#" data-popup="tooltip" title="Send video" data-container="body"><i class="icon-file-video"></i></a></li>
                                <li><a href="#" data-popup="tooltip" title="Send file" data-container="body"><i class="icon-file-plus"></i></a></li>
                            </ul>
                        </div>

                        <div class="col-xs-6 text-right">
                            <button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-right"><b><i class="icon-circle-right2"></i></b> Envoyer</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /inside tabs -->



        <!-- /inside accordion -->
<!-- Modaaaaaaaaaaaal-->
        <div class="modal fade" id="newConversationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Nouvelle Conversation</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Sélectionnez un utilisateur</label>
                                    <div class="row">
                                    <select class="selectpicker" data-live-search="true">
                                        <option>Burger, Shake and a Smile</option>
                                        <option>Sugar, Spice and all things nice</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                            <button type="button" ng-click="ajouterConversation()"
                                    class="btn btn-primary">Enregistrer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /content area -->

</div>
@endsection






    @section('script')

    <script type="text/javascript">
        $(function () {
            app.controller("ctrl", ['$scope', 'notificationFactory', '$http', function ($scope, notificationFactory, $http) {

            }]);
            angular.bootstrap(document, ['AdminModule']);
        });

    </script>

    @endsection