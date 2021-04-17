<div class="page-wrapper">
    <div class="container-fluid">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <!-- DESKRIPSI UMUM -->
                    <h2 class="box-title m-b-0">Halaman</h3><br>
                    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/halaman/edit">
                    <h4>Judul</h4>
                        <div class="form-group">
                            <div class="col-md-12" style="margin-bottom:20px">
                                <textarea class="form-control" name="judul" style="border-radius: 8px;" rows="2"><?php echo $halaman->judul; ?></textarea>
                            </div>
                        <br>
                        <h4>Deskripsi</h4>
                        <div class="form-group">
                            <div class="col-md-12" style="margin-bottom:20px">
                                <textarea class="form-control" name="deskripsi" style="border-radius: 8px;" rows="10"><?php echo $halaman->deskripsi; ?></textarea>
                            </div>

                            <br>
                            <h4>Image</h4>
                            <?php $json = $halaman->image;
                                  $obj = json_decode($json, TRUE);
                                    foreach($obj as $key => $value) 
                                    {?>
                            <div class="row" style="margin-left:0px">
                                <div class="col-sm-3 ol-md-6 col-xs-12">
                                    <input type="file" name="files[]" id="input-file-now-custom-3" class="dropify" style="border-radius: 8px;" data-height="110" data-default-file="<?php echo base_url() ?>files/<?php echo $value ?>" />
                                </div>
                                <?php }?>
                                <input type="hidden" name="old_file" value="<?php echo $halaman->image ?>">
                                <input type="hidden" name="id[]" value="<?php echo $halaman->id ?>">
                                <button type="submit" class="btn btn-danger pull-right" style="margin:150px 25px 0px;">Simpan</button>
                            </div>
                        </div>
                    </form>
                    <!-- ./DESKRIPSI UMUM -->
              </div>
              </div>
              </div>
    </div>
</div>