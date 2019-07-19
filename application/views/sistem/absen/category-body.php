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
                <form action="">
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
                        <input type="checkbox" id="inputUnchecked" name = "karyawan1" />
                        <label for="inputUnchecked">Herman</label>
                    </div>
                    <div class="checkbox-custom checkbox-primary">
                        <input type="checkbox" id="inputUnchecked" name = "karyawan1"/>
                        <label for="inputChecked">Budi</label>
                    </div>
                    <div class="checkbox-custom checkbox-primary">
                        <input type="checkbox" id="inputUnchecked" name = "karyawan1" />
                        <label for="inputUnchecked">Kelvin</label>
                    </div>
                    <div class="checkbox-custom checkbox-primary">
                        <input type="checkbox" id="inputUnchecked" name = "karyawan1" />
                        <label for="inputUnchecked">Ryan</label>
                    </div>
                    <div class="checkbox-custom checkbox-primary">
                        <input type="checkbox" id="inputUnchecked" name = "karyawan1" />
                        <label for="inputUnchecked">Rubin</label>
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