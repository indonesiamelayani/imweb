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
                        <!--  -->
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
            <div class="modal-body">
                <form method="post" action="<?php echo base_url() ?>admin/polling/tambah">
                    <div class="form-group">
                        <label class="control-label" for="example-email">Judul Polling :</label>
                        <input type="text" name="judul" class="form-control" required>
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