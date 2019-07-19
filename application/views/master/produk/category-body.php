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
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="exampleModalTitle">Tambah Data Barang</h4>
            </div>
            <div class="modal-body">
                <h4 class="example-title">ID Submit Barang</h4>
                <input type="text" class="form-control" id="inputPlaceholder" placeholder="90007" disabled>
                <h4 class="example-title">Nama Barang</h4>
                <input type="text" class="form-control" id="inputPlaceholder" placeholder="Nama Barang">
                <h4 class="example-title">Stok</h4>
                <input type="text" class="form-control" id="inputPlaceholder" placeholder="Stok Barang">
                <h4 class="example-title">Satuan Barang</h4>
                <input type="text" class="form-control" id="inputPlaceholder" placeholder="Satuan barang">
                <h4 class="example-title">Harga Jual Barang</h4>
                <input type="text" class="form-control" id="inputPlaceholder" placeholder="Harga Jual Barang">
                <h4 class="example-title">Tanggal Masuk Barang</h4>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="icon wb-calendar" aria-hidden="true"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" data-plugin="datepicker">
                </div>
                <br/>
                <div class = "form-group">
                    <button type="button" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
</div>