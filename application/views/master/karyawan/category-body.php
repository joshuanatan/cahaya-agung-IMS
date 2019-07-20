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
                <th>No HP Karyawan</th>
                <th>Status Aktif Karyawan</th>
                <th class="text-nowrap">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $counter = 0;foreach($karyawan->result() as $a):?>
            <tr>
                <td><?php echo $a->id_submit_karyawan;?></td>
                <td><?php echo $a->nama_karyawan;?></td>
                <td><?php $date = date_create($a->tgl_masuk_karyawan); echo date_format($date,"D, d-m-Y");?></td>
                <td><?php echo $a->gaji_perjam;?></td>
                <td><?php echo $a->nohp_karyawan;?></td>
                <td>
                    <?php if($a->status_aktif_karyawan == 1):?>
                    <button class = "btn btn-sm btn-success">AKTIF</button>
                    <?php else:?> 
                    <button class = "btn btn-sm btn-danger">TIDAK AKTIF</button>
                    <?php endif;?>
                </td>
                <td>
                <?php if($a->status_aktif_karyawan == 0):?>
                    <button class = "btn btn-sm btn-success">AKTIFKAN</button>
                    <?php else:?> 
                    <button class = "btn btn-sm btn-danger">NON AKTIFKAN</button>
                    <?php endif;?>
                    <button class = "btn btn-sm btn-primary" data-toggle = "modal" data-target = "#editKaryawan<?php echo $counter;?>">EDIT</button>
                </td>
            </tr>
            <?php $counter++; endforeach;?>
        </tbody>
    </table>
</div>
 
<?php $counter = 0; foreach($karyawan->result() as $a):?>
<div class="modal fade" id="editKaryawan<?php echo $counter;?>" aria-hidden="true" aria-labelledby="examplePositionCenter" role="dialog" >
    <div class="modal-dialog modal-simple modal-center modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="exampleModalTitle">Edit Data Karyawan</h4>
            </div>
            <div class="modal-body">
                <input type="hidden" class="form-control" value = "<?php echo $a->id_submit_karyawan;?>">
                <h4 class="example-title">Nama Karyawan</h4>
                <input type="text" class="form-control" id="inputPlaceholder" value = "<?php echo $a->nama_karyawan;?>" placeholder="Nama Karyawan">
                <h4 class="example-title">Tanggal Masuk Karyawan</h4>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="icon wb-calendar" aria-hidden="true"></i>
                        </span>
                    </div>
                    <input type="text" value = "<?php $date = date_create($a->tgl_masuk_karyawan); echo date_format($date,"d-m-Y"); ?>" class="form-control" data-plugin="datepicker">
                </div>
                <h4 class="example-title">Gaji per Jam</h4>
                <input type="text" class="form-control" id="inputPlaceholder" value = "<?php echo $a->gaji_perjam;?>" placeholder="Gaji per Jam">
                <h4 class="example-title">Nomor Telepon Karyawan</h4>
                <input type="text" class="form-control" id="inputPlaceholder" value = "<?php echo $a->nohp_karyawan;?> " placeholder="Nomor Telepon Karyawan">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
<?php $counter++; endforeach;?>
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