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
                            <th>Responden</th>
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
                                <td></td>
                                <td>
                                    <button type="button" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#modaledit<?php echo $id ?>" data-whatever="@mdo">
                                        Detail
                                    </button>
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
</script>