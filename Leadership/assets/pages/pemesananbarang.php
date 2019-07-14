
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    
    <title>Pemesanan - Inventory Management System</title>
    
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
              
              <center><h1>PEMESANAN</h1></center>
              <center><h3>01 January 2019</h3>
              <button type="button" data-target="#modaltambah" data-toggle="modal" class="btn btn-outline btn-primary float-right"><i class="icon wb-plus" aria-hidden="true"></i> Pesanan</button></center>
              
              <!-- Modal -->
              <div class="modal fade" id="modaltambah" aria-hidden="true" aria-labelledby="examplePositionCenter"
                            role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-simple modal-center">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                  <h4 class="modal-title" id="exampleModalTitle">Pesanan</h4>
                                </div>
                                <div class="modal-body">
                                <h4 class="example-title">ID Submit  Pemesanan</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="500003"  disabled>
                                <h4 class="example-title">Nama Distributor</h4>
                                <select class="form-control" data-plugin="select2" data-minimum-input-length="2">
                                    <option >Distributor Hezaar</option>
                                    <option >Distributor Verdy</option>
                                    <option >Distributor Hiber</option>
                                </select>
                                <h4 class="example-title">Tanggal Masuk Pemesanan</h4>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="icon wb-calendar" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" data-plugin="datepicker">
                                </div>    
                                <br>
                                Jumlah
                                <select class="form-control col-md-2" data-plugin="select2" data-minimum-input-length="2">
                                  <option >1</option>
                                  <option >2</option>
                                  <option >3</option>
                                  <option >4</option>
                                  <option >5</option>
                                  <option >6</option>
                                  <option >7</option>
                                  <option >8</option>
                                  <option >9</option>
                                  <option >10</option>
                                  <option >11</option>
                                  <option >12</option>
                                  <option >13</option>
                                  <option >14</option>
                                  <option >15</option>
                                  <option >16</option>
                                  <option >17</option>
                                  <option >18</option>
                                  <option >19</option>
                                  <option >20</option>
                                </select>

                                <div class="example table-responsive">
                    <table class="table table-bordered" style="text-align:center;">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th>Nama Barang</th>
                          <th>Jumlah</th>
                          <th>Harga</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                          <div class="checkbox-custom checkbox-primary">
                              <input type="checkbox" id="inputUnchecked"/>
                              <label for="inputUnchecked"></label>
                          </div>              
                          </td>
                          <td>
                            <select class="form-control" data-plugin="select2" data-minimum-input-length="2">
                              <option >Semen</option>
                              <option >Cat</option>
                              <option >Pasir</option>
                              </select>
                          </td>
                          <td>
                            <input type="text" class="form-control" id="inputPlaceholder" placeholder="Jumlah Barang">
                          </td>
                          <td>1500000</td>
                          
                        </tr>
                        <tr>
                          
                        <td>
                          <div class="checkbox-custom checkbox-primary">
                              <input type="checkbox" id="inputUnchecked"/>
                              <label for="inputUnchecked"></label>
                          </div>              
                          </td>
                          <td>
                            <select class="form-control" data-plugin="select2" data-minimum-input-length="2">
                              <option >Semen</option>
                              <option >Cat</option>
                              <option >Pasir</option>
                              </select>
                          </td>
                          <td>
                            <input type="text" class="form-control" id="inputPlaceholder" placeholder="Jumlah Barang">
                          </td>
                          <td>1000000</td>
                          
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

                          <!-- dummydetail1 -->
                          <div class="modal fade" id="dummyd1" aria-hidden="true" aria-labelledby="examplePositionCenter"
                            role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-simple modal-center">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                  <h4 class="modal-title" id="exampleModalTitle">Pesanan</h4>
                                </div>
                                <div class="modal-body">
                                <h4 class="example-title">ID Submit  Pemesanan</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="500003"  disabled>
                                <h4 class="example-title">Nama Distributor</h4>
                                <select class="form-control" data-plugin="select2" data-minimum-input-length="2" disabled>
                                    <option selected>Distributor Hezaar</option>
                                    <option >Distributor Verdy</option>
                                    <option >Distributor Hiber</option>
                                </select>
                                <h4 class="example-title">Tanggal Masuk Pemesanan</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="01 July 2019"  disabled>
                                <br>
                                
                                <div class="example table-responsive">
                    <table class="table table-bordered" style="text-align:center;">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th>Nama Barang</th>
                          <th>Jumlah</th>
                          <th>Harga</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                          1
                          </div>              
                          </td>
                          <td>
                            <select class="form-control" data-plugin="select2" data-minimum-input-length="2" disabled>
                              <option selected>Semen</option>
                              <option >Cat</option>
                              <option >Pasir</option>
                              </select>
                          </td>
                          <td>
                            <input type="text" class="form-control" id="inputPlaceholder" placeholder="20" disabled>
                          </td>
                          <td>1500000</td>
                          
                        </tr>
                        <tr>
                          
                        <td>
                          2
                          </div>              
                          </td>
                          <td>
                            <select class="form-control" data-plugin="select2" data-minimum-input-length="2" disabled>
                              <option >Semen</option>
                              <option selected>Cat</option>
                              <option >Pasir</option>
                              </select>
                          </td>
                          <td>
                            <input type="text" class="form-control" id="inputPlaceholder" placeholder="10" disabled>
                          </td>
                          <td>1000000</td>
                          
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


                          <!-- dummydetail2 -->
                          <div class="modal fade" id="dummyd2" aria-hidden="true" aria-labelledby="examplePositionCenter"
                            role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-simple modal-center">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                  <h4 class="modal-title" id="exampleModalTitle">Pesanan</h4>
                                </div>
                                <div class="modal-body">
                                <h4 class="example-title">ID Submit  Pemesanan</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="500003"  disabled>
                                <h4 class="example-title">Nama Distributor</h4>
                                <select class="form-control" data-plugin="select2" data-minimum-input-length="2" disabled>
                                    <option >Distributor Hezaar</option>
                                    <option selected>Distributor Verdy</option>
                                    <option >Distributor Hiber</option>
                                </select>
                                <h4 class="example-title">Tanggal Masuk Pemesanan</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="01 July 2019"  disabled>
                                <br>
                                
                                <div class="example table-responsive">
                    <table class="table table-bordered" style="text-align:center;">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th>Nama Barang</th>
                          <th>Jumlah</th>
                          <th>Harga</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                          1
                          </div>              
                          </td>
                          <td>
                            <select class="form-control" data-plugin="select2" data-minimum-input-length="2" disabled>
                              <option selected>Semen</option>
                              <option >Cat</option>
                              <option >Pasir</option>
                              </select>
                          </td>
                          <td>
                            <input type="text" class="form-control" id="inputPlaceholder" placeholder="60" disabled>
                          </td>
                          <td>6520000</td>
                          
                        </tr>
                        <tr>
                          
                        <td>
                          2
                          </div>              
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
                          <td>3300000</td>
                          
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


                          <!-- dummyedit1 -->
                          <div class="modal fade" id="dummye1" aria-hidden="true" aria-labelledby="examplePositionCenter"
                            role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-simple modal-center">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                  <h4 class="modal-title" id="exampleModalTitle">Pesanan</h4>
                                </div>
                                <div class="modal-body">
                                <h4 class="example-title">ID Submit  Pemesanan</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="500003"  >
                                <h4 class="example-title">Nama Distributor</h4>
                                <select class="form-control" data-plugin="select2" data-minimum-input-length="2" >
                                    <option selected>Distributor Hezaar</option>
                                    <option >Distributor Verdy</option>
                                    <option >Distributor Hiber</option>
                                </select>
                                <h4 class="example-title">Tanggal Masuk Pemesanan</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="01 July 2019" disabled>
                                <br>
                                
                                <div class="example table-responsive">
                    <table class="table table-bordered" style="text-align:center;">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th>Nama Barang</th>
                          <th>Jumlah</th>
                          <th>Harga</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                          <div class="checkbox-custom checkbox-primary">
                              <input type="checkbox" id="inputUnchecked"/>
                              <label for="inputUnchecked"></label>
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
                            <input type="text" class="form-control" id="inputPlaceholder" placeholder="20" >
                          </td>
                          <td>1500000</td>
                          
                        </tr>
                        <tr>
                          
                        <td>
                        <div class="checkbox-custom checkbox-primary">
                              <input type="checkbox" id="inputUnchecked" checked/>
                              <label for="inputUnchecked"></label>
                          </div>              
                          </td>
                          <td>
                            <select class="form-control" data-plugin="select2" data-minimum-input-length="2" >
                              <option >Semen</option>
                              <option selected>Cat</option>
                              <option >Pasir</option>
                              </select>
                          </td>
                          <td>
                            <input type="text" class="form-control" id="inputPlaceholder" placeholder="10" >
                          </td>
                          <td>1000000</td>
                          
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

                           <!-- dummyedit2 -->
                           <div class="modal fade" id="dummye2" aria-hidden="true" aria-labelledby="examplePositionCenter"
                            role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-simple modal-center">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                  <h4 class="modal-title" id="exampleModalTitle">Pesanan</h4>
                                </div>
                                <div class="modal-body">
                                <h4 class="example-title">ID Submit  Pemesanan</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="500003"  disabled>
                                <h4 class="example-title">Nama Distributor</h4>
                                <select class="form-control" data-plugin="select2" data-minimum-input-length="2" disabled>
                                    <option >Distributor Hezaar</option>
                                    <option selected>Distributor Verdy</option>
                                    <option >Distributor Hiber</option>
                                </select>
                                <h4 class="example-title">Tanggal Masuk Pemesanan</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="01 July 2019"  disabled>
                                <br>
                                
                                <div class="example table-responsive">
                    <table class="table table-bordered" style="text-align:center;">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th>Nama Barang</th>
                          <th>Jumlah</th>
                          <th>Harga</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                          <div class="checkbox-custom checkbox-primary">
                              <input type="checkbox" id="inputUnchecked" checked/>
                              <label for="inputUnchecked"></label>
                          </div>
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
                          <td>6520000</td>
                          
                        </tr>
                        <tr>
                          
                        <td>
                        <div class="checkbox-custom checkbox-primary">
                              <input type="checkbox" id="inputUnchecked" checked/>
                              <label for="inputUnchecked"></label>
                          </div>
                          </div>              
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
                          <td>3300000</td>
                          
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


              <br>
              
              <div class="example table-responsive">
                    <table class="table table-bordered" style="text-align:center;">
                      <thead>
                        <tr>
                          <th>ID Submit Pemesanan</th>
                          <th>ID Submit Distributor</th>
                          <th>Tanggal Pemesanan</th>
                          <th>Status Aktif Pemesanan</th>
                          <th>Pesanan Selesai</th>
                          <th>ID User Add</th>
                          <th class="text-nowrap">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          
                          <td>500001</td>
                          <td>700001</td>
                          <td>01 July 2019</td>
                          <td>1</td>
                          <td>Belum</td>
                          <td>800001</td>
                          <td class="text-nowrap">
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" 
                              data-original-title="Edit" data-target="#dummye1" data-toggle="modal">
                              <i class="icon wb-wrench" aria-hidden="true"></i> EDIT
                            </button>
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                              data-original-title="Delete">
                              <i class="icon wb-close" aria-hidden="true"></i> DELETE
                            </button>
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-target="#dummyd1" data-toggle="modal"
                              data-original-title="Detail">
                              DETAIL
                            </button>
                          </td>
                        </tr>
                        <tr>
                          
                          <td>500002</td>
                          <td>700002</td>
                          <td>01 July 2019</td>
                          <td>1</td>
                          <td>Belum</td>
                          <td>800001</td>
                          <td class="text-nowrap">
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" 
                              data-original-title="Edit" data-target="#dummye2" data-toggle="modal">
                              <i class="icon wb-wrench" aria-hidden="true"></i> EDIT
                            </button>
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                              data-original-title="Delete">
                              <i class="icon wb-close" aria-hidden="true"></i> DELETE
                            </button>
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-target="#dummyd2" data-toggle="modal"
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
