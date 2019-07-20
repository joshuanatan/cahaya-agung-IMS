<div class="panel-body col-lg-12">
    <div class="row">
        <div class="col-md-6">
            <div class="mb-15">
                <button class = "btn btn-primary btn-outline btn-sm" data-toggle = "modal" data-target = "#tambahabsen">TAMBAH PENJUALAN</button>
            </div>
        </div>
    </div>
    <table class="table table-bordered table-hover table-striped w-full" cellspacing="0" data-plugin = "dataTable">
        <thead>
            <th>ID Submit Penjualan</th>
            <th>Tanggal Penjualan</th>
            <th>Jumlah Item Terjual</th>
            <th>Jumlah Uang Masuk</th>
            <th>ID User Add</th>
            <th class="text-nowrap">Action</th>
        </thead>
        <tbody>
            
        </tbody>
    </table>
</div>
 
        
<div class="modal fade" id="tambahabsen" aria-hidden="true" aria-labelledby="examplePositionCenter" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple modal-center modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="exampleModalTitle">Penjualan</h4>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url(); ?>sistem/penjualan/insert" method="post">
                    <h4 class="example-title">ID Submit Penjualan</h4>
                    <input type="text" class="form-control" id="inputPlaceholder" placeholder="90001" disabled>
                    <div class="example table-responsive">
                        <table class="table table-bordered" style="text-align:center;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Barang</th>
                                    <th>Jumlah</th>
                                    <th>Harga Satuan</th>
                                    <th>Harga Akhir</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php// for($a=1;$a<=15;$a++) :?>
                                <tr>
                                    <td><?php// echo $a; ?></td>
                                    <td>
                                        <select class="form-control" data-plugin="select2" data-minimum-input-length="2" name="id_barang">
                                           
                                            <option value="1">Semen</option>
                                            <option value="2">Cat</option>
                                            <option value="3" >Pasir</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" id="inputPlaceholder" placeholder="60" name="jumlah_item_terjual">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" id="inputPlaceholder" placeholder="60" name="harga_satuan_awal">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" id="inputPlaceholder" placeholder="60" name="jumlah_uang_masuk">
                                    </td>
                                </tr>
                                <?php //endfor; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class = "form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

