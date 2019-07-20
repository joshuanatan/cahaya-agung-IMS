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
                <th>Nama Distributor</th>
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
                <td><?php echo $pemesanan[$a]["id_submit_pemesanan"];?></td>
                <td><?php echo $pemesanan[$a]["nama_distributor"];?></td>
                <td><?php $date = date_create($pemesanan[$a]["tgl_pemesanan"]); echo date_format($date,"D d-m-Y");?></td>
                <td>
                    <?php if($pemesanan[$a]["status_aktif_pemesanan"] == 1):?>
                    <button class = "btn btn-success btn-sm">AKTIF</button>
                    <?php else:?>
                    <button class = "btn btn-danger btn-sm">TIDAK AKTIF</button>
                    <?php endif;?>
                    <?php if($pemesanan[$a]["is_done_pemesanan"] == 1):?>
                    <button class = "btn btn-success btn-sm">DONE</button>
                    <?php else:?>
                    <button class = "btn btn-primary btn-sm">ON GOING</button>
                    <?php endif;?>
                </td>
                <td>
                    <button class = "btn btn-primary btn-sm" data-toggle="modal" data-target="#itemPemesanan<?php echo $a;?>">ITEM</button>
                </td>
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
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="exampleModalTitle">Pemesanan</h4>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url(); ?>sistem/restok/insert" method="post">
                    <h4 class="example-title">Nama Distributor</h4>
                    <select class="form-control" data-plugin="select2" name="id_submit_distributor">
                        <option selected disabled>Pilih Distributor</option>
                        <?php for($a = 0; $a<count($distributor); $a++):?>
                        <option value = "<?php echo $distributor[$a]["id_submit_distributor"];?>"><?php echo $distributor[$a]["nama_distributor"] ?></option>
                        <?php endfor;?>
                    </select>
                    <h4 class="example-title">Tanggal Pemesanan</h4>
                    <input type="date" class="form-control" name="tgl_pemesanan"> 

                    <br/>
                    <table class="table table-bordered" style="text-align:center;width:100%" data-plugin="dataTable">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for($a = 0; $a<20; $a++):?>
                            <tr>
                                <td>
                                    <div class="checkbox-custom checkbox-primary">
                                        <input type="checkbox" id="inputUnchecked" value = "<?php echo $a;?>" name = "checks[]"/>
                                        <label for="inputUnchecked"></label>
                                    </div>              
                                </td>
                                <td>
                                    <select class="form-control" data-plugin="select2" name="id_barang<?php echo $a;?>">
                                        <option selected disabled>Pilih Barang</option>
                                        <?php for($b = 0; $b<count($barang); $b++):?>
                                        <option value = "<?php echo $barang[$b]["id_submit_barang"];?>"><?php echo $barang[$b]["nama_barang"];?></option>
                                        <?php endfor;?>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="inputPlaceholder" placeholder="Jumlah Barang" name="jumlah_item_pemesanan<?php echo $a;?>">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="inputPlaceholder" placeholder="Harga Barang" name="harga_item_pemesanan<?php echo $a;?>">
                                </td>
                            </tr>
                            <?php endfor;?>
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
<div class = "modal fade" id = "itemPemesanan<?php echo $a;?>">
    <div class = "modal-dialog modal-lg">
        <div class = "modal-content">
            <div class = "modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="exampleModalTitle">Item Pemesanan</h4>
            </div>
            <div class = "modal-body">
                <table class = "table table-hovered table-stripped table-bordered" data-plugin = "dataTable" style = "width:100%">
                    <thead>
                        <th>Nama Barang</th>
                        <th>Jumlah Pemesanan</th>
                        <th>Harga Beli</th>
                    </thead>
                    <tbody>
                        <?php for($b = 0; $b<count($pemesanan[$a]["item_pemesanan"]); $b++):?>
                        <tr>
                            <td><?php echo $pemesanan[$a]["item_pemesanan"][$b]["nama_barang"];?></td>
                            <td><?php echo $pemesanan[$a]["item_pemesanan"][$b]["jumlah_item_pemesanan"];?> <?php echo $pemesanan[$a]["item_pemesanan"][$b]["satuan_barang"];?></td>
                            <td><?php echo $pemesanan[$a]["item_pemesanan"][$b]["harga_item_pemesanan"];?></td>
                        </tr>
                        <?php endfor;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php endfor;?>

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
                <button class = "btn btn-sm btn-primary" data-toggle="modal" data-target = "#tambahPenerimaanBarang<?php echo $a;?>">PENERIMAAN BARANG</button><br/><br/>
                <table class = "table table-hovered table-stripped table-bordered" data-plugin = "dataTable" style = "width:100%">
                    <thead>
                        <th>ID Penerimaan</th>
                        <th>Tanggal Penerimaan</th>
                        <th>Barang Diterima</th>
                    </thead>
                    <tbody>
                        <?php for($b = 0; $b<count($pemesanan[$a]["penerimaan"]); $b++):?>
                        <tr>
                            <td><?php echo $pemesanan[$a]["penerimaan"][$b]["id_submit_penerimaan"];?></td>
                            <td><?php $date = date_create($pemesanan[$a]["penerimaan"][$b]["tgl_penerimaan"]); echo date_format($date,"D d-m-Y");?></td>
                            <td>
                                <button class = "btn btn-primary btn-sm" data-toggle="modal" data-target="#itemPenerimaan<?php echo $b;?>">DETAIL</button>
                            </td>
                        </tr>
                        <?php endfor;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php endfor;?>


<?php for($a = 0; $a<count($pemesanan); $a++):?>
<?php for($b = 0; $b<count($pemesanan[$a]["penerimaan"]); $b++):?>
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
                        <?php for($c = 0; $c<count($pemesanan[$a]["penerimaan"][$b]["item_penerimaan"]); $c++):?>
                        <tr>
                            <td><?php echo $pemesanan[$a]["penerimaan"][$b]["item_penerimaan"][$c]["nama_penerimaan"];?></td>
                            <td><?php echo $pemesanan[$a]["penerimaan"][$b]["item_penerimaan"][$c]["jumlah_terima"];?></td>
                            <td><?php echo $pemesanan[$a]["penerimaan"][$b]["item_penerimaan"][$c]["satuan_penerimaan"];?></td>
                            <td><?php echo $pemesanan[$a]["penerimaan"][$b]["item_penerimaan"][$c]["nama_penerimaan"];?></td>
                        </tr>
                        <?php endfor;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php endfor;?>
<?php endfor;?>

<?php for($a = 0; $a<count($pemesanan); $a++):?>
<div class = "modal fade" id = "tambahPenerimaanBarang<?php echo $a;?>">
    <div class = "modal-dialog modal-lg">
        <div class = "modal-content">
            <div class = "modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="exampleModalTitle">Penerimaan Barang</h4>
            </div>
            <div class = "modal-body">
                <form action ="<?php echo base_url();?>sistem/restok/insertPenerimaan" method = "POST">
                    <div class = "form-group">
                        <input type = "date" class = "form-control" name = "tgl_penerimaan"> 
                        <input type = "hidden" value = "<?php echo $pemesanan[$a]["id_submit_pemesanan"];?>" name = "id_submit_pemesanan"> 
                    </div>
                    <table class = "table table-hovered table-stripped table-bordered" data-plugin = "dataTable" style = "width:100%">
                        <thead>
                            <th>#</th>
                            <th>Nama Barang</th>
                            <th>Jumlah Dipesan</th>
                            <th>Jumlah Barang</th>
                        </thead>
                        <tbody>
                            <?php for($item = 0; $item<count($pemesanan[$a]["item_pemesanan"]); $item++):?>
                            <tr>
                                <td>
                                    <div class = "checkbox-custom checkbox-primary">
                                        <input type = "checkbox" value = "<?php echo $item;?>" name = "checks[]">
                                        <label></label>
                                    </div>
                                </td>
                                <td>
                                    <?php echo $pemesanan[$a]["item_pemesanan"][$item]["nama_barang"];?>
                                    <input type = "hidden" value = "<?php echo $pemesanan[$a]["item_pemesanan"][$item]["id_submit_item_pemesanan"];?>" name = "id_submit_item_pemesanan<?php echo $item;?>" class = "form-control">
                                </td>
                                <td><?php echo $pemesanan[$a]["item_pemesanan"][$item]["jumlah_item_pemesanan"];?> <?php echo $pemesanan[$a]["item_pemesanan"][$item]["satuan_barang"];?></td>
                                <td><input type = "text" class = "form-control" name = "jumlah_terima<?php echo $item;?>"></td>
                            </tr>
                            <?php endfor;?>
                        </tbody>
                    </table>
                    <br/>
                    <div class = "form-group">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endfor;?>