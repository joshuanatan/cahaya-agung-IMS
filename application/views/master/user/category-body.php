<div class="panel-body col-lg-12">
    <div class="row">
        <div class="col-md-6">
            <div class="mb-15">
                <button class = "btn btn-primary btn-outline btn-sm" data-toggle = "modal" data-target = "#tambahabsen">TAMBAH USER</button>
            </div>
        </div>
    </div>
    <table class="table table-bordered table-hover table-striped w-full" cellspacing="0" data-plugin = "dataTable">
        <thead>
            <tr>
                <th>ID Submit User</th>
                <th>Nama User</th>
                <th>Role</th>
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
                <h4 class="modal-title" id="exampleModalTitle">Tambah Data Karyawan</h4>
            </div>
            <div class="modal-body">
                <h4 class="example-title">ID User</h4>
                <input type="text" class="form-control" id="inputPlaceholder"  disabled placeholder="600006">
                <h4 class="example-title">Nama User</h4>
                <input type="text" class="form-control" id="inputPlaceholder" placeholder="Nama Karyawan">
                <h4 class="example-title">Password</h4>
                <input type="password" class="form-control" id="inputPlaceholder">
                <h4 class="example-title">Role</h4>
                <select class="form-control" id="inputPlaceholder" placeholder="Nama Karyawan">
                    <option value = "">ADMIN</option>
                    <option value = "">USER</option>
                </select>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>