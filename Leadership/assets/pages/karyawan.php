
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    
    <title>Karyawan - Inventory Management System</title>
    
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
              
              <center><h1>KARYAWAN</h1></center>
              <center><h3>01 January 2019</h3>
              <button type="button" data-target="#modaltambah" data-toggle="modal" class="btn btn-outline btn-primary float-right"><i class="icon wb-plus" aria-hidden="true"></i> Tambah Data</button></center>
              
              <!-- Modal -->
              <div class="modal fade" id="modaltambah" aria-hidden="true" aria-labelledby="examplePositionCenter"
                            role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-simple modal-center">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                  <h4 class="modal-title" id="exampleModalTitle">Tambah Data Karyawan</h4>
                                </div>
                                <div class="modal-body">
                                <h4 class="example-title">ID Submit Karyawan</h4>
                                <input type="text" class="form-control" id="inputPlaceholder"  disabled placeholder="600006">
                                <h4 class="example-title">Nama Karyawan</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="Nama Karyawan">
                                <h4 class="example-title">Tanggal Masuk Karyawan</h4>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="icon wb-calendar" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" data-plugin="datepicker">
                                </div>
                                <h4 class="example-title">Gaji per Jam</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="Gaji per Jam">
                                <h4 class="example-title">Status Aktif Karyawan</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="Status Aktif Karyawan">
                                <h4 class="example-title">Nomor Telepon Karyawan</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="Nomor Telepon Karyawan">
                                
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                  <button type="button" class="btn btn-primary">Simpan</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- End Modal -->


                        <!-- Modal Edit -->
                          <div class="modal fade" id="modaledit" aria-hidden="true" aria-labelledby="examplePositionCenter"
                            role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-simple modal-center">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                  <h4 class="modal-title" id="exampleModalTitle">Edit Data Karyawan</h4>
                                </div>
                                <div class="modal-body">
                                <h4 class="example-title">ID Submit Karyawan</h4>
                                <input type="text" class="form-control" id="inputPlaceholder"  disabled>
                                <h4 class="example-title">Nama Karyawan</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="Nama Karyawan">
                                <h4 class="example-title">Tanggal Masuk Karyawan</h4>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="icon wb-calendar" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" data-plugin="datepicker">
                                </div>
                                <h4 class="example-title">Gaji per Jam</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="Gaji per Jam">
                                <h4 class="example-title">Status Aktif Karyawan</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="Status Aktif Karyawan">
                                <h4 class="example-title">Nomor Telepon Karyawan</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="Nomor Telepon Karyawan">
                                
                                
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

                                                  <!-- dummy1 -->
                                                  <div class="modal fade" id="dummy1" aria-hidden="true" aria-labelledby="examplePositionCenter"
                            role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-simple modal-center">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                  <h4 class="modal-title" id="exampleModalTitle">Edit Data Karyawan</h4>
                                </div>
                                <div class="modal-body">
                                <h4 class="example-title">ID Submit Karyawan</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="600001" disabled>
                                <h4 class="example-title">Nama Karyawan</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="Herman">
                                <h4 class="example-title">Tanggal Masuk Karyawan</h4>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="icon wb-calendar" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" data-plugin="datepicker" placeholder="01 July 2019">
                                </div>
                                <h4 class="example-title">Gaji per Jam</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="12000">
                                <h4 class="example-title">Status Aktif Karyawan</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="1">
                                <h4 class="example-title">Nomor Telepon Karyawan</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="08134554844">
                                
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                  <button type="button" class="btn btn-primary">Simpan</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- End Modal -->


                                                  <!-- dummy2 -->
                                                  <div class="modal fade" id="dummy2" aria-hidden="true" aria-labelledby="examplePositionCenter"
                            role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-simple modal-center">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                  <h4 class="modal-title" id="exampleModalTitle">Edit Data Karyawan</h4>
                                </div>
                                <div class="modal-body">
                                <h4 class="example-title">ID Submit Karyawan</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="600002"  disabled>
                                <h4 class="example-title">Nama Karyawan</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="Budi">
                                <h4 class="example-title">Tanggal Masuk Karyawan</h4>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="icon wb-calendar" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" data-plugin="datepicker" placeholder="01 July 2019">
                                </div>
                                <h4 class="example-title">Gaji per Jam</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="15000">
                                <h4 class="example-title">Status Aktif Karyawan</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="1">
                                <h4 class="example-title">Nomor Telepon Karyawan</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="081267382313">
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                  <button type="button" class="btn btn-primary">Simpan</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- End Modal -->


                                                  <!-- dummy3 -->
                                                  <div class="modal fade" id="dummy3" aria-hidden="true" aria-labelledby="examplePositionCenter"
                            role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-simple modal-center">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                  <h4 class="modal-title" id="exampleModalTitle">Edit Data Karyawan</h4>
                                </div>
                                <div class="modal-body">
                                <h4 class="example-title">ID Submit Karyawan</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="600003"  disabled>
                                <h4 class="example-title">Nama Karyawan</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="Kelvin">
                                <h4 class="example-title">Tanggal Masuk Karyawan</h4>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="icon wb-calendar" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" data-plugin="datepicker" placeholder="01 July 2019">
                                </div>
                                <h4 class="example-title">Gaji per Jam</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="15000">
                                <h4 class="example-title">Status Aktif Karyawan</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="1">
                                <h4 class="example-title">Nomor Telepon Karyawan</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="085743834237">
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                  <button type="button" class="btn btn-primary">Simpan</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- End Modal -->


                                                  <!-- dummy4 -->
                                                  <div class="modal fade" id="dummy4" aria-hidden="true" aria-labelledby="examplePositionCenter"
                            role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-simple modal-center">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                  <h4 class="modal-title" id="exampleModalTitle">Edit Data Karyawan</h4>
                                </div>
                                <div class="modal-body">
                                <h4 class="example-title">ID Submit Karyawan</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="600004" disabled>
                                <h4 class="example-title">Nama Karyawan</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="Ryan">
                                <h4 class="example-title">Tanggal Masuk Karyawan</h4>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="icon wb-calendar" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" data-plugin="datepicker" placeholder="01 July 2019">
                                </div>
                                <h4 class="example-title">Gaji per Jam</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="10000">
                                <h4 class="example-title">Status Aktif Karyawan</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="1">
                                <h4 class="example-title">Nomor Telepon Karyawan</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="085983746444">
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                  <button type="button" class="btn btn-primary">Simpan</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- End Modal -->

                                                  <!-- dummy5 -->
                                                  <div class="modal fade" id="dummy5" aria-hidden="true" aria-labelledby="examplePositionCenter"
                            role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-simple modal-center">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                  <h4 class="modal-title" id="exampleModalTitle">Edit Data Karyawan</h4>
                                </div>
                                <div class="modal-body">
                                <h4 class="example-title">ID Submit Karyawan</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="600005" disabled>
                                <h4 class="example-title">Nama Karyawan</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="Rubin">
                                <h4 class="example-title">Tanggal Masuk Karyawan</h4>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="icon wb-calendar" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" data-plugin="datepicker" placeholder="01 July 2019">
                                </div>
                                <h4 class="example-title">Gaji per Jam</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="10000">
                                <h4 class="example-title">Status Aktif Karyawan</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="1">
                                <h4 class="example-title">Nomor Telepon Karyawan</h4>
                                <input type="text" class="form-control" id="inputPlaceholder" placeholder="081273008887">
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                  <button type="button" class="btn btn-primary">Simpan</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- End Modal -->


                                                <!-- gaji 1 -->
                                                <div class="modal fade" id="gaji1" aria-hidden="true" aria-labelledby="examplePositionCenter"
                            role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-simple modal-center">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                  <h4 class="modal-title" id="exampleModalTitle">Gaji Karyawan</h4>
                                </div>
                                <div class="modal-body">
                                <div class="col-md-6">
                
                
                                <select class="form-control" data-plugin="select2" data-minimum-input-length="2">
                                    <option >Januari</option>
                                    <option >Februari</option>
                                    <option >Maret</option>
                                    <option >April</option>
                                    <option >Mei</option>
                                    <option >Juni</option>
                                    <option >Juli</option>
                                    <option >Agusutus</option>
                                    <option >September</option>
                                    <option >Oktober</option>
                                    <option >November</option>
                                    <option >Desember</option>
                                </select>
                                <select class="form-control" data-plugin="select2" data-minimum-input-length="2">
                                    <option >2019</option>
                                </select>
                            <br>
                                Total Jam Kerja : 20 <br>
                                Total Gaji Bulanan : 240000
                            
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

                                                <!-- gaji2 -->
                                                <div class="modal fade" id="gaji2" aria-hidden="true" aria-labelledby="examplePositionCenter"
                            role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-simple modal-center">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                  <h4 class="modal-title" id="exampleModalTitle">Gaji Karyawan</h4>
                                </div>
                                <div class="modal-body">
                                <div class="col-md-6">
                
                
                                  <select class="form-control" data-plugin="select2" data-minimum-input-length="2">
                                      <option >Januari</option>
                                      <option >Februari</option>
                                      <option >Maret</option>
                                      <option >April</option>
                                      <option >Mei</option>
                                      <option >Juni</option>
                                      <option >Juli</option>
                                      <option >Agusutus</option>
                                      <option >September</option>
                                      <option >Oktober</option>
                                      <option >November</option>
                                      <option >Desember</option>
                                  </select>
                                  <select class="form-control" data-plugin="select2" data-minimum-input-length="2">
                                      <option >2019</option>
                                  </select>
                              <br>
                                  Total Jam Kerja : 30 <br>
                                  Total Gaji Bulanan: 450000
                              
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


              <div class="example table-responsive">
                    <table class="table table-bordered" style="text-align:center;">
                      <thead>
                        <tr>
                          <th>ID Submit Karyawan</th>
                          <th>Nama Karyawan</th>
                          <th>Tanggal Masuk Karyawan</th>
                          <th>Gaji per Jam</th>
                          <th>Status Aktif Karyawan</th>
                          <th>No HP Karyawan</th>
                          <th>ID User Add</th>
                          <th class="text-nowrap">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          
                          <td>600001</td>
                          <td>Herman</td>
                          <td>01 July 2019</td>
                          <td>12000</td>
                          <td>1</td>
                          <td>08134554844</td>
                          <td>800001</td>
                          <td class="text-nowrap">
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" 
                              data-original-title="Edit" data-target="#dummy1" data-toggle="modal">
                              <i class="icon wb-wrench" aria-hidden="true"></i> EDIT
                            </button>
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                              data-original-title="Delete">
                              <i class="icon wb-close" aria-hidden="true"></i> DELETE
                            </button>
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-target="#gaji1" data-toggle="modal"
                              data-original-title="Gaji">
                               GAJI
                            </button>
                          </td>
                        </tr>
                        <tr>
                          
                          <td>600002</td>
                          <td>Budi</td>
                          <td>01 July 2019</td>
                          <td>15000</td>
                          <td>1</td>
                          <td>081267382313</td>
                          <td>800001</td>
                          <td class="text-nowrap">
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" 
                              data-original-title="Edit" data-target="#dummy2" data-toggle="modal">
                              <i class="icon wb-wrench" aria-hidden="true"></i> EDIT
                            </button>
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                              data-original-title="Delete">
                              <i class="icon wb-close" aria-hidden="true"></i> DELETE
                            </button>
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-target="#gaji2" data-toggle="modal"
                              data-original-title="Gaji">
                               GAJI
                            </button>
                          </td>
                        </tr>
                        <tr>
                          
                          <td>600003</td>
                          <td>Kelvin</td>
                          <td>01 July 2019</td>
                          <td>15000</td>
                          <td>1</td>
                          <td>085743834237</td>
                          <td>800001</td>
                          <td class="text-nowrap">
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" 
                              data-original-title="Edit" data-target="#dummy3" data-toggle="modal">
                              <i class="icon wb-wrench" aria-hidden="true"></i> EDIT
                            </button>
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                              data-original-title="Delete">
                              <i class="icon wb-close" aria-hidden="true"></i> DELETE
                            </button>
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                              data-original-title="Gaji">
                               GAJI
                            </button>
                          </td>
                        </tr>
                        <tr>
                          
                          <td>600004</td>
                          <td>Ryan</td>
                          <td>01 July 2019</td>
                          <td>10000</td>
                          <td>1</td>
                          <td>085983746444</td>
                          <td>800001</td>
                          <td class="text-nowrap">
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" 
                              data-original-title="Edit" data-target="#dummy4" data-toggle="modal">
                              <i class="icon wb-wrench" aria-hidden="true"></i> EDIT
                            </button>
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                              data-original-title="Delete">
                              <i class="icon wb-close" aria-hidden="true"></i> DELETE
                            </button>
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                              data-original-title="Gaji">
                               GAJI
                            </button>
                          </td>
                        </tr>
                        <tr>
                          
                          <td>600005</td>
                          <td>Rubin</td>
                          <td>01 July 2019</td>
                          <td>10000</td>
                          <td>1</td>
                          <td>081273008887</td>
                          <td>800001</td>
                          <td class="text-nowrap">
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" 
                              data-original-title="Edit" data-target="#dummy5" data-toggle="modal">
                              <i class="icon wb-wrench" aria-hidden="true"></i> EDIT
                            </button>
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                              data-original-title="Delete">
                              <i class="icon wb-close" aria-hidden="true"></i> DELETE
                            </button>
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                              data-original-title="Gaji">
                               GAJI
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
