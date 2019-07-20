<div class="panel-body col-lg-12">
    <div class="row">
        <div class="col-md-6">
            <div class="mb-15">
                <button class = "btn btn-primary btn-outline btn-sm" data-toggle = "modal" data-target = "#tambahabsen">TAMBAH ABSEN</button>
            </div>
        </div>
    </div>
    <table class="table table-bordered table-hover table-striped w-full" cellspacing="0" data-plugin = "dataTable">
        <thead>
            <th>Tanggal Absensi</th>
            <th>Jumlah Karyawan Hadir</th>
            <th>Action</th>
        </thead>
        <tbody>
            
        </tbody>
    </table>
</div>
 
        
<div class="modal fade" id="tambahabsen" aria-hidden="true" aria-labelledby="examplePositionCenter" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple modal-center">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="exampleModalTitle">Absen</h4>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url(); ?>sistem/absensi/insert" method="post">
                    <h4 class="example-title">Tanggal</h4>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="icon wb-calendar" aria-hidden="true"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" data-plugin="datepicker" id = "1" value = "<?php echo date("Y-m-d");?>">
                    </div>
                    <div class="checkbox-custom checkbox-primary">
                        <input type="checkbox" id="inputUnchecked" value="1" name = "id_submit_karyawan[]" />
                        <label for="inputUnchecked">Herman</label>
                    </div>
                    <div class="checkbox-custom checkbox-primary">
                        <input type="checkbox" id="inputUnchecked2" value="2" name = "id_submit_karyawan[]" />
                        <label for="inputUnchecked2">Budi</label>
                    </div>
                    <div class="checkbox-custom checkbox-primary">
                        <input type="checkbox" id="inputUnchecked3" value="3" name = "id_submit_karyawan[]" />
                        <label for="inputUnchecked3">Kelvin</label>
                    </div>
                    <div class="checkbox-custom checkbox-primary">
                        <input type="checkbox" id="inputUnchecked4" value="4" name = "id_submit_karyawan[]" />
                        <label for="inputUnchecked4">Ryan</label>
                    </div>
                    <div class="checkbox-custom checkbox-primary">
                        <input type="checkbox" id="inputUnchecked5" value="5" name = "id_submit_karyawan[]" />
                        <label for="inputUnchecked5">Rubin</label>
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