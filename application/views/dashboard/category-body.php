<div class="panel-body col-lg-12">
    <div class = "row">
        <div class="col-lg-3">
            <div class="card card-block p-25 bg-blue-600">
                <div class="counter counter-lg counter-inverse">
                    <div class="counter-label text-uppercase">Jumlah Penjualan (harian)</div>
                    <span class="counter-number"><?php echo $jumlah_penjualan_harian;?> <span style = "font-size:20px">Transaksi</span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-block p-25 bg-blue-600">
                <div class="counter counter-lg counter-inverse">
                    <div class="counter-label text-uppercase">Jumlah Pemasukan (harian)</div>
                    <span class="counter-number"><?php echo number_format($jumlah_pemasukan_harian);?></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-block p-25 bg-blue-600">
                <div class="counter counter-lg counter-inverse">
                    <div class="counter-label text-uppercase">Jumlah Penjualan (bulanan)</div>
                    <span class="counter-number"><?php echo $jumlah_penjualan_bulanan;?> <span style = "font-size:20px">Transaksi</span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-block p-25 bg-blue-600">
                <div class="counter counter-lg counter-inverse">
                    <div class="counter-label text-uppercase">Jumlah Pemasukan (bulanan)</div>
                    <span class="counter-number"><?php echo number_format($jumlah_pemasukan_bulanan);?></span>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-bordered" data-plugin = "dataTable">
        <thead>
            <tr>
                <th style = "width:20%">Nama Produk</th>
                <th style = "width:20%">Stok</th>
                <th style = "width:20%">Penjualan Bulan Ini</th>
                <th style = "width:20%">Harga Jual Satuan</th>
                <th style = "width:20%" class="text-nowrap">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php for($a = 0; $a<count($barang); $a++):?>
            <tr>
                <td><?php echo $barang[$a]["nama_barang"];?></td>
                <td><?php echo $barang[$a]["stok"];?> <?php echo $barang[$a]["satuan_barang"];?></td>
                <td><?php echo $barang[$a]["terjual"];?> <?php echo $barang[$a]["satuan_barang"];?></td>
                <td><?php echo number_format($barang[$a]["harga_jual_barang"]);?></td>
                <td class="text-nowrap">
                    <a href = "<?php echo base_url();?>sistem/restok" class = "btn btn-sm btn-primary">RESTOK</a>
                </td>
            </tr>
            <?php endfor;?>
        </tbody>
    </table>
</div>