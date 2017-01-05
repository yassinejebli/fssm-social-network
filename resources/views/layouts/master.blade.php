<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="{{ csrf_token() }}" name="csrf-token" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FSSM Social Network</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
          type="text/css">
    <link href="/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/colors.css" rel="stylesheet" type="text/css">
    <link href="/css/toastr.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/emoji.min.css" rel="stylesheet" type="text/css">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">
    <!-- /global stylesheets -->


</head>

<body ng-controller="ctrl">

<!-- Main navbar -->
<div class="navbar navbar-inverse bg-indigo">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ route('index') }}" style="font-size:26px;">IT-TEAM</a>

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
                            <a href="#"><img src="/uploads/avatars{{ Auth::user()->photo }}" class=" img-responsive"
                                             alt=""></a>
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
                            <li><a href="{{route('conversations')}}"><i class="icon-comment-discussion"></i> <span><span
                                                class="badge bg-teal-400 pull-right" id="nbrUnseenMessages">0</span> Messages</span></a></li>
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

                            <li><a href="{{ route('index') }}"><i class="icon-magazine"></i> <span>Actualité</span></a>
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
            @yield('content')
        <!-- /main content -->

<!--        <div class="footer text-muted">-->
<!--            © 2016. <a href="{{ route('index') }}">{{Auth::user()->email}}</a> by <a href="{{ route('index') }}">ISI Team</a>-->
<!--        </div>-->
    </div>
    <!-- /page content -->


</div>
<!-- /page container -->

</body>

<!-- Core JS files -->
<script type="text/javascript" src="/assets/js/plugins/loaders/pace.min.js"></script>
<script type="text/javascript" src="/assets/js/lib/jquery-1.11.min.js"></script>

<script type="text/javascript" src="/assets/js/core/libraries/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/js/plugins/loaders/blockui.min.js"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
<script type="text/javascript" src="/assets/js/plugins/visualization/d3/d3.min.js"></script>
<script type="text/javascript" src="/assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
<script type="text/javascript" src="/assets/js/plugins/forms/styling/switchery.min.js"></script>
<script type="text/javascript" src="/assets/js/plugins/forms/styling/uniform.min.js"></script>
<script type="text/javascript" src="/assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
<script type="text/javascript" src="/assets/js/plugins/ui/moment/moment.min.js"></script>
<script type="text/javascript" src="/assets/js/plugins/pickers/daterangepicker.js"></script>

<!--<script type="text/javascript" src="/assets/js/core/app.js"></script>-->

<script type="text/javascript" src="/assets/js/plugins/ui/ripple.min.js"></script>
<script type="text/javascript" src="/scripts/angular.min.js"></script>
<script type="text/javascript" src="/scripts/angular-file-upload.min.js"></script>
<script type="text/javascript">
</script>
<script type="text/javascript" src="/scripts/toastr.js"></script>
<script type="text/javascript" src="/scripts/App/app.js"></script>
<script type="text/javascript" src="/assets/js/plugins/forms/validation/validate.min.js"></script>
<script type="text/javascript" src="/assets/js/plugins/visualization/d3/d3.min.js"></script>
<script type="text/javascript" src="/assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
<script type="text/javascript" src="/assets/js/plugins/forms/styling/switchery.min.js"></script>
<script type="text/javascript" src="/assets/js/plugins/forms/styling/uniform.min.js"></script>
<script type="text/javascript" src="/assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
<script type="text/javascript" src="/assets/js/plugins/ui/moment/moment.min.js"></script>
<script type="text/javascript" src="/assets/js/plugins/pickers/daterangepicker.js"></script>
<script type="text/javascript" src="/assets/js/plugins/forms/selects/select2.min.js"></script>
<script type="text/javascript" src="/assets/js/plugins/forms/styling/uniform.min.js"></script>
<script type="text/javascript" src="/assets/js/plugins/uploaders/fileinput.min.js"></script>
<script type="text/javascript" src="/assets/js/plugins/forms/validation/validate.min.js"></script>
<script type="text/javascript" src="/assets/js/plugins/pickers/daterangepicker.js"></script>
<script type="text/javascript" src="/assets/js/plugins/pickers/anytime.min.js"></script>
<script type="text/javascript" src="/assets/js/plugins/pickers/pickadate/picker.js"></script>
<script type="text/javascript" src="/assets/js/plugins/pickers/pickadate/picker.date.js"></script>
<script type="text/javascript" src="/assets/js/plugins/pickers/pickadate/picker.time.js"></script>
<script type="text/javascript" src="/assets/js/plugins/pickers/pickadate/legacy.js"></script>
<script type="text/javascript" src="/assets/js/plugins/notifications/bootbox.min.js"></script>
<script type="text/javascript" src="/assets/js/plugins/notifications/sweet_alert.min.js"></script>
<script type="text/javascript" src="/assets/js/core/app.js"></script>

<script type="text/javascript" src="/assets/js/pages/uploader_bootstrap.js"></script>

<script type="text/javascript" src="/assets/js/pages/picker_date.js"></script>
<script type="text/javascript" src="/assets/js/plugins/ui/ripple.min.js"></script>
<script type="text/javascript" src="../scripts/bootstrap-select.js"></script>
<script type="text/javascript" src="../scripts/angular-sanitize.min.js"></script>

<script type="text/javascript" src="/scripts/emoji.min.js"></script>


@yield('script')
<!--Layout Script End -->
<!-- /theme JS files -->
<script>

    $(window).load(function () {
        $(".commentIndicator").on("click",
            function (event) {
                id = event.target.id;
                $("#comment" + id).slideToggle(500);
                $("#comment" + id).addClass("active");

            }
        );
    });
    $(".comment").hide();
</script>
<script>
    $(function () {



        // Select2 select
        // ------------------------------

        // Basic
        $('.select').select2();


        //
        // Select with icons
        //

        // Format icon
        function iconFormat(icon) {
            var originalOption = icon.element;
            if (!icon.id) {
                return icon.text;
            }
            var $icon = "<i class='icon-" + $(icon.element).data('icon') + "'></i>" + icon.text;

            return $icon;
        }

        // Initialize with options
        $(".select-icons").select2({
            templateResult: iconFormat,
            minimumResultsForSearch: Infinity,
            templateSelection: iconFormat,
            escapeMarkup: function (m) {
                return m;
            }
        });


        // Styled form components
        // ------------------------------

        // Checkboxes, radios
        $(".styled").uniform({radioClass: 'choice'});

        // File input
        $(".file-styled").uniform({
            fileButtonClass: 'action btn bg-pink-400'
        });
        $("#selectTypeOffre").on("change", function () {
            $("#typeOffre").show();
            if (this.value == 0) {
                $("#titreFieldSet").text("au stage");
                $("#dStage").slideDown(400);
                $("#dEmploi").hide();
                $("#dFormation").hide();
            } else if (this.value == 1) {
                $("#titreFieldSet").text("à l'emploi");
                $("#dStage").hide();
                $("#dEmploi").slideDown(400);
                $("#dFormation").hide();
            } else {
                $("#titreFieldSet").text("au formation");
                $("#dStage").hide();
                $("#dEmploi").hide();
                $("#dFormation").slideDown(400);
            }
        });
        $("#typeOffre").hide();
        @if(isset($offre))
            $("#selectTypeOffre").change();
        @endif
    });
    function supprimerPublication(id) {
        swal({
                title: "Vous etes vraiment sue?",
                text: "vous ne pouvez pas recuperer cet article si vous la supprimer !",
                type: "error",
                showCancelButton: true,
                confirmButtonColor: "#EF5350",
                confirmButtonText: "Oui, Supprime la!",
                cancelButtonText: "Non, Annuler!",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function (isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        method: "POST",
                        url: '{{route('deletePublication')}}',
                        data: {"_id": id}
                    }).done(function (msg) {
                        $("#pub" + id).remove();


                    });
                    swal({
                        title: "Deleted!",
                        text: "Your imaginary file has been deleted.",
                        confirmButtonColor: "#66BB6A",
                        type: "success"
                    });

                } else {
                    swal({
                        title: "Cancelled",
                        text: "Your imaginary file is safe :)",
                        confirmButtonColor: "#2196F3",
                        type: "error"
                    });
                }

            });


    }

</script>
<script>
    if ($("#imageModificationOffre") != null) {
        $("#imageModificationOffre").fileinput({
            browseLabel: 'Browse',
            browseIcon: '<i class="icon-file-plus"></i>',
            uploadIcon: '<i class="icon-file-upload2"></i>',
            removeIcon: '<i class="icon-cross3"></i>',
            layoutTemplates: {
                icon: '<i class="icon-file-check"></i>'
            },

            'initialPreview': [
                @if(isset($offre) && $offre["typePublication"]==0)
            "<img src='/uploads/offres/stage{{$offre["image"]}}' class='file-preview-image' >"
                @elseif(isset($offre) && $offre["typePublication"]==1)
        "<img src='/uploads/offres/emploi{{$offre["image"]}}' class='file-preview-image' >"
                @elseif(isset($offre)&& $offre["typePublication"]==2)
        "<img src='/uploads/offres/formation{{$offre["image"]}}' class='file-preview-image' >"
                @endif
    ]

    });
    }

    if ($("#imageAjoutOffre") != null) {
        $("#imageAjoutOffre").fileinput({
            browseLabel: 'Browse',
            browseIcon: '<i class="icon-file-plus"></i>',
            uploadIcon: '<i class="icon-file-upload2"></i>',
            removeIcon: '<i class="icon-cross3"></i>',
            layoutTemplates: {
                icon: '<i class="icon-file-check"></i>'
            },
            initialCaption: "No file selected"
        });
    }

</script>

<script>
    $(function(){

        getCountUnseenMessages = function () {
            $.ajax({
                url: "{{route('getCountUnseenMessages')}}", type: "get", dataType: 'json', cache: false, async: false,
                success: function (result) {
                    console.log(result);
                    $("#nbrUnseenMessages").text(result);
                }, error: function (error) {
                    notificationFactory.error("Erreur lors du chargement du nombre de messages non lu !", "Erreur");
                }
            });

        }

        getCountUnseenMessages();
    });
</script>
</html>
