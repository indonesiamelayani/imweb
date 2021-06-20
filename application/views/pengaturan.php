<div class="page-wrapper">
    <!-- ===== Page-Container ===== -->
    <div class="container-fluid">
        <div class="white-box">
            <h3 class="box-title m-b-0">Pengaturan</h3>
            <!-- <button type="button" style="margin: 12px 0px;" class="btn btn-danger btn-rounded" data-toggle="modal" data-target="#modaltambah" data-whatever="@mdo">
                Pengaturan
            </button> -->
            <div class="table-responsive">
                <table id="myTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Tanggal dan Waktu</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($pengaturan->result_array() as $i) {
                            $id = $i['id'];
                            $judul      = $i['judul'];
                            $deskripsi      = $i['deskripsi'];
                            $tanggal    = $i['updated'];
                            // $count = $this->MY_Model->count_data($komen);
                        ?>
                            <tr>
                                <td><?php echo $judul ?></td>
                                <td><?php echo $deskripsi ?></td>
                                <td><?php echo date('D, d M Y', strtotime($tanggal))  ?> WIB</td>
                                <td>
                                    <button type="button" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#modaledit<?php echo $id ?>" data-whatever="@mdo">
                                        Ubah
                                    </button>
                                    <button type="button" class="btn btn-danger  btn-rounded" data-toggle="modal" data-target="#modalhapus<?php echo $id ?>" data-whatever="@mdo">
                                        Hapus
                                    </button>
                                </td>
                            </tr>
                        <?php }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- Modal Tambahh Artikel -->
<!-- <div class="modal fade" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Tambah pengaturan</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo base_url() ?>admin/pengaturan/tambah" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label" for="example-email">Judul :</label>
                        <input type="text" name="judul" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="example-email">Deskripsi :</label>
                        <input type="text" name="deskripsi" class="form-control" required>
                    </div>
                    <button type="button" class="btn btn-rounded btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger btn-rounded pull-right">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div> -->

<?php
foreach ($pengaturan->result_array() as $i) {
    $id = $i['id'];
    $judul      = $i['judul'];
    $deskripsi       = $i['deskripsi'];
?>
    <!-- Modal Tambahh Edit -->
    <div class="modal fade" id="modaledit<?php echo $id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="border-radius: 10px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Edit pengaturan</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo base_url() ?>admin/pengaturan/edit" enctype="multipart/form-data">
                        
                        <div class="form-group">
                            <label class="control-label" for="example-email">Judul :</label>
                            <input type="text" name="judul" class="form-control" value="<?php echo $judul ?>" required readonly>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="example-email">Deskripsi :</label>
                            <input type="text" name="deskripsi" class="form-control" value="<?php echo $deskripsi ?>" required>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <button type="button" class="btn btn-rounded btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger btn-rounded pull-right">Simpan</button>
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
                    <h4 class="modal-title" id="exampleModalLabel">Hapus pengaturan</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo base_url() ?>admin/pengaturan/hapus">
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