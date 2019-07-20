<div class="panel-body col-lg-12">
    <div class="row">
        <div class="col-md-6">
            <div class="mb-15">
                <button class = "btn btn-primary btn-outline btn-sm" data-toggle = "modal" data-target = "#tambahabsen">TAMBAH PEMESANAN</button>
            </div>
        </div>
    </div>
    <table class="table table-bordered table-hover table-striped w-full" cellspacing="0" data-plugin = "dataTable">
        <thead>
            <tr>
                <th>ID Submit Pemesanan</th>
                <th>ID Submit Distributor</th>
                <th>Tanggal Pemesanan</th>
                <th>Status Aktif Pemesanan</th>
                <th>Detail Barang</th>
                <th>Penerimaan Barang</th>
                <th class="text-nowrap">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php for($a = 0; $a<count($pemesanan); $a++):?>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <button class = "btn btn-sm btn-primary" data-toggle="modal" data-target="#terimaBarang<?php echo $a;?>">PENERIMAAN</button>
                </td>
                <td></td>
            </tr>
            <?php endfor;?>
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
                <h4 class="modal-title" id="exampleModalTitle">Penjualan</h4>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url(); ?>sistem/restok/insert" method="post">
                    <h4 class="example-title">ID Submit  Pemesanan</h4>
                    <input type="text" class="form-control" id="inputPlaceholder" placeholder="500003"  disabled>
                    <h4 class="example-title">Nama Distributor</h4>
                    <select class="form-control" data-plugin="select2" data-minimum-input-length="2" name="id_submit_distributor">
                        <option value="1">Distributor Hezaar</option>
                        <option value="2">Distributor Verdy</option>
                        <option value="3">Distributor Hiber</option>
                    </select>
                    <h4 class="example-title">Tanggal Masuk Pemesanan</h4>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="icon wb-calendar" aria-hidden="true"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" data-plugin="datepicker" name="tgl_pemesanan">
                    </div>    
                    <br/>
                    <table class="table table-bordered" style="text-align:center;">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="checkbox-custom checkbox-primary">
                                        <input type="checkbox" id="inputUnchecked"/>
                                        <label for="inputUnchecked"></label>
                                    </div>              
                                </td>
                                <td>
                                    <select class="form-control" data-plugin="select2" name="id_barang">
                                        <option value="1">Semen</option>
                                        <option value="2">Cat</option>
                                        <option value="3">Pasir</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="inputPlaceholder" placeholder="Jumlah Barang" name="jumlah_item_pemesanan">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="inputPlaceholder" placeholder="Harga Barang" name="harga_item_pemesanan" value="1500000" readonly>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php for($a = 0; $a<count($pemesanan); $a++):?>
<div class = "modal fade" id = "terimaBarang<?php echo $a;?>">
    <div class = "modal-dialog modal-lg">
        <div class = "modal-content">
            <div class = "modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="exampleModalTitle">Penerimaan</h4>
            </div>
            <div class = "modal-body">
                <button class = "btn btn-sm btn-primary" data-toggle="modal" data-target = "#tambahPenerimaanBarang">PENERIMAAN BARANG</button><br/><br/>
                <table class = "table table-hovered table-stripped table-bordered" data-plugin = "dataTable" style = "width:100%">
                    <thead>
                        <th>ID Penerimaan</th>
                        <th>Tanggal Penerimaan</th>
                        <th>Barang Diterima</th>
                    </thead>
                    <tbody>
                        <?php for($b = 0; $b<count($pemesanan[$a]); $b++):?>
                        <td></td>
                        <td></td>
                        <td>
                            <button class = "btn btn-primary btn-sm" data-toggle="modal" data-target="#itemPenerimaan<?php echo $b;?>">DETAIL</button>
                        </td>
                        <?php endfor;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php //endfor;?>


<?php //for($a = 0; $a<count($pemesanan); $a++):?>
<?php for($b = 0; $b<count($pemesanan[$a]); $b++):?>
<div class = "modal fade" id = "itemPenerimaan<?php echo $b;?>">
    <div class = "modal-dialog modal-lg">
        <div class = "modal-content">
            <div class = "modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="exampleModalTitle">Barang Diterima</h4>
            </div>
            <div class = "modal-body">
                <table class = "table table-hovered table-stripped table-bordered" data-plugin = "dataTable" style = "width:100%">
                    <thead>
                        <th>Nama Barang</th>
                        <th>Jumlah Barang</th>
                        <th>Satuan Barang</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php endfor;?>
<?php endfor;?>

<div class = "modal fade" id = "tambahPenerimaanBarang">
    <div class = "modal-dialog modal-lg">
        <div class = "modal-content">
            <div class = "modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="exampleModalTitle">Penerimaan Barang</h4>
            </div>
            <div class = "modal-body">
                <div class = "form-group">
                    <input type = "text" class = "form-control" data-plugin = "datepicker"> 
                </div>
                <table class = "table table-hovered table-stripped table-bordered" data-plugin = "dataTable" style = "width:100%">
                    <thead>
                        <th>Nama Barang</th>
                        <th>Jumlah Barang</th>
                        <th>Satuan Barang</th>
                    </thead>
                    <tbody>
                        <td><input type = "text" class = "form-control"></td>
                        <td><input type = "text" class = "form-control"></td>
                        <td></td>
                    </tbody>
                </table>
                <br/>
                <div class = "form-group">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</div>
