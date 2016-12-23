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
                            <a href="#"><img src="/uploads/avatars{{ Auth::user()->photo  }}" class=" img-responsive" alt=""></a>
                            @if(Auth::check())

                            <h6>{{strtoupper(Auth::user()->fullName)}} </h6>
                                <span class="text-size-small">{{ Auth::user()->email }}</span>
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
