<div class="panel-body col-lg-12">
    <div class="row">
        <div class="col-md-6">
            <div class="mb-15">
                <button class = "btn btn-primary btn-outline btn-sm" data-toggle = "modal" data-target = "#tambahabsen">TAMBAH KARYAWAN</button>
            </div>
        </div>
    </div>
    <table class="table table-bordered table-hover table-striped w-full" cellspacing="0" data-plugin = "dataTable">
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
                <h4 class="modal-title" id="exampleModalTitle">Tambah Data Karyawan</h4>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url(); ?>master/karyawan/insert" method="post">
                    <h4 class="example-title">ID Submit Karyawan</h4>
                    <input type="text" class="form-control" id="inputPlaceholder"  disabled placeholder="600006">
                    <h4 class="example-title">Nama Karyawan</h4>
                    <input type="text" class="form-control" id="inputPlaceholder" placeholder="Nama Karyawan" name="nama_karyawan">
                    <h4 class="example-title">Tanggal Masuk Karyawan</h4>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="icon wb-calendar" aria-hidden="true"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" data-plugin="datepicker" name="tgl_masuk_karyawan">
                    </div>
                    <h4 class="example-title">Gaji per Jam</h4>
                    <input type="text" class="form-control" id="inputPlaceholder" placeholder="Gaji per Jam" name="gaji_perjam">
                    <h4 class="example-title">Nomor Telepon Karyawan</h4>
                    <input type="text" class="form-control" id="inputPlaceholder" placeholder="Nomor Telepon Karyawan" name="nohp_karyawan">
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    
                </div>
            </form>
        </div>
    </div>
</div>