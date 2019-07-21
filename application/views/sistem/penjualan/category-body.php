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
            <th>Detail Item</th>
        </thead>
        <tbody>
            <?php for($a = 0; $a<count($penjualan); $a++):?>
            <tr>
                <td><?php echo $penjualan[$a]["id_submit_penjualan"];?></td>
                <td><?php $date = date_create($penjualan[$a]["tgl_penjualan"]); echo date_format($date,"D d-m-Y");?></td>
                <td><?php echo $penjualan[$a]["jumlah_item_terjual"];?> Item</td>
                <td><?php echo number_format($penjualan[$a]["jumlah_uang_masuk"]);?></td>
                <td><button class = "btn btn-sm btn-primary" data-toggle = "modal" data-target = "#detailItem<?php echo $a;?>">ITEMS</button></td>
            </tr>
            <?php endfor;?>
        </tbody>
    </table>
</div>
 

<?php for($a = 0; $a<count($penjualan); $a++):?>
<div class="modal fade" id="detailItem<?php echo $a;?>" aria-hidden="true" aria-labelledby="examplePositionCenter" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="exampleModalTitle">Penjualan</h4>
            </div>
            <div class="modal-body">
                <div class="example table-responsive">
                    <table class="table table-bordered" style="text-align:center;width:100%" data-plugin="dataTable">
                        <thead>
                            <tr>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Satuan</th>
                                <th>Harga Satuan</th>
                                <th>Harga Akhir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for($b = 0; $b<count($penjualan[$a]["item_penjualan"]); $b++):?>
                            <tr>
                                <td>
                                    <?php echo $penjualan[$a]["item_penjualan"][$b]["nama_barang"];?>
                                </td>
                                <td>
                                    <?php echo $penjualan[$a]["item_penjualan"][$b]["jumlah_terjual"];?>
                                </td>
                                <td>
                                    <?php echo $penjualan[$a]["item_penjualan"][$b]["satuan_barang"];?>
                                </td>
                                <td>
                                    <?php echo number_format($penjualan[$a]["item_penjualan"][$b]["harga_jual"]);?>
                                </td>
                                <td>
                                    <?php echo number_format($penjualan[$a]["item_penjualan"][$b]["jumlah_terjual"]*$penjualan[$a]["item_penjualan"][$b]["harga_jual"]);?>
                                </td>
                            </tr>
                            <?php endfor; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>            
<?php endfor;?>

<div class="modal fade" id="tambahabsen" aria-hidden="true" aria-labelledby="examplePositionCenter" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="exampleModalTitle">Penjualan</h4>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url(); ?>sistem/penjualan/insert" method="post">
                    <div class="example table-responsive">
                        <table class="table table-bordered" style="text-align:center;width:100%" data-plugin="dataTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Barang</th>
                                    <th>Jumlah</th>
                                    <th>Satuan</th>
                                    <th>Harga Satuan</th>
                                    <th>Harga Akhir</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for($baris=0;$baris<20;$baris++):?>
                                <tr>
                                    <td>
                                        <div class = "checkbox-custom checkbox-primary">
                                            <input type = "checkbox" value = "<?php echo $baris;?>" name = "checks[]">
                                            <label></label>
                                        </div>
                                    </td>
                                    <td>
                                        <select class="form-control" onchange = "getHargaSatuan('<?php echo $baris;?>');getSatuan('<?php echo $baris;?>')" data-plugin="select2" id = "id_barang<?php echo $baris;?>" name="id_barang<?php echo $baris;?>">
                                            <option selected disabled>Pilih barang</option>
                                            <?php for($a = 0; $a<count($barang); $a++):?>
                                            <option value="<?php echo $barang[$a]["id_submit_barang"];?>"><?php echo $barang[$a]["nama_barang"];?></option>
                                            <?php endfor;?>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" id="jumlah_item_terjual<?php echo $baris;?>" name="jumlah_item_terjual<?php echo $baris;?>">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" id="satuan<?php echo $baris;?>" readonly>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" id="hargaSatuan<?php echo $baris;?>" name="harga_satuan_awal<?php echo $baris;?>">
                                    </td>
                                    <td>
                                        <input onfocus="countHargaAkhir('<?php echo $baris;?>')" readonly placeholder="Tekan u/ Harga Jual" type="text" class="form-control" id="harga_akhir_barang<?php echo $baris;?>" name="jumlah_uang_masuk<?php echo $baris;?>">
                                    </td>
                                </tr>
                                <?php endfor; ?>
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

