
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    
    <title>Inventory Management System</title>
    
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/global/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/global/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="assets/css/site.min.css">
    
    <!-- Plugins -->
    <link rel="stylesheet" href="assets/global/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="assets/global/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="assets/global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="assets/global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="assets/global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="assets/global/vendor/flag-icon-css/flag-icon.css">
        <link rel="stylesheet" href="assets/assets/examples/css/pages/login-v3.css">
    
    <style>
    body{
  /* The image used */
  background-image: url("assets/images/bg1.jpg");

  /* Full height */
  height: 100%; 
  z-index:100;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
    </style>
    <!-- Fonts -->
    <link rel="stylesheet" href="assets/global/fonts/web-icons/web-icons.min.css">
    <link rel="stylesheet" href="assets/global/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    
    <!--[if lt IE 9]>
    <script src="assets/global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="assets/global/vendor/media-match/media.match.min.js"></script>
    <script src="assets/global/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="assets/global/vendor/breakpoints/breakpoints.js"></script>
    <script>
      Breakpoints();
    </script>
  </head>
  <body class="animsition page-login-v3 layout-full">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Page -->
    <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">>
      <div class="page-content vertical-align-middle animation-slide-top animation-duration-1">
        <div class="panel">
          <div class="panel-body">
            <div class="brand">
              <img class="brand-img" src=" assets//images/logo-colored.png" alt="...">
              <h2 class="brand-text font-size-18">Inventory Management System</h2>
            </div>
            <form method="post" action="#">
              <div class="form-group form-material floating" data-plugin="formMaterial">
                <input type="email" class="form-control" name="email" />
                <label class="floating-label">Email</label>
              </div>
              <div class="form-group form-material floating" data-plugin="formMaterial">
                <input type="password" class="form-control" name="password" />
                <label class="floating-label">Password</label>
              </div>
              <div class="form-group clearfix">
                <div class="checkbox-custom checkbox-inline checkbox-primary checkbox-lg float-left">
                  <input type="checkbox" id="inputCheckbox" name="remember">
                  <label for="inputCheckbox">Remember me</label>
                </div>
                
              </div>
              <a href="assets/pages/dashboard.php">
                <button type="button" class="btn btn-primary btn-block btn-lg mt-40">Sign in</button>
              </a>
            </form>
            
          </div>
        </div>

        <footer class="page-copyright page-copyright-inverse">
          <p>WEBSITE BY Creation Studio</p>
          <p>© 2018. All RIGHT RESERVED.</p>
          <div class="social">
            <a class="btn btn-icon btn-pure" href="javascript:void(0)">
            <i class="icon bd-twitter" aria-hidden="true"></i>
          </a>
            <a class="btn btn-icon btn-pure" href="javascript:void(0)">
            <i class="icon bd-facebook" aria-hidden="true"></i>
          </a>
            <a class="btn btn-icon btn-pure" href="javascript:void(0)">
            <i class="icon bd-google-plus" aria-hidden="true"></i>
          </a>
          </div>
        </footer>
      </div>
    </div>
    <!-- End Page -->


    <!-- Core  -->
    <script src="assets/global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="assets/global/vendor/jquery/jquery.js"></script>
    <script src="assets/global/vendor/popper-js/umd/popper.min.js"></script>
    <script src="assets/global/vendor/bootstrap/bootstrap.js"></script>
    <script src="assets/global/vendor/animsition/animsition.js"></script>
    <script src="assets/global/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="assets/global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="assets/global/vendor/asscrollable/jquery-asScrollable.js"></script>
    <script src="assets/global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
    
    <!-- Plugins -->
    <script src="assets/global/vendor/switchery/switchery.js"></script>
    <script src="assets/global/vendor/intro-js/intro.js"></script>
    <script src="assets/global/vendor/screenfull/screenfull.js"></script>
    <script src="assets/global/vendor/slidepanel/jquery-slidePanel.js"></script>
        <script src="assets/global/vendor/jquery-placeholder/jquery.placeholder.js"></script>
    
    <!-- Scripts -->
    <script src="assets/global/js/Component.js"></script>
    <script src="assets/global/js/Plugin.js"></script>
    <script src="assets/global/js/Base.js"></script>
    <script src="assets/global/js/Config.js"></script>
    
    <script src=" assets/js/Section/Menubar.js"></script>
    <script src=" assets/js/Section/GridMenu.js"></script>
    <script src=" assets/js/Section/Sidebar.js"></script>
    <script src=" assets/js/Section/PageAside.js"></script>
    <script src=" assets/js/Plugin/menu.js"></script>
    
    <script src="assets/global/js/config/colors.js"></script>
    <script src=" assets/js/config/tour.js"></script>
    <script>Config.set('assets', 'assets');</script>
    
    <!-- Page -->
    <script src=" assets/js/Site.js"></script>
    <script src="assets/global/js/Plugin/asscrollable.js"></script>
    <script src="assets/global/js/Plugin/slidepanel.js"></script>
    <script src="assets/global/js/Plugin/switchery.js"></script>
        <script src="assets/global/js/Plugin/jquery-placeholder.js"></script>
        <script src="assets/global/js/Plugin/material.js"></script>
    
    <script>
      (function(document, window, $){
        'use strict';
    
        var Site = window.Site;
        $(document).ready(function(){
          Site.run();
        });
      })(document, window, jQuery);
    </script>
  </body>
</html>