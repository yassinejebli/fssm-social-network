<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FSSM Social Network</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
          type="text/css">
    <link href="../assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/colors.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->


</head>

<body ng-controller="ctrl">

<!-- Main navbar -->
<div class="navbar navbar-inverse bg-indigo">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ route('index') }}"><img src="../assets/images/logo_light.png" alt=""></a>

        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a>
            </li>


        </ul>

<!--        <div class="navbar-right">-->
<!---->
<!---->
<!--            <ul class="nav navbar-nav">-->
<!--                <li class="dropdown">-->
<!--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">-->
<!--                        <i class="icon-bell2"></i>-->
<!--                        <span class="visible-xs-inline-block position-right">Activity</span>-->
<!--                        <span class="status-mark border-orange-400"></span>-->
<!--                    </a>-->
<!---->
<!--                    <div class="dropdown-menu dropdown-content">-->
<!--                        <div class="dropdown-content-heading">-->
<!--                            Activity-->
<!--                            <ul class="icons-list">-->
<!--                                <li><a href="#"><i class="icon-menu7"></i></a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!---->
<!--                        <ul class="media-list dropdown-content-body width-350">-->
<!--                            <li class="media">-->
<!--                                <div class="media-left">-->
<!--                                    <a href="#" class="btn bg-success-400 btn-rounded btn-icon btn-xs"><i-->
<!--                                            class="icon-mention"></i></a>-->
<!--                                </div>-->
<!---->
<!--                                <div class="media-body">-->
<!--                                    <a href="#">Taylor Swift</a> mentioned you in a post "Angular JS. Tips and tricks"-->
<!--                                    <div class="media-annotation">4 minutes ago</div>-->
<!--                                </div>-->
<!--                            </li>-->
<!---->
<!--                            <li class="media">-->
<!--                                <div class="media-left">-->
<!--                                    <a href="#" class="btn bg-pink-400 btn-rounded btn-icon btn-xs"><i-->
<!--                                            class="icon-paperplane"></i></a>-->
<!--                                </div>-->
<!---->
<!--                                <div class="media-body">-->
<!--                                    Special offers have been sent to subscribed users by <a href="#">Donna Gordon</a>-->
<!--                                    <div class="media-annotation">36 minutes ago</div>-->
<!--                                </div>-->
<!--                            </li>-->
<!---->
<!--                            <li class="media">-->
<!--                                <div class="media-left">-->
<!--                                    <a href="#" class="btn bg-blue btn-rounded btn-icon btn-xs"><i-->
<!--                                            class="icon-plus3"></i></a>-->
<!--                                </div>-->
<!---->
<!--                                <div class="media-body">-->
<!--                                    <a href="#">Chris Arney</a> created a new <span class="text-semibold">Design</span>-->
<!--                                    branch in <span class="text-semibold">Limitless</span> repository-->
<!--                                    <div class="media-annotation">2 hours ago</div>-->
<!--                                </div>-->
<!--                            </li>-->
<!---->
<!--                            <li class="media">-->
<!--                                <div class="media-left">-->
<!--                                    <a href="#" class="btn bg-purple-300 btn-rounded btn-icon btn-xs"><i-->
<!--                                            class="icon-truck"></i></a>-->
<!--                                </div>-->
<!---->
<!--                                <div class="media-body">-->
<!--                                    Shipping cost to the Netherlands has been reduced, database updated-->
<!--                                    <div class="media-annotation">Feb 8, 11:30</div>-->
<!--                                </div>-->
<!--                            </li>-->
<!---->
<!--                            <li class="media">-->
<!--                                <div class="media-left">-->
<!--                                    <a href="#" class="btn bg-warning-400 btn-rounded btn-icon btn-xs"><i-->
<!--                                            class="icon-bubble8"></i></a>-->
<!--                                </div>-->
<!---->
<!--                                <div class="media-body">-->
<!--                                    New review received on <a href="#">Server side integration</a> services-->
<!--                                    <div class="media-annotation">Feb 2, 10:20</div>-->
<!--                                </div>-->
<!--                            </li>-->
<!---->
<!--                            <li class="media">-->
<!--                                <div class="media-left">-->
<!--                                    <a href="#" class="btn bg-teal-400 btn-rounded btn-icon btn-xs"><i-->
<!--                                            class="icon-spinner11"></i></a>-->
<!--                                </div>-->
<!---->
<!--                                <div class="media-body">-->
<!--                                    <strong>January, 2016</strong> - 1320 new users, 3284 orders, $49,390 revenue-->
<!--                                    <div class="media-annotation">Feb 1, 05:46</div>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </li>-->
<!---->
<!--                <li class="dropdown">-->
<!--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">-->
<!--                        <i class="icon-bubble8"></i>-->
<!--                        <span class="visible-xs-inline-block position-right">Messages</span>-->
<!--                        <span class="status-mark border-orange-400"></span>-->
<!--                    </a>-->
<!---->
<!--                    <div class="dropdown-menu dropdown-content width-350">-->
<!--                        <div class="dropdown-content-heading">-->
<!--                            Messages-->
<!--                            <ul class="icons-list">-->
<!--                                <li><a href="#"><i class="icon-compose"></i></a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!---->
<!--                        <ul class="media-list dropdown-content-body">-->
<!--                            <li class="media">-->
<!--                                <div class="media-left">-->
<!--                                    <img src="../assets/images/placeholder.jpg" class="img-circle img-sm" alt="">-->
<!--                                    <span class="badge bg-danger-400 media-badge">5</span>-->
<!--                                </div>-->
<!---->
<!--                                <div class="media-body">-->
<!--                                    <a href="#" class="media-heading">-->
<!--                                        <span class="text-semibold">James Alexander</span>-->
<!--                                        <span class="media-annotation pull-right">04:58</span>-->
<!--                                    </a>-->
<!---->
<!--                                    <span class="text-muted">who knows, maybe that would be the best thing for me...</span>-->
<!--                                </div>-->
<!--                            </li>-->
<!---->
<!--                            <li class="media">-->
<!--                                <div class="media-left">-->
<!--                                    <img src="../assets/images/placeholder.jpg" class="img-circle img-sm" alt="">-->
<!--                                    <span class="badge bg-danger-400 media-badge">4</span>-->
<!--                                </div>-->
<!---->
<!--                                <div class="media-body">-->
<!--                                    <a href="#" class="media-heading">-->
<!--                                        <span class="text-semibold">Margo Baker</span>-->
<!--                                        <span class="media-annotation pull-right">12:16</span>-->
<!--                                    </a>-->
<!---->
<!--                                    <span class="text-muted">That was something he was unable to do because...</span>-->
<!--                                </div>-->
<!--                            </li>-->
<!---->
<!--                            <li class="media">-->
<!--                                <div class="media-left"><img src="../assets/images/placeholder.jpg"-->
<!--                                                             class="img-circle img-sm" alt=""></div>-->
<!--                                <div class="media-body">-->
<!--                                    <a href="#" class="media-heading">-->
<!--                                        <span class="text-semibold">Jeremy Victorino</span>-->
<!--                                        <span class="media-annotation pull-right">22:48</span>-->
<!--                                    </a>-->
<!---->
<!--                                    <span class="text-muted">But that would be extremely strained and suspicious...</span>-->
<!--                                </div>-->
<!--                            </li>-->
<!---->
<!--                            <li class="media">-->
<!--                                <div class="media-left"><img src="../assets/images/placeholder.jpg"-->
<!--                                                             class="img-circle img-sm" alt=""></div>-->
<!--                                <div class="media-body">-->
<!--                                    <a href="#" class="media-heading">-->
<!--                                        <span class="text-semibold">Beatrix Diaz</span>-->
<!--                                        <span class="media-annotation pull-right">Tue</span>-->
<!--                                    </a>-->
<!---->
<!--                                    <span class="text-muted">What a strenuous career it is that I've chosen...</span>-->
<!--                                </div>-->
<!--                            </li>-->
<!---->
<!--                            <li class="media">-->
<!--                                <div class="media-left"><img src="../assets/images/placeholder.jpg"-->
<!--                                                             class="img-circle img-sm" alt=""></div>-->
<!--                                <div class="media-body">-->
<!--                                    <a href="#" class="media-heading">-->
<!--                                        <span class="text-semibold">Richard Vango</span>-->
<!--                                        <span class="media-annotation pull-right">Mon</span>-->
<!--                                    </a>-->
<!---->
<!--                                    <span class="text-muted">Other travelling salesmen live a life of luxury...</span>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                        </ul>-->
<!---->
<!--                        <div class="dropdown-content-footer">-->
<!--                            <a href="#" data-popup="tooltip" title="All messages"><i-->
<!--                                    class="icon-menu display-block"></i></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
    </div>
</div>
<!-- /main navbar -->


<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-main sidebar-default">
            <div class="sidebar-content">

                <!-- User menu -->
                <div class="sidebar-user-material">
                    <div class="category-content">
                        <div class="sidebar-user-material-content">
                            <a href="#"><img src="/uploads/avatars{{ Auth::user()->photo }}" class=" img-responsive" alt=""></a>
                            @if(Auth::check())

                            <h6>{{strtoupper(Auth::user()->fullName)}} </h6>
                                <span class="text-size-small">{{ Auth::user()->address }}</span>
                        </div>
                        @endif

                        <div class="sidebar-user-material-menu">
                            <a href="#user-nav" data-toggle="collapse"><span>Mon compte</span> <i class="caret"></i></a>
                        </div>
                    </div>

                    <div class="navigation-wrapper collapse" id="user-nav">
                        <ul class="navigation">
                            <li><a href="{{ route('profile') }}"><i class="icon-user-plus"></i> <span>Mon profile</span></a></li>
                            <li><a href="#"><i class="icon-comment-discussion"></i> <span><span
                                    class="badge bg-teal-400 pull-right">58</span> Messages</span></a></li>
                            <li class="divider"></li>
                            <li><a href=""><i class="icon-cog5"></i> <span>Paramétres</span></a></li>
                            <li><a href="{{ route('login') }}"><i class="icon-switch2"></i> <span>Se déconnecter</span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /user menu -->


                <!-- Main navigation -->
                <div class="sidebar-category sidebar-category-visible">
                    <div class="category-content no-padding">
                        <ul class="navigation navigation-main navigation-accordion">

                            <!-- Main -->

                            <li><a href="../index.html"><i class="icon-magazine"></i> <span>Actualité</span></a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-briefcase"></i> <span>Offres</span></a>
                                <ul>
                                    <li><a href="layout_navbar_fixed.html">Toutes les offres</a></li>
                                    <li><a href="layout_navbar_fixed.html">Stages</a></li>
                                    <li><a href="layout_navbar_sidebar_fixed.html">Emploi</a></li>
                                    <li><a href="layout_sidebar_fixed_native.html">Formations</a></li>

                                    <li><a href="layout_navbar_hideable_sidebar.html">Nouvelle offre</a></li>

                                </ul>

                            </li>
                            <li>
                                <a href="#"><i class=" icon-accessibility"></i> <span>Evénements</span></a>
                                <ul>
                                    <li><a href="layout_navbar_fixed.html">tous les événements</a></li>
                                    <li><a href="layout_navbar_fixed.html">Universitaires</a></li>
                                    <li><a href="layout_navbar_sidebar_fixed.html">Partenaires</a></li>
                                    <li><a href="layout_sidebar_fixed_native.html">Nouveau événement</a></li>

                                </ul>

                            </li>
                            <li>
                                <a href="#"><i class="icon-stack"></i> <span>Mes publications</span></a>
                                <ul>
                                    <li><a href="layout_navbar_fixed.html">Mes événements</a></li>
                                    <li><a href="layout_navbar_fixed.html">Mes offres</a>

                                    </li>


                                </ul>

                            </li>


                        </ul>
                    </div>
                </div>
                <!-- /main navigation -->

            </div>
        </div>
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content">
             @yield('content')
        </div>
        <!-- /main content -->

        <div class="footer text-muted">
            © 2016. <a href="{{ route('index') }}">FSSM Social Network</a> by <a href="https://bitbucket.org/fssm/profile/members">ISI Team</a>
        </div>
    </div>
    <!-- /page content -->


</div>
<!-- /page container -->

</body>

<!-- Core JS files -->
<script type="text/javascript" src="../assets/js/plugins/loaders/pace.min.js"></script>
<script type="text/javascript" src="assets/js/lib/jquery-1.11.min.js"></script>

<script type="text/javascript" src="../assets/js/core/libraries/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/js/plugins/loaders/blockui.min.js"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
<script type="text/javascript" src="../assets/js/plugins/visualization/d3/d3.min.js"></script>
<script type="text/javascript" src="../assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
<script type="text/javascript" src="../assets/js/plugins/forms/styling/switchery.min.js"></script>
<script type="text/javascript" src="../assets/js/plugins/forms/styling/uniform.min.js"></script>
<script type="text/javascript" src="../assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
<script type="text/javascript" src="../assets/js/plugins/ui/moment/moment.min.js"></script>
<script type="text/javascript" src="../assets/js/plugins/pickers/daterangepicker.js"></script>

<script type="text/javascript" src="../assets/js/core/app.js"></script>

<script type="text/javascript" src="../assets/js/plugins/ui/ripple.min.js"></script>
<script type="text/javascript" src="scripts/angular.min.js"></script>
<script type="text/javascript">
</script>
<script type="text/javascript" src="scripts/toastr.js"></script>
<script type="text/javascript" src="scripts/App/app.js"></script>

<!--<script type="text/javascript" src="assets/js/pages/picker_date.js"></script>-->
<script type="text/javascript" src="assets/js/plugins/pickers/pickadate/legacy.js"></script>



@yield('script')
<!--Layout Script End -->
<!-- /theme JS files -->
</html>
