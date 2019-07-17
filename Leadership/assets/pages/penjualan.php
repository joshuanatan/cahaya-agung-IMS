
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    
    <title>Penjualan - Inventory Management System</title>
    
    <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
    <link rel="shortcut icon" href="../images/favicon.ico">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="../global/css/bootstrap.min.css">
    <link rel="stylesheet" href="../global/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="../css/site.min.css">
    
    <!-- Plugins -->
    <link rel="stylesheet" href="../global/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="../global/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="../global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="../global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="../global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="../global/vendor/flag-icon-css/flag-icon.css">
        <link rel="stylesheet" href="../global/vendor/chartist/chartist.css">
        <link rel="stylesheet" href="../global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
        <link rel="stylesheet" href="../global/vendor/aspieprogress/asPieProgress.css">
        <link rel="stylesheet" href="../global/vendor/jquery-selective/jquery-selective.css">
        <link rel="stylesheet" href="../global/vendor/bootstrap-datepicker/bootstrap-datepicker.css">
        <link rel="stylesheet" href="../global/vendor/asscrollable/asScrollable.css">
        <link rel="stylesheet" href="../examples/css/dashboard/team.css">
    
    
    <!-- Fonts -->
    <link rel="stylesheet" href="../global/fonts/web-icons/web-icons.min.css">
    <link rel="stylesheet" href="../global/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    
    <!--[if lt IE 9]>
    <script src="../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="../global/vendor/media-match/media.match.min.js"></script>
    <script src="../global/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="../global/vendor/breakpoints/breakpoints.js"></script>
    <script>
      Breakpoints();
    </script>
  </head>
  <body class="animsition dashboard">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <?php
      include('head.php');
      ?>
    <div class="site-menubar">
      <?php
        include('left.php');
        ?>
    


    <!-- Page -->
    <div class="page">
      <div class="page-content container-fluid">
        <div class="row" data-plugin="matchHeight" data-by-row="true">
          
          
          
          <div class="col-xxl-4">
            <div id="recentActivityWidget" class="card card-shadow card-lg pb-20" style="padding-left:10%;padding-right:10%;">
              
              <center><h1>PENJUALAN</h1></center>
              <center><h3>01 January 2019</h3>
              <button type="button" data-target="#modaltambah" data-toggle="modal" class="btn btn-outline btn-primary float-right"><i class="icon wb-plus" aria-hidden="true"></i> Jual</button></center>
              
              <!-- Modal Jual-->
              <div class="modal fade" id="modaltambah" aria-hidden="true" aria-labelledby="examplePositionCenter"
                            role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-simple modal-center">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                  <h4 class="modal-title" id="exampleModalTitle">Jual</h4>
                                </div>
                                <div class="modal-body">
                                <h4 class="example-title">ID Submit  Penjualan</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="90001" disabled>
                                <h4 class="example-title">Jumlah Item Terjual</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="Jumlah Item Terjual" >
                                <h4 class="example-title">Jumlah Uang Masuk</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="Jumlah Uang Masuk" >
                                
                                <br>
                                
                  <div class="example table-responsive">
                    <table class="table table-bordered" style="text-align:center;">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th>Nama Barang</th>
                          <th>Jumlah</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                          1
                          </div>              
                          </td>
                          <td>
                            <select class="form-control" data-plugin="select2" data-minimum-input-length="2" >
                              <option selected>Semen</option>
                              <option >Cat</option>
                              <option >Pasir</option>
                              </select>
                          </td>
                          <td>
                            <input type="text" class="form-control" id="inputPlaceholder" placeholder="60" >
                          </td>
                          
                          
                        </tr>
                        <tr>
                          
                        <td>
                        2              
                          </td>
                          <td>
                            <select class="form-control" data-plugin="select2" data-minimum-input-length="2" >
                              <option >Semen</option>
                              <option >Cat</option>
                              <option selected>Pasir</option>
                              </select>
                          </td>
                          <td>
                            <input type="text" class="form-control" id="inputPlaceholder" placeholder="40" >
                          </td>
                          
                          
                        </tr>
                        
                      </tbody>
                    </table>
                </div>
            
                                
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                  <button type="button" class="btn btn-primary">Simpan</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- End Modal -->

                          <!-- Modal edit -->
              <div class="modal fade" id="modaledit" aria-hidden="true" aria-labelledby="examplePositionCenter"
                            role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-simple modal-center">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                  <h4 class="modal-title" id="exampleModalTitle">Edit Penjualan</h4>
                                </div>
                                <div class="modal-body">
                                <div class="example table-responsive">
                    <table class="table table-bordered" style="text-align:center;">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th>Nama Barang</th>
                          <th>Jumlah</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                          1
                          </div>              
                          </td>
                          <td>
                            <select class="form-control" data-plugin="select2" data-minimum-input-length="2" >
                              <option selected>Semen</option>
                              <option >Cat</option>
                              <option >Pasir</option>
                              </select>
                          </td>
                          <td>
                            <input type="text" class="form-control" id="inputPlaceholder" placeholder="60" >
                          </td>
                          
                          
                        </tr>
                        <tr>
                          
                        <td>
                        2              
                          </td>
                          <td>
                            <select class="form-control" data-plugin="select2" data-minimum-input-length="2" >
                              <option >Semen</option>
                              <option >Cat</option>
                              <option selected>Pasir</option>
                              </select>
                          </td>
                          <td>
                            <input type="text" class="form-control" id="inputPlaceholder" placeholder="40" >
                          </td>
                          
                          
                        </tr>
                        
                      </tbody>
                    </table>
                </div></div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                  <button type="button" class="btn btn-primary">Simpan</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- End Modal -->


                            <!-- Modal detail -->
                            <div class="modal fade" id="modaldetail" aria-hidden="true" aria-labelledby="examplePositionCenter"
                            role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-simple modal-center">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                  <h4 class="modal-title" id="exampleModalTitle">Detail Penjualan</h4>
                                </div>
                                <div class="modal-body">
                                <div class="example table-responsive">
                    <table class="table table-bordered" style="text-align:center;">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th>Nama Barang</th>
                          <th>Jumlah</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                          1
                          </div>              
                          </td>
                          <td>
                            <select class="form-control" data-plugin="select2" data-minimum-input-length="2" disabled >
                              <option selected>Semen</option>
                              <option >Cat</option>
                              <option >Pasir</option>
                              </select>
                          </td>
                          <td>
                            <input type="text" class="form-control" id="inputPlaceholder" placeholder="60" disabled>
                          </td>
                          
                          
                        </tr>
                        <tr>
                          
                        <td>
                        2              
                          </td>
                          <td>
                            <select class="form-control" data-plugin="select2" data-minimum-input-length="2" disabled>
                              <option >Semen</option>
                              <option >Cat</option>
                              <option selected>Pasir</option>
                              </select>
                          </td>
                          <td>
                            <input type="text" class="form-control" id="inputPlaceholder" placeholder="40" disabled>
                          </td>
                          
                          
                        </tr>
                        
                      </tbody>
                    </table>
                </div></div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                  <button type="button" class="btn btn-primary">Simpan</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- End Modal -->
                          


              <br>
              
              <div class="example table-responsive">
                    <table class="table table-bordered" style="text-align:center;">
                      <thead>
                        <tr>
                          <th>ID Submit Penjualan</th>
                          <th>Tanggal Penjualan</th>
                          <th>Jumlah Item Terjual</th>
                          <th>Jumlah Uang Masuk</th>
                          <th>ID User Add</th>
                          <th class="text-nowrap">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          
                          <td>500001</td>
                          <td>01 July 2019</td>
                          <td>101</td>
                          <td>5000000</td>
                          <td>800001</td>
                          <td class="text-nowrap">
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" 
                              data-original-title="Edit" data-target="#modaledit" data-toggle="modal">
                              <i class="icon wb-wrench" aria-hidden="true"></i> EDIT
                            </button>
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                              data-original-title="Delete">
                              <i class="icon wb-close" aria-hidden="true"></i> DELETE
                            </button>
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-target="#modaldetail" data-toggle="modal"
                              data-original-title="Detail">
                              DETAIL
                            </button>
                          </td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
            </div>
          </div>
          <!-- End Recent Activity -->
          <!-- End Second Row -->
        </div>
      </div>
    </div>
    <!-- End Page -->



    <!-- Footer -->
    <footer class="site-footer">
      <div class="site-footer-legal">© 2018 <a href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">Remark</a></div>
      <div class="site-footer-right">
        Crafted with <i class="red-600 wb wb-heart"></i> by <a href="https://themeforest.net/user/creation-studio">Creation Studio</a>
      </div>
    </footer>
    <!-- Core  -->
    <script src="../global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="../global/vendor/jquery/jquery.js"></script>
    <script src="../global/vendor/popper-js/umd/popper.min.js"></script>
    <script src="../global/vendor/bootstrap/bootstrap.js"></script>
    <script src="../global/vendor/animsition/animsition.js"></script>
    <script src="../global/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="../global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="../global/vendor/asscrollable/jquery-asScrollable.js"></script>
    <script src="../global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
    
    <!-- Plugins -->
    <script src="../global/vendor/switchery/switchery.js"></script>
    <script src="../global/vendor/intro-js/intro.js"></script>
    <script src="../global/vendor/screenfull/screenfull.js"></script>
    <script src="../global/vendor/slidepanel/jquery-slidePanel.js"></script>
        <script src="../global/vendor/chartist/chartist.js"></script>
        <script src="../global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js"></script>
        <script src="../global/vendor/aspieprogress/jquery-asPieProgress.js"></script>
        <script src="../global/vendor/matchheight/jquery.matchHeight-min.js"></script>
        <script src="../global/vendor/jquery-selective/jquery-selective.min.js"></script>
        <script src="../global/vendor/bootstrap-datepicker/bootstrap-datepicker.js"></script>
    
    <!-- Scripts -->
    <script src="../global/js/Component.js"></script>
    <script src="../global/js/Plugin.js"></script>
    <script src="../global/js/Base.js"></script>
    <script src="../global/js/Config.js"></script>
    
    <script src="../js/Section/Menubar.js"></script>
    <script src="../js/Section/GridMenu.js"></script>
    <script src="../js/Section/Sidebar.js"></script>
    <script src="../js/Section/PageAside.js"></script>
    <script src="../js/Plugin/menu.js"></script>
    
    <script src="../global/js/config/colors.js"></script>
    <script src="../js/config/tour.js"></script>
    <script>Config.set('assets', '../../assets');</script>
    
    <!-- Page -->
    <script src="../js/Site.js"></script>
    <script src="../global/js/Plugin/asscrollable.js"></script>
    <script src="../global/js/Plugin/slidepanel.js"></script>
    <script src="../global/js/Plugin/switchery.js"></script>
        <script src="../global/js/Plugin/matchheight.js"></script>
        <script src="../global/js/Plugin/aspieprogress.js"></script>
        <script src="../global/js/Plugin/bootstrap-datepicker.js"></script>
        <script src="../global/js/Plugin/asscrollable.js"></script>
    
        <script src="../examples/js/dashboard/team.js"></script>
  </body>
</html>