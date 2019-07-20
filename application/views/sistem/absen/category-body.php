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
            <th>List Karyawan Hadir</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php for($a = 0; $a<count($absen); $a++):?>
            <tr>
                <td><?php $date = date_create($absen[$a]["tgl_absen"]); echo date_format($date,"D d-m-Y");?></td>
                <td><?php echo $absen[$a]["jumlah_masuk"];?></td>
                <td><button class = "btn btn-primary btn-sm" data-toggle="modal" data-target="#karyawanHadir<?php echo $a;?>">Karyawan</button></td>
                <td></td>
            </tr>
            <?php endfor;?>
        </tbody>
    </table>
</div>
<?php for($a = 0; $a<count($absen); $a++):?>
<div class="modal fade" id="karyawanHadir<?php echo $a;?>" aria-hidden="true" aria-labelledby="examplePositionCenter" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple modal-center">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="exampleModalTitle">Absen</h4>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url(); ?>sistem/absensi/updateKaryawanHadir" method="post">
                    <input type="hidden" class="form-control" name = "tgl_absen" value = "<?php echo date("Y-m-d");?>">
                    <?php for($b = 0; $b<count($absen[$a]["karyawan"]); $b++):?>
                    <div class="checkbox-custom checkbox-primary">
                        <input type="checkbox" id="inputUnchecked" value="<?php echo $karyawan[$b]["id_submit_karyawan"] ;?>" name = "id_submit_karyawan[]" <?php if($absen[$a]["karyawan"][$b]["id_submit_karyawan"] == $karyawan[$b]["id_submit_karyawan"]) echo "checked"; ?> />
                        <label for="inputUnchecked"><?php echo $absen[$a]["karyawan"][$b]["nama_karyawan"];?></label>
                    </div>
                    <?php endfor;?>
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endfor;?>        
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
                    <input type="date" class="form-control" name = "tgl_absen" value = "<?php echo date("Y-m-d");?>">
                    <?php for($b = 0; $b<count($karyawan); $b++):?>
                    <div class="checkbox-custom checkbox-primary">
                        <input type="checkbox" id="inputUnchecked" value="<?php echo $karyawan[$b]["id_submit_karyawan"] ;?>" name = "id_submit_karyawan[]" />
                        <label for="inputUnchecked"><?php echo $karyawan[$b]["nama_karyawan"];?></label>
                    </div>
                    <?php endfor;?>
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                </div>
            </form>
        </div>
    </div>
</div>