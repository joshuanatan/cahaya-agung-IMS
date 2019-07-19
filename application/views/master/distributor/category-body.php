<div class="panel-body col-lg-12">
    <div class="row">
        <div class="col-md-6">
            <div class="mb-15">
                <button class = "btn btn-primary btn-outline btn-sm" data-toggle = "modal" data-target = "#tambahabsen">TAMBAH DISTRIBUTOR</button>
            </div>
        </div>
    </div>
    <table class="table table-bordered table-hover table-striped w-full" cellspacing="0" data-plugin = "dataTable">
        <thead>
            <tr>
                <th>ID Submit Distributor</th>
                <th>Nama Distributor</th>
                <th>Alamat Distributor</th>
                <th>No Telepon Distributor</th>
                <th>Nama PIC</th>
                <th>Kontak PIC</th>
                <th>Status Aktif Distributor</th>
                <th>Tanggal Tambah Distributor</th>
                <th>ID User Add</th>
                <th class="text-nowrap">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
 
<div class="modal fade" id="tambahabsen" aria-hidden="true" aria-labelledby="examplePositionCenter" role="dialog" >
    <div class="modal-dialog modal-simple modal-center modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="exampleModalTitle">Tambah Data Distributor</h4>
            </div>
            <div class="modal-body">
            <form action="<?php echo base_url(); ?>master/distributor/insert" method="post">
                <h4 class="example-title">ID Submit Distributor</h4>
                <input type="text" class="form-control" id="inputPlaceholder"  disabled placeholder="700004">
                <h4 class="example-title">Nama Distributor</h4>
                <input type="text" class="form-control" id="inputPlaceholder" placeholder="Nama Distributor" name="nama_distributor">
                <h4 class="example-title">Alamat Distributor</h4>
                <input type="text" class="form-control" id="inputPlaceholder" placeholder="Alamat Distributor" name="alamat_distributor">
                <h4 class="example-title">Nomor Telepon Distributor</h4>
                <input type="text" class="form-control" id="inputPlaceholder" placeholder="Nomor Telepon Distributor" name="notelp_distributor">
                <h4 class="example-title">Nama PIC</h4>
                <input type="text" class="form-control" id="inputPlaceholder" placeholder="Nama PIC" name="nama_pic">
                <h4 class="example-title">Kontak PIC</h4>
                <input type="text" class="form-control" id="inputPlaceholder" placeholder="Kontak PIC" name="nohp_pic">
                <h4 class="example-title">Tanggal Masuk Distributor</h4>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="icon wb-calendar" aria-hidden="true"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" data-plugin="datepicker" name="tgl_tambah_distributor">
                </div>
                
                
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    
                </div>
            </form>
        </div>
    </div>
</div>