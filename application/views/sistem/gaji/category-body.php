<div class="panel-body col-lg-12">
    <form action ="<?php echo base_url();?>sistem/gaji/check" method = "POST">
        <div class="row">
            <div class="form-group col-md-2">
                <select class = "form-control" data-plugin = "select2" name = "bulan">
                    <option selected disabled>PILIH BULAN</option>
                    <option value = "01">JANUARI</option>
                    <option value = "02">FEBRUARI</option>
                    <option value = "03">MARET</option>
                    <option value = "04">APRIL</option>
                    <option value = "05">MEI</option>
                    <option value = "06">JUNI</option>
                    <option value = "07">JULI</option>
                    <option value = "08">AGUSTUS</option>
                    <option value = "09">SEPTEMBER</option>
                    <option value = "10">OKTOBER</option>
                    <option value = "11">NOVEMBER</option>
                    <option value = "12">DESEMBER</option>
                </select>
                
            </div>
            <div class="form-group col-md-2">
                <select class = "form-control" data-plugin = "select2" name = "tahun">
                    <option>PILIH TAHUN</option>
                    <?php for($a = 0; $a<2; $a++):?>
                    <option value = "<?php echo date("Y")-$a;?>"><?php echo date("Y")-$a;?></option>
                    <?php endfor;?>
                </select>
            </div>
            <div class="form-group col-md-2">
                <button type = "submit" class = "btn btn-primary btn-outline ">CHECK</select> <!-- begitu check ajax, langsung dapetin data karyawan besrta tanggal masuknya-->
            </div>
        </div>
    </form>
    <?php if(count($karyawan) > 0):?>
    <h4><?php echo bulanCantik($bulan);?> - <?php echo $tahun;?></h4>
    <table class="table table-bordered table-hover table-striped w-full" cellspacing="0" data-plugin = "dataTable">
        <thead>
            <tr>
                <th>ID Karyawan</th>
                <th>Nama Karyawan</th>
                <th>Jumlah Hari Masuk</th>
                <th>Gaji Harian</th>
                <th>Jumlah Gaji</th>
                <th>Status Pembayaran</th>
                <th class="text-nowrap">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php for($a = 0; $a<count($karyawan); $a++):?>
            <tr>
                <td><?php echo $karyawan[$a]["id_submit_karyawan"];?></td>
                <td><?php echo ucwords($karyawan[$a]["nama_karyawan"]);?></td>
                <td><?php echo $karyawan[$a]["jumlah_masuk"];?> Hari</td>
                <td><?php echo number_format($karyawan[$a]["gaji_perjam"]);?></td>
                <td><?php echo number_format($karyawan[$a]["gaji"]);?></td>
                <td>
                    <?php if($karyawan[$a]["status_bayar"] == 0):?>
                    <button class = "btn btn-success btn-sm">SUDAH BAYAR</button>
                    <?php else:?>
                    <button class = "btn btn-danger btn-sm">BELUM BAYAR</button>
                    <?php endif;?>
                </td>
                <td>
                    <button class = "btn btn-primary btn-sm btn-outline" data-toggle = "modal" data-target = "#bayarGaji<?php echo $a;?>">BAYAR GAJI</button>
                </td>
            </tr>
            
            <?php endfor;?>
        </tbody>
    </table>
    <?php endif;?>
</div>
