<div class="page-wrapper">
    <!-- ===== Page-Container ===== -->
    <div class="container-fluid">
        <div class="white-box">
            <h3 class="box-title m-b-0">Artikel</h3>
            <button type="button" style="margin: 12px 0px;" class="btn btn-danger btn-rounded" data-toggle="modal" data-target="#modaltambah" data-whatever="@mdo">
                Tambah Artikel
            </button>
            <div class="table-responsive">
                <table id="myTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Tanggal dan Waktu</th>
                            <th>Dilihat</th>
                            <th>Komentar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($artikel->result_array() as $i) {
                            $id_artikel = $i['id_artikel'];
                            $judul      = word_limiter($i['judul'], 2);;
                            $tanggal    = $i['created_date'];
                            $kat        = $i['kategori'];

                            $komen = $this->MY_Model->count('komentar', 'komentar', array('id_artikel' => $id_artikel))->i;
                            $lihat = $this->MY_Model->count('id_history', 'history_artikel', array('id_artikel' => $id_artikel))->i;
                        ?>
                            <tr>
                                <td><?php echo $judul ?></td>
                                <td><?php echo $kat ?></td>
                                <td><?php echo date('D, d M Y', strtotime($tanggal))  ?> WIB</td>
                                <td><?php echo $lihat ?> Kali</td>
                                <td><?php echo $komen ?></td>
                                <td>
                                    <button type="button" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#modaledit<?php echo $id_artikel ?>" data-whatever="@mdo">
                                        Ubah
                                    </button>
                                    <button type="button" class="btn btn-danger  btn-rounded" data-toggle="modal" data-target="#modalhapus<?php echo $id_artikel ?>" data-whatever="@mdo">
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
                <h4 class="modal-title" id="exampleModalLabel">Tambah Artikel</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo base_url() ?>admin/artikel/tambah" enctype="multipart/form-data">
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col-md-6">
                            <h5 class="box-title">Unggah Banner</h5>
                            <input type="file" name="file[]" id="input-file-now-custom-2" class="dropify" data-height="200" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="example-email">Judul :</label>
                        <input type="text" name="judul" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Kategori</label>
                        <div class="radio-list">
                            <?php foreach ($kategori as $i) { ?>
                                <label class="radio-inline p-0">
                                    <div class="radio radio-info">
                                        <input type="radio" name="kategori" id="<?php echo $i ?>" value="<?php echo $i ?>" required>
                                        <label for="<?php echo $i ?>"><?php echo $i ?></label>
                                    </div>
                                </label>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Isi :</label>
                        <textarea class="tambah form-control" name="isi" rows="15" placeholder="Enter text ..." required></textarea>
                    </div>
                    <button type="button" class="btn btn-rounded btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger btn-rounded pull-right">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
foreach ($artikel->result_array() as $i) {
    $id_artikel = $i['id_artikel'];
    $judul      = $i['judul'];
    $isi        = $i['isi'];
    $image      = $i['image'];
?>
    <!-- Modal Tambahh Edit -->
    <div class="modal fade" id="modaledit<?php echo $id_artikel ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="border-radius: 10px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Edit Artikel</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo base_url() ?>admin/artikel/edit" enctype="multipart/form-data">
                        <div class="row" style="margin-bottom: 25px;">
                            <div class="col-md-6">
                                <h5 class="box-title">Unggah Banner</h5>
                                <input type="file" name="file[]" id="<?php echo $id_artikel ?>" class="dropify" data-height="200" data-default-file="<?php echo base_url() ?>files/<?php echo $image ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="example-email">Judul :</label>
                            <input type="text" name="judul" class="form-control" value="<?php echo $judul ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Isi :</label>
                            <textarea class="form-control" rows="15" name="isi" placeholder="Enter text ..."><?php echo $isi ?></textarea>
                        </div>
                        <input type="hidden" name="id_artikel" value="<?php echo $id_artikel ?>">
                        <button type="button" class="btn btn-rounded btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger btn-rounded pull-right">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Hapus -->
    <div class="modal fade" id="modalhapus<?php echo $id_artikel ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="border-radius: 10px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Hapus Artikel</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo base_url() ?>admin/artikel/hapus">
                        <input type="hidden" name="id_artikel" value="<?php echo $id_artikel ?>">
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
<!-- <script>edit -->