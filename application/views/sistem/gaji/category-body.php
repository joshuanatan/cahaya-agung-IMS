<div class="panel-body col-lg-12">
    <div class="row">
        <div class="form-group col-md-2">
            <select class = "form-control" data-plugin = "select2">
                <option>PILIH BULAN</option>
            </select>
            
        </div>
        <div class="form-group col-md-2">
            <select class = "form-control" data-plugin = "select2">
                <option>PILIH TAHUN</option>
            </select>
        </div>
        <div class="form-group col-md-2">
            <button class = "btn btn-primary btn-outline ">CHECK</select> <!-- begitu check ajax, langsung dapetin data karyawan besrta tanggal masuknya-->
        </div>
    </div>
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
                <form action="<?php echo base_url(); ?>sistem/gaji/insert" method="post">
                    <h4 class="example-title">ID Submit  Pemesanan</h4>
                    <input type="text" class="form-control" id="inputPlaceholder" placeholder="500003"  disabled>
                    <h4 class="example-title">Nama Distributor</h4>
                    <select class="form-control" data-plugin="select2" data-minimum-input-length="2" name="id_">
                        <option >Distributor Hezaar</option>
                        <option >Distributor Verdy</option>
                        <option >Distributor Hiber</option>
                    </select>
                    <h4 class="example-title">Tanggal Masuk Pemesanan</h4>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="icon wb-calendar" aria-hidden="true"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" data-plugin="datepicker">
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
                                    <select class="form-control" data-plugin="select2">
                                    <option >Semen</option>
                                    <option >Cat</option>
                                    <option >Pasir</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="inputPlaceholder" placeholder="Jumlah Barang">
                                </td>
                                <td>1500000</td>
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