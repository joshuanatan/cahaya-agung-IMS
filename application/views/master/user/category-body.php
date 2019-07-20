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
                <th>Status Aktif</th>
                <th class="text-nowrap">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php for($a = 0; $a<count($user); $a++):?>
            <tr>
                <td><?php echo $user[$a]["id_submit_user"];?></td>
                <td><?php echo $user[$a]["username"];?></td>
                <td><?php echo $user[$a]["role_user"];?></td>
                <td><?php if($user[$a]["status_aktif_user"] == 1):?>
                    <button class = "btn btn-sm btn-success">AKTIF</button>
                    <?php else:?>
                    <button class = "btn btn-sm btn-danger">TIDAK AKTIF</button>
                    <?php endif;?>
                </td>
                <td>
                <?php if($user[$a]["status_aktif_user"] == 0):?>
                    <a href = "<?php echo base_url();?>master/user/activate/<?php echo $user[$a]["id_submit_user"];?>" class = "btn btn-sm btn-success">AKTIFKAN</a>
                    <?php else:?> 
                    <a href = "<?php echo base_url();?>master/user/deactive/<?php echo $user[$a]["id_submit_user"];?>" class = "btn btn-sm btn-danger">NON AKTIFKAN</a>
                    <?php endif;?>
                    <button class = "btn btn-sm btn-primary" data-toggle = "modal" data-target = "#editUser<?php echo $a;?>">EDIT</button>
                    <a href = "<?php echo base_url();?>master/user/delete/<?php echo $user[$a]["id_submit_user"];?>" class = "btn btn-sm btn-danger">HAPUS</a>
                </td>
            </tr>
            <?php endfor;?>
        </tbody>
    </table>
</div>

<?php for($a = 0; $a<count($user); $a++):?>
<div class="modal fade" id="editUser<?php echo $a;?>" aria-hidden="true" aria-labelledby="examplePositionCenter" role="dialog" >
    <div class="modal-dialog modal-simple modal-center modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="exampleModalTitle">Edit Data User</h4>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url(); ?>master/user/update" method="post">
                    <input type="hidden" class="form-control" id="inputPlaceholder" value = "<?php echo $user[$a]["id_submit_user"]; ?>" name = "id_submit_user">
                    <h4 class="example-title">Nama User</h4>
                    <input type="text" class="form-control" id="inputPlaceholder" value = "<?php echo $user[$a]["username"]; ?>" placeholder="Nama User" name="username">
                    <h4 class="example-title">Password</h4>
                    <input type="password" class="form-control" id="inputPlaceholder" name="password">
                    <h4 class="example-title">Role</h4>
                    <select class="form-control" id="inputPlaceholder" name="role_user">
                        <option value = "ADMIN">ADMIN</option>
                        <option value = "USER" <?php if($user[$a]["role_user"] == "USER") echo "SELECTED"; ?>>USER</option>
                    </select>
                    
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    </div>
            </form>
        </div>
    </div>
</div>
<?php endfor;?>

<div class="modal fade" id="tambahabsen" aria-hidden="true" aria-labelledby="examplePositionCenter" role="dialog" >
    <div class="modal-dialog modal-simple modal-center modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="exampleModalTitle">Tambah Data User</h4>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url(); ?>master/user/insert" method="post">
                    <h4 class="example-title">Nama User</h4>
                    <input type="text" class="form-control" id="inputPlaceholder" placeholder="Nama User" name="username">
                    <h4 class="example-title">Password</h4>
                    <input type="password" class="form-control" id="inputPlaceholder" name="password">
                    <h4 class="example-title">Role</h4>
                    <select class="form-control" id="inputPlaceholder" placeholder="Nama Karyawan" name="role_user">
                        <option value = "ADMIN">ADMIN</option>
                        <option value = "USER">USER</option>
                    </select>
                    
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    </div>
            </form>
        </div>
    </div>
</div>