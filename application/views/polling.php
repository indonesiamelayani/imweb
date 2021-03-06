<div class="page-wrapper">
    <!-- ===== Page-Container ===== -->
    <div class="container-fluid">
        <div class="white-box">
            <h3 class="box-title">Polling</h3>
            <div class="table-responsive">
                <table id="myTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Judul Polling</th>
                            <th>Data</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($list_poll->result_array() as $i) {
                            $id    = $i['id'];
                            $judul = $i['judul_polling']; ?>
                            <tr>
                                <td><?php echo $judul ?></td>
                                <td>
                                    <form action="<?php echo base_url() ?>admin/result_poll" method="post">
                                        <input type="hidden" name="id_judul" value="<?php echo $id ?>">
                                        <button type="submit" class="btn btn-default btn-rounded"> Detail </button>
                                    </form>
                                </td>
                                <td>
                                    <!-- <button type="button" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#modaltambahopsi<?php echo $id ?>" data-whatever="@mdo">
                                        Tambah Opsi
                                    </button> -->
                                    <button type="button" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#modaledit<?php echo $id ?>" data-whatever="@mdo">
                                        Ubah
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
                    <button type="button" style="margin: 12px 0px;" class="btn btn-danger btn-rounded" data-toggle="modal" data-target="#modaltambah" data-whatever="@mdo">
                        Buat Polling
                    </button>
                </table>

            </div>
        </div>
    </div>
</div>

<!-- Modal Tambahh Polling -->
<div class="modal fade" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Buat Polling</h4>
            </div>
            <form method="post" action="<?php echo base_url() ?>admin/polling/tambah">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label" for="example-email">Judul Polling :</label>
                        <input type="text" name="judul" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Jumlah Opsi</label>
                        <select class="form-control" id="jml_opsi">
                            <option selected>--Pilih Jumlah Opsi--</option>
                            <?php
                            for ($i = 1; $i <= 10; $i++) { ?>
                                <option value="<?php echo $i ?>"><?php echo $i ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>
                    <div id="opsi" class="row">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-rounded btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger btn-rounded pull-right">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
foreach ($list_poll->result_array() as $i) {
    $id         = $i['id'];
    $judul      = $i['judul_polling'];
    $list_opsi  = $this->MY_Model->getListOrderby($this->table, array('id_judul' => $id), 'id');

?>
    <!-- Modal Tambahh Opsi -->
    <div class="modal fade" id="modaltambahopsi<?php echo $id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius: 10px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Tambah Opsi</h4>
                </div>
                <form method="post" action="<?php echo base_url() ?>admin/polling/tambahOpsi">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Tambah Opsi</label>
                            <select class="form-control jml_opsi_edit">
                                <option selected>--Pilih Jumlah Opsi--</option>
                                <?php
                                for ($i = 1; $i <= 10; $i++) { ?>
                                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                <?php }
                                ?>
                            </select>
                        </div>
                        <div class="row opsi_edit">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id_judul" value="<?php echo $id ?>">
                        <button type="button" class="btn btn-rounded btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger btn-rounded pull-right">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal edit Polling -->
    <div class="modal fade" id="modaledit<?php echo $id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius: 10px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Edit Polling</h4>
                </div>
                <form method="post" action="<?php echo base_url() ?>admin/polling/edit">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label" for="example-email">Judul Polling :</label>
                            <input type="hidden" name="id_judul" value="<?php echo $id ?>">
                            <input type="text" name="judul" class="form-control" value="<?php echo $judul ?>" required>
                        </div>
                        <div class="row">
                            <div class='form-group' style="margin-top: 10px;">
                                <label class="control-label" style="padding-left:12px;" for="example-email">Edit Opsi</label><br>
                                <?php
                                $no = 1;
                                foreach ($list_opsi->result_array() as $i) {
                                    $nm_opsi = $i['nm_opsi'];
                                    $id_opsi = $i['id'];
                                    $count_opsi = $this->MY_Model->count('id_result', 'result_polling', array('id' => $id_opsi))->i;
                                ?>
                                    <div class='col-md-6'>
                                        <div class='form-group' style="margin: 10px;">
                                            <label class='control-label' for='example-email'>Opsi <?php echo $no++ ?></label>
                                            <input type="hidden" name="id_opsi[]" value="<?php echo $id_opsi ?>">
                                            <input type='text' name='nm_opsi[]' value="<?php echo $nm_opsi ?>" class='form-control' required>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-rounded btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger btn-rounded pull-right">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Hapus -->
    <div class="modal fade" id="modalhapus<?php echo $id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="border-radius: 10px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Hapus Polling</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo base_url() ?>admin/polling/hapus">
                        <input type="hidden" name="id_judul" value="<?php echo $id ?>">
                        <button type="button" class="btn btn-rounded btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger btn-rounded pull-right">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ./Modal Hapus -->

<?php } ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $('#jml_opsi').on('change', function() {
        jml_opsi = document.getElementById('jml_opsi').value;
        $.ajax({
                type: 'POST',
                url: '<?php echo base_url() ?>admin/polling/getOpsi',
                data: {
                    jml_opsi: jml_opsi,
                },
            })
            .done(function(response) {
                $('#opsi').html(response);
            });
    })
    $('.jml_opsi_edit').on('change', function() {
        jml_opsi = document.getElementsByClassName('jml_opsi_edit').value;
        $.ajax({
                type: 'POST',
                url: '<?php echo base_url() ?>admin/polling/getOpsi',
                data: {
                    jml_opsi: jml_opsi,
                },
            })
            .done(function(response) {
                $('.opsi_edit').html(response);
            });
    })
</script>