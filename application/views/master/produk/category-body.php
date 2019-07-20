<div class="panel-body col-lg-12">
    <div class="row">
        <div class="col-md-6">
            <div class="mb-15">
                <button class = "btn btn-primary btn-outline btn-sm" data-toggle = "modal" data-target = "#tambahabsen">TAMBAH BARANG</button>
            </div>
        </div>
    </div>
    <table class="table table-bordered table-hover table-striped w-full" cellspacing="0" data-plugin = "dataTable">
        <thead>
            <th>ID Submit Barang</th>
            <th>Nama Barang</th>
            <th>Stok</th>
            <th>Satuan Barang</th>
            <th>Harga Jual Barang</th>
            <th>Tanggal Masuk Barang</th>
            <th>Status Aktif Barang</th>
            <th class="text-nowrap">Action</th>
        </thead>
        <tbody>
            <?php for($a = 0; $a<count($barang); $a++):?>
            <tr>
                <td><?php echo $barang[$a]["id_submit_barang"];?></td>
                <td><?php echo $barang[$a]["nama_barang"];?></td>
                <td><?php echo $barang[$a]["stok"];?></td>
                <td><?php echo $barang[$a]["satuan_barang"];?></td>
                <td><?php echo $barang[$a]["harga_jual_barang"];?></td>
                <td><?php echo $barang[$a]["tgl_masuk_barang"];?></td>
                <td><?php echo $barang[$a]["status_aktif_barang"];?></td>
                <td><?php echo $barang[$a]["status_aktif_barang"];?></td>
            </tr>
            <?php endfor;?>
        </tbody>
    </table>
</div>
 
        
<div class="modal fade" id="tambahabsen" aria-hidden="true" aria-labelledby="examplePositionCenter" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple modal-center modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="exampleModalTitle">Tambah Data Barang</h4>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <h4 class="example-title">ID Submit Barang</h4>
                    <input type="text" class="form-control" id="inputPlaceholder" placeholder="90007" disabled>
                    <h4 class="example-title">Nama Barang</h4>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Nama Barang">
                    <h4 class="example-title">Stok</h4>
                    <input type="text" class="form-control" id="stok" name="stok" placeholder="Stok Barang">
                    <h4 class="example-title">Satuan Barang</h4>
                    <input type="text" class="form-control" id="satuan_barang" name="satuan_barang" placeholder="Satuan barang">
                    <h4 class="example-title">Harga Jual Barang</h4>
                    <input type="text" class="form-control" id="harga_jual_barang" name="harga_jual_barang" placeholder="Harga Jual Barang">
                    <h4 class="example-title">Tanggal Masuk Barang</h4>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="icon wb-calendar" aria-hidden="true"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" data-plugin="datepicker" name="tgl_masuk_barang">
                    </div>
                    <br/>
                    <div class= "form-group">
                        <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>