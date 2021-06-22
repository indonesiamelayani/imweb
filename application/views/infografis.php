<div class="page-wrapper">
    <!-- ===== Page-Container ===== -->
    <div class="container-fluid">
        <div class="white-box">
            <h3 class="box-title m-b-0">Infografis</h3>
            <button type="button" style="margin: 12px 0px;" class="btn btn-danger btn-rounded" data-toggle="modal" data-target="#modaltambah" data-whatever="@mdo">
                Tambah Infografis
            </button>
            <div class="table-responsive">
                <table id="myTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Tanggal dan Waktu</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($infografis->result_array() as $i) {
                            $id_infografis = $i['id_infografis'];
                            $judul      = $i['judul'];
                            $tanggal    = $i['created_date'];
                            // $count = $this->MY_Model->count_data($komen);
                        ?>
                            <tr>
                                <td><?php echo $judul ?></td>
                                <td><?php echo date('D, d M Y', strtotime($tanggal))  ?> WIB</td>
                                <td>
                                    <button type="button" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#modaledit<?php echo $id_infografis ?>" data-whatever="@mdo">
                                        Ubah
                                    </button>
                                    <button type="button" class="btn btn-danger  btn-rounded" data-toggle="modal" data-target="#modalhapus<?php echo $id_infografis ?>" data-whatever="@mdo">
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
<div class="modal fade" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Tambah infografis</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo base_url() ?>admin/infografisnew/tambah" enctype="multipart/form-data">
                    <div class="white-box">
                        <h3 class="box-title">Unggah Foto</h3>
                        <input type="file" name="file[]" id="input-file-now-custom-2" class="dropify" data-height="500" required />
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="example-email">Judul :</label>
                        <input type="text" name="judul" class="form-control" required>
                    </div>
                    <button type="button" class="btn btn-rounded btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger btn-rounded pull-right">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
foreach ($infografis->result_array() as $i) {
    $id_infografis = $i['id_infografis'];
    $judul      = $i['judul'];
    $foto       = $i['image'];
?>
    <!-- Modal Tambahh Edit -->
    <div class="modal fade" id="modaledit<?php echo $id_infografis ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="border-radius: 10px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Edit infografis</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo base_url() ?>admin/infografisnew/edit" enctype="multipart/form-data">
                        <div class="white-box">
                            <h3 class="box-title">Unggah Foto</h3>
                            <input type="file" name="file[]" id="input-file-now-custom-2" class="dropify" data-height="500" data-default-file="<?php echo base_url() ?>files/<?php echo $foto ?>" />
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="example-email">Judul :</label>
                            <input type="text" name="judul" class="form-control" value="<?php echo $judul ?>" required>
                        </div>
                        <input type="hidden" name="id_infografis" value="<?php echo $id_infografis ?>">
                        <button type="button" class="btn btn-rounded btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger btn-rounded pull-right">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Hapus -->
    <div class="modal fade" id="modalhapus<?php echo $id_infografis ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="border-radius: 10px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Hapus infografis</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo base_url() ?>admin/infografisnew/hapus">
                        <input type="hidden" name="id_infografis" value="<?php echo $id_infografis ?>">
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