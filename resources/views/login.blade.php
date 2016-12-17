<!DOCTYPE html>
<html class="no-js">

<!-- Mirrored from bentkwek.com/items/preview/wrapkit/1.2/page-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 May 2016 14:02:43 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="initial-scale=1,minimum-scale=1,maximum-scale=1,width=device-width,height=device-height,target-densitydpi=device-dpi,user-scalable=yes">

  <title>FSSM Socila Network</title>


  <!-- favicon.ico and apple-touch-icon.png -->
  <link rel="apple-touch-icon" sizes="57x57" href="images/favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="images/favicons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="images/favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="images/favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="images/favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="images/favicons/apple-touch-icon-152x152.png">
  <link rel="icon" type="image/png" href="images/favicons/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="images/favicons/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="images/favicons/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="images/favicons/manifest.json">
  <meta name="msapplication-TileColor" content="#2d89ef">
  <meta name="msapplication-TileImage" content="images/favicons/mstile-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,700,600,300" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="styles/bootstrap.css">

  <link rel="stylesheet" href="styles/dependencies.css">

  <link rel="stylesheet" href="styles/wrapkit.css">

  <link rel="stylesheet" href="styles/pages.css">
</head>
<body class="bg-grd-blue">
  <!--[if lt IE 9]>
  <div class="col-md-6"></div>
  <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

  <main class="signin-wrapper">
    <div class="tab-content">
      <p class="text-center p-4x">
        {{--<img src="images/logo/brand-text-color.png" alt="wrapkit" height="28px">--}}
      </p>
      <div class="tab-pane fade in active" id="signin">
        <form id="signinForm" action="{{ route('signin') }}" role="form" method="post">
          <p class="lead">Se Connecter à votre compte</p>
          <div class="form-group">
            <div class="input-group input-group-in">
              <span class="input-group-addon"><i class="icon-user"></i></span>
              <input name="email" id="username" class="form-control" placeholder="Email">
            </div>
          </div><!-- /.form-group -->
          <div class="form-group">
            <div class="input-group input-group-in">
              <span class="input-group-addon"><i class="icon-lock"></i></span>
              <input type="password" name="password" id="password" class="form-control" placeholder="Mot de passe">
            </div>
          </div><!-- /.form-group -->
          <div class="form-group clearfix">
            <div class="animated-hue pull-right">
              <button id="btnSignin" type="submit" class="btn btn-primary">se connecter</button>
            </div>
            <div class="nice-checkbox nice-checkbox-inline">
              <input type="checkbox" name="keepSignin" id="keepSignin" checked="checked">
              <label for="keepSignin">Me rappeler</label>
            </div>
          </div><!-- /.form-group -->

          <hr>

          <p><a href="#recoverAccount" data-toggle="modal">Porblème de connexion?</a></p>
          <p class="lead">Se connecter avec un autre compte?</p>
          <div class="signin-alt">
            <a href="#" class="btn btn-sm btn-success"><i class="fa fa-facebook"></i></a>
            <a href="#" class="btn btn-sm btn-info"><i class="fa fa-twitter"></i></a>
            <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="btn btn-sm btn-default"><i class="fa fa-github"></i></a>
          </div>

          <hr>

          <p>Vous n'avez pas encore de comte? <a href="#signup" data-toggle="tab">Inscrivez-vous</a></p>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form><!-- /#signinForm -->
      </div><!-- /.tab-pane -->

      <div class="tab-pane fade" id="signup">
        <form id="signupForm" action="{{route('postSignUp')}}" role="form" method="post">
          <p class="lead">Créer un nouveau compte</p>
          <p class="text-muted"><strong></strong></p>
          <div class="form-group has-feedback">
            <div class="input-group input-group-in">
              <span class="input-group-addon"><i class="icon-tag"></i></span>
              <input name="fullName" id="fullName" class="form-control" placeholder="Nom et prénom">
              <span class="form-control-feedback"></span>
            </div>
          </div><!-- /.form-group -->
          <div class="form-group has-feedback">
            <div class="input-group input-group-in">
              <span class="input-group-addon"><i class="icon-key"></i></span>
              <input type="password" name="password" id="password" class="form-control" placeholder="Mot de passe (6 caractères minimum)">
              <span class="form-control-feedback"></span>
            </div>
          </div><!-- /.form-group -->
          <div class="form-group has-feedback">
            <div class="input-group input-group-in">
              <span class="input-group-addon"><i class="icon-check"></i></span>
              <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Confirmer mot de passe">
              <span class="form-control-feedback"></span>
            </div>
          </div><!-- /.form-group -->

          <div class="form-group has-feedback">
            <div class="input-group input-group-in">
              <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
              <input type="email" name="email" id="email" class="form-control" placeholder="Email">
              <span class="form-control-feedback"></span>
            </div>
          </div><!-- /.form-group -->
          <div class="form-group has-feedback">
            <div class="input-group input-group-in">
              <span class="input-group-addon"><i class="icon-direction"></i></span>
              <input name="address" id="address" class="form-control" placeholder="Address">
              <span class="form-control-feedback"></span>
            </div>
              <br>
              <div class="form-group has-feedback">
                  <div class="input-group input-group-in">
                      <span class="input-group-addon"><i class="kit-avatar-128"></i></span>
                      <input type="file" class="file-styled-primary" id="photo" name="photo">
                      <span class="form-control-feedback"></span>
                  </div>
          </div>
              <!-- /.form-group -->

          <div class="form-group">
            <label class="control-label" style="margin-right:15px">Sexe</label>
            <div class="nice-radio nice-radio-inline">
              <input type="radio" name="gender" id="genderMale" value="m" checked="checked">
              <label for="genderMale">Masculin</label>
            </div><!-- /.radio -->
            <div class="nice-radio nice-radio-inline">
              <input type="radio" name="gender" id="genderFemale" value="f">
              <label for="genderFemale">Fiminin</label>
            </div><!-- /.radio -->
          </div><!-- /.form-group -->

          <hr>


          <div class="form-group animated-hue clearfix">
            <div class="pull-right">
              <button type="submit" class="btn btn-primary">Créer compte</button>
            </div>
            <div class="pull-left">
              <a href="#signin" class="btn btn-default" data-toggle="tab">Se connecter</a>
            </div>
          </div><!-- /.form-group -->
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form><!-- /#signupForm -->

        <hr>

        <p>By creating an account you agree to the <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a></p>
      </div><!-- /.tab-pane -->
    </div><!-- /.tab-content -->
  </main><!--/#wrapper-->
  <p class="signin-cr text-light">&copy; 2016 ISI Team.</p>


  <!-- Modal Recover -->
  <div class="modal fade" id="recoverAccount" tabindex="-1" role="dialog" aria-labelledby="recoverAccountLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="recoverForm" action="http://bentkwek.com/items/preview/wrapkit/1.2/index.html">
          <div class="modal-header">
            <h4 class="modal-title" id="recoverAccountLabel">Réinitialiser le mot de passe</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <div class="input-group input-group-in">
                <span class="input-group-addon"><i class="fa fa-envelope-o text-muted"></i></span>
                <input type="email" name="recoverEmail" id="recoverEmail" class="form-control" placeholder="Saisir votre adresse Email">
              </div>
            </div><!-- /.form-group -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            <button type="submit" class="btn btn-primary">Envoyer</button>
          </div>
        </form><!-- /#recoverForm -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /#recoverAccount -->


  <!-- VENDORS : jQuery & Bootstrap -->
  <script src="scripts/vendor.js"></script>
  <!-- END VENDORS -->

  <!-- DEPENDENCIES : Required plugins -->
  <script src="scripts/dependencies.js"></script>
  <!-- END DEPENDENCIES -->


  <!-- PLUGIN SETUPS: vendors & dependencies setups -->
  <script src="scripts/plugin-setups.js"></script>
  <!-- END PLUGIN SETUPS -->



</body>

<!-- Mirrored from bentkwek.com/items/preview/wrapkit/1.2/page-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 May 2016 14:02:43 GMT -->
</html>