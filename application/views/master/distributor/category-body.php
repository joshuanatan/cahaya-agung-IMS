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
                <th class="text-nowrap">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php for($a = 0; $a<count($distributor); $a++):?>
            <tr>
                <td><?php echo $distributor[$a]["id_submit_distributor"];?></td>
                <td><?php echo $distributor[$a]["nama_distributor"];?></td>
                <td><?php echo nl2br($distributor[$a]["alamat_distributor"]);?></td>
                <td><?php echo $distributor[$a]["notelp_distributor"];?></td>
                <td><?php echo $distributor[$a]["nama_pic"];?></td>
                <td><?php echo $distributor[$a]["nohp_pic"];?></td>
                <td>
                    <?php if($distributor[$a]["status_aktif_distributor"] == 1):?>
                    <button class = "btn btn-sm btn-success">AKTIF</button>
                    <?php else:?>
                    <button class = "btn btn-sm btn-danger">TIDAK AKTIF</button>
                    <?php endif;?>
                </td>
                <td><?php $date = date_create($distributor[$a]["tgl_tambah_distributor"]); echo date_format($date,"D d-m-Y");?></td>
                <td>
                    <?php if($distributor[$a]["status_aktif_distributor"] == 0):?>
                    <button class = "btn btn-sm btn-success">AKTIFKAN</button>
                    <?php else:?> 
                    <button class = "btn btn-sm btn-danger">NON AKTIFKAN</button>
                    <?php endif;?>
                    <button class = "btn btn-sm btn-primary" data-toggle = "modal" data-target = "#editKaryawan<?php echo $a;?>">EDIT</button>
                </td>
            </tr>
            <?php endfor;?>
        </tbody>
    </table>
</div>

<?php for($a = 0; $a<count($distributor); $a++):?>
<div class="modal fade" id="editDistributor<?php echo $a;?>" aria-hidden="true" aria-labelledby="examplePositionCenter" role="dialog" >
    <div class="modal-dialog modal-simple modal-center modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="exampleModalTitle">Tambah Data Distributor</h4>
            </div>
            <div class="modal-body">
            <input type="hidden" value = "<?php echo $distributor[$a]["id_submit_distribution"];?>" class="form-control" id="inputPlaceholder"  disabled placeholder="700004">
            <h4 class="example-title">Nama Distributor</h4>
            <input type="text" class="form-control" id="inputPlaceholder" value = "<?php echo $distributor[$a]["nama_distributor"];?>" placeholder="Nama Distributor">
            <h4 class="example-title">Alamat Distributor</h4>
            <input type="text" class="form-control" id="inputPlaceholder" value = "<?php echo $distributor[$a]["alamat_distributor"];?>" placeholder="Alamat Distributor">
            <h4 class="example-title">Nomor Telepon Distributor</h4>
            <input type="text" class="form-control" id="inputPlaceholder" value = "<?php echo $distributor[$a]["notelp_distributor"];?>" placeholder="Nomor Telepon Distributor">
            <h4 class="example-title">Nama PIC</h4>
            <input type="text" class="form-control" id="inputPlaceholder" value = "<?php echo $distributor[$a]["nama_pic"];?>" placeholder="Nama PIC">
            <h4 class="example-title">Kontak PIC</h4>
            <input type="text" class="form-control" id="inputPlaceholder" value = "<?php echo $distributor[$a]["nohp_pic"];?>" placeholder="Kontak PIC">
            <h4 class="example-title">Tanggal Masuk Distributor</h4>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="icon wb-calendar" aria-hidden="true"></i>
                    </span>
                </div>
                <input type="text" value = "<?php $date = date_create($distributor[$a]["tgl_tambah_distributor"]); echo date_format($date,"D d-m-Y");?>" class="form-control" data-plugin="datepicker">
            </div>
            
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>

        </div>
    </div>
</div>
<?php endfor;?>
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
            <h4 class="example-title">ID Submit Distributor</h4>
            <input type="text" class="form-control" id="inputPlaceholder"  disabled placeholder="700004">
            <h4 class="example-title">Nama Distributor</h4>
            <input type="text" class="form-control" id="inputPlaceholder" placeholder="Nama Distributor">
            <h4 class="example-title">Alamat Distributor</h4>
            <input type="text" class="form-control" id="inputPlaceholder" placeholder="Alamat Distributor">
            <h4 class="example-title">Nomor Telepon Distributor</h4>
            <input type="text" class="form-control" id="inputPlaceholder" placeholder="Nomor Telepon Distributor">
            <h4 class="example-title">Nama PIC</h4>
            <input type="text" class="form-control" id="inputPlaceholder" placeholder="Nama PIC">
            <h4 class="example-title">Kontak PIC</h4>
            <input type="text" class="form-control" id="inputPlaceholder" placeholder="Kontak PIC">
            <h4 class="example-title">Status Aktif Distributor</h4>
            <input type="text" class="form-control" id="inputPlaceholder" placeholder="Status Aktif Distributor">
            <h4 class="example-title">Tanggal Masuk Distributor</h4>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="icon wb-calendar" aria-hidden="true"></i>
                    </span>
                </div>
                <input type="text" class="form-control" data-plugin="datepicker">
            </div>
            
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>

        </div>
    </div>
</div>