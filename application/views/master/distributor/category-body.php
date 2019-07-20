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
                <td><?php echo ucwords($distributor[$a]["nama_distributor"]);?></td>
                <td><?php echo nl2br(ucwords($distributor[$a]["alamat_distributor"]));?></td>
                <td><?php echo $distributor[$a]["notelp_distributor"];?></td>
                <td><?php echo ucwords($distributor[$a]["nama_pic"]);?></td>
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
                    <a href = "<?php echo base_url();?>master/distributor/activate/<?php echo $distributor[$a]["id_submit_distributor"];?>" class = "btn btn-sm col-lg-12 btn-outline btn-success">AKTIFKAN</a>
                    <?php else:?> 
                    <a href = "<?php echo base_url();?>master/distributor/deactive/<?php echo $distributor[$a]["id_submit_distributor"];?>" class = "btn btn-sm col-lg-12 btn-outline btn-danger">NON AKTIFKAN</a>
                    <?php endif;?>
                    <button class = "btn btn-sm col-lg-12 btn-outline btn-primary" data-toggle = "modal" data-target = "#editDistributor<?php echo $a;?>">EDIT</button>
                    <a href = "<?php echo base_url();?>master/distributor/delete/<?php echo $distributor[$a]["id_submit_distributor"];?>" class = "btn btn-sm col-lg-12 btn-outline btn-danger">HAPUS</a>
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
            <form action = "<?php echo base_url();?>master/distributor/update" method = "POST">
                <div class="modal-body">
                    <input type="hidden" value = "<?php echo $distributor[$a]["id_submit_distributor"];?>" class="form-control" id="inputPlaceholder"  name = "id_submit_distributor" placeholder="700004">
                    <h4 class="example-title">Nama Distributor</h4>
                    <input type="text" class="form-control" id="inputPlaceholder" value = "<?php echo $distributor[$a]["nama_distributor"];?>" name = "nama_distributor" placeholder="Nama Distributor">
                    <h4 class="example-title">Alamat Distributor</h4>
                    <textarea class="form-control" id="inputPlaceholder" name = "alamat_distributor" placeholder="Alamat Distributor"><?php echo $distributor[$a]["alamat_distributor"];?></textarea>
                    <h4 class="example-title">Nomor Telepon Distributor</h4>
                    <input type="text" class="form-control" id="inputPlaceholder" value = "<?php echo $distributor[$a]["notelp_distributor"];?>" name = "notelp_distributor" placeholder="Nomor Telepon Distributor">
                    <h4 class="example-title">Nama PIC</h4>
                    <input type="text" class="form-control" id="inputPlaceholder" value = "<?php echo $distributor[$a]["nama_pic"];?>" name = "nama_pic" placeholder="Nama PIC">
                    <h4 class="example-title">Kontak PIC</h4>
                    <input type="text" class="form-control" id="inputPlaceholder" value = "<?php echo $distributor[$a]["nohp_pic"];?>" name = "nohp_pic" placeholder="Kontak PIC">
                    <h4 class="example-title">Tanggal Tambah Distributor</h4>
                    <input type="date" class="form-control" id="inputPlaceholder" value = "<?php $date = date_create($distributor[$a]["tgl_tambah_distributor"]); echo date_format($date,"Y-m-d");?>" name = "tgl_tambah_distributor" placeholder="Kontak PIC">
                
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form> 
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
            <form action="<?php echo base_url(); ?>master/distributor/insert" method="post">
                <h4 class="example-title">Nama Distributor</h4>
                <input type="text" class="form-control" id="inputPlaceholder" placeholder="Nama Distributor" name="nama_distributor">
                <h4 class="example-title">Alamat Distributor</h4>
                <textarea class="form-control" id="inputPlaceholder" placeholder="Alamat Distributor" name="alamat_distributor"></textarea>
                <h4 class="example-title">Nomor Telepon Distributor</h4>
                <input type="text" class="form-control" id="inputPlaceholder" placeholder="Nomor Telepon Distributor" name="notelp_distributor">
                <h4 class="example-title">Nama PIC</h4>
                <input type="text" class="form-control" id="inputPlaceholder" placeholder="Nama PIC" name="nama_pic">
                <h4 class="example-title">Kontak PIC</h4>
                <input type="text" class="form-control" id="inputPlaceholder" placeholder="Kontak PIC" name="nohp_pic">
                
                
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    
                </div>
            </form>
        </div>
    </div>
</div>