<div class="page-wrapper">
    <!-- ===== Page-Container ===== -->
    <div class="container-fluid">
        <div class="white-box">
            <h3 class="box-title">Users</h3>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($user->result_array() as $i) {
                            $id     = $i['id'];
                            $nama   = $i['nama'];
                            $role   = $i['role'];

                            if ($role == 1) $status = 'Administrator';
                            else $status = 'Editor'; ?>

                            <tr>
                                <td><?php echo $nama ?></td>
                                <td><?php echo $status ?></td>
                                <td>
                                    <button type="button" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#modaledit<?php echo $id ?>" data-whatever="@mdo">
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-danger  btn-rounded" data-toggle="modal" data-target="#modalhapus<?php echo $id ?>" data-whatever="@mdo">
                                        Hapus
                                    </button>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    <button type="button" class="btn btn-danger btn-rounded" data-toggle="modal" data-target="#modaltambah" data-whatever="@mdo">
                        Tambah User
                    </button>
                </table>

            </div>
        </div>
    </div>
</div>

<!-- Modal Tambahh User -->
<div class="modal fade" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Tambah User</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo base_url() ?>admin/user/tambah">
                    <div class="white-box">
                        <h3 class="box-title">Unggah Foto Profil</h3>
                        <input type="file" id="input-file-now" name="files[]" accept=".jpg,.jpeg.,png" class="dropify" />
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="example-email">Nama :</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="message-text" class="control-label">Username:</label>
                                <input type="text" name="username" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="message-text" class="control-label">Email:</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="message-text" class="control-label">Password:</label>
                                <input type="password" id="password" name="password" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="message-text" class="control-label">Ulangi Password:</label>
                                <input type="password" id="confirm_password" name="password" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Status</label>
                        <div class="radio-list">
                            <label class="radio-inline p-0">
                                <div class="radio radio-info">
                                    <input type="radio" name="role" id="radio1" value="1" required>
                                    <label for="radio1">Administrator</label>
                                </div>
                            </label>
                            <label class="radio-inline">
                                <div class="radio radio-info">
                                    <input type="radio" name="role" id="radio2" value="2">
                                    <label for="radio2">Editor </label>
                                </div>
                            </label>
                        </div>
                    </div>
                    <button type="button" class="btn btn-rounded btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger btn-rounded pull-right">Tambah User</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
foreach ($user->result_array() as $i) {
    $id     = $i['id'];
    $nama   = $i['nama'];
    $role   = $i['role'];
?>
    <!-- Modal Edit -->
    <div class="modal fade" id="modaledit<?php echo $id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="border-radius: 10px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Tambah User</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo base_url() ?>admin/user/tambah">
                        <div class="white-box">
                            <h3 class="box-title">Unggah Foto Profil</h3>
                            <input type="file" id="input-file-now" name="files[]" accept=".jpg,.jpeg.,png" class="dropify" />
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="example-email">Nama :</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="message-text" class="control-label">Username:</label>
                                    <input type="text" name="username" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="message-text" class="control-label">Email:</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="message-text" class="control-label">Password:</label>
                                    <input type="password" id="password" name="password" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="message-text" class="control-label">Ulangi Password:</label>
                                    <input type="password" id="confirm_password" name="password" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Status</label>
                            <div class="radio-list">
                                <label class="radio-inline p-0">
                                    <div class="radio radio-info">
                                        <input type="radio" name="role" id="radio1" value="1" required>
                                        <label for="radio1">Administrator</label>
                                    </div>
                                </label>
                                <label class="radio-inline">
                                    <div class="radio radio-info">
                                        <input type="radio" name="role" id="radio2" value="2">
                                        <label for="radio2">Editor </label>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <button type="button" class="btn btn-rounded btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger btn-rounded pull-right">Tambah User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Hapus -->
    <div class="modal fade" id="modalhapus<?php echo $id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="border-radius: 10px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Hapus User?</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo base_url() ?>admin/user/hapus">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <button type="button" class="btn btn-rounded btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger btn-rounded pull-right">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
}
?>
<script>
    var password = document.getElementById("password"),
        confirm_password = document.getElementById("confirm_password");

    function validatePassword() {
        if (password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
        } else {
            confirm_password.setCustomValidity('');
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>