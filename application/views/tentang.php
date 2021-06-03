<div class="page-wrapper">
    <div class="container-fluid">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <!-- DESKRIPSI UMUM -->
                    <h3 class="box-title m-b-0">Tentang Kami</h3><br>
                    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/tentang/edit">
                        <div class="form-group">
                            <div class="col-md-12" style="margin-bottom:20px">
                                <textarea class="form-control textarea_editor" name="deskripsi[]" style="border-radius: 8px;" rows="10"><?php echo $desc->deskripsi; ?></textarea>
                            </div>
                            <div class="row" style="margin-left:0px">
                                <div class="col-sm-3 ol-md-6 col-xs-12">
                                    <input type="file" name="files[]" id="input-file-now-custom-3" class="dropify" style="border-radius: 8px;" data-height="110" data-default-file="<?php echo base_url() ?>files/<?php echo $desc->image ?>" />
                                    <!-- <input type="file" name="files[]" id="input-file-now-custom-3" class="dropify" style="border-radius: 8px;" data-height="110" required /> -->
                                </div>
                                <input type="hidden" name="old_file" value="<?php echo $desc->image ?>">
                                <input type="hidden" name="id[]" value="<?php echo $desc->id ?>">
                                <button type="submit" class="btn btn-danger pull-right" style="margin:150px 25px 0px;">Simpan</button>
                            </div>
                        </div>
                    </form>
                    <!-- ./DESKRIPSI UMUM -->
                    <hr>
                    <!-- KARYA DAN KKARSA-->
                    <div class="row">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/tentang/edit">
                            <?php
                            foreach ($karsa_k->result_array() as $i) {
                                $id         = $i['id'];
                                $judul      = $i['judul'];
                                $deskripsi  = $i['deskripsi'];
                                $image      = $i['image'] ?>
                                <div class="col-md-4" style="padding-right: 30px;">
                                    <div class="form-group">
                                        <input type="hidden" name="id[]" value="<?php echo $id ?>">
                                        <h3 class="box-title" style="padding-left: 15px;"><?php echo $judul ?></h3>
                                        <div class="col-md-12" style="margin-bottom:20px">
                                            <textarea class="form-control" name="deskripsi[]" style="border-radius: 8px;" rows="3"><?php echo $deskripsi ?></textarea>
                                        </div>
                                        <div class="row" style="margin-left:0px">
                                            <div class="col-sm-8">
                                                <input type="file" name="files[]" id="input-file-now-custom-3" class="dropify" style="border-radius: 8px;" data-height="110" data-default-file="<?php echo base_url() ?>files/<?php echo $image ?>" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <button type="submit" class="btn btn-danger pull-right" style="margin:300px 25px 0px;">Simpan</button>
                        </form>
                    </div>
                    <!-- ./KARSA DAN KARYA -->
                    <hr>
                    <!-- STRUKTUR ALUR PUBLIKASI -->
                    <div class="row">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/tentang/edit">
                            <?php
                            foreach ($manajemen->result_array() as $i) {
                                $id     = $i['id'];
                                $judul  = $i['judul'];
                                $image  = $i['image']; ?>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <h3 class="box-title" style="padding-left: 15px;"><?php echo $judul ?></h3>
                                        <input type="hidden" name="group[]" value="<?php echo $this->common_variable->getGroupKajianPenelitian() ?>">
                                        <input type="hidden" name="id[]" value="<?php echo $id ?>">
                                        <div class="row" style="margin-left:0px">
                                            <div class="col-sm-12">
                                                <input type="file" name="files[]" id="input-file-now-custom-3" class="dropify" style="border-radius: 8px;" data-height="110" data-default-file="<?php echo base_url() ?>files/<?php echo $image ?>" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <button type="submit" class="btn btn-danger pull-right" style="margin:190px 25px 0px;">Simpan</button>
                        </form>
                    </div>
                    <!-- ./STRUKTUR ALUR PUBLIKASI -->
                    <hr>
                    <!-- KAJIAN PENERBITAN -->
                    <h3 class="box-title m-b-0">Kajian Penerbitan</h3><br>
                    <div class="row">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/tentang/edit">
                            <?php
                            foreach ($kajian->result_array() as $i) {
                                $id         = $i['id'];
                                $judul      = $i['judul'];
                                $deskripsi  = $i['deskripsi'];
                                $image      = $i['image'] ?>
                                <div class="col-md-3" style="padding-right: 10px;">
                                    <div class="form-group">
                                        <input type="hidden" name="id[]" value="<?php echo $id ?>">
                                        <input type="hidden" name="group[]" value="<?php echo $this->common_variable->getGroupKajianPenelitian() ?>">
                                        <h3 class="box-title" style="padding-left: 15px;"><?php echo $judul ?></h3>
                                        <div class="col-md-12" style="margin-bottom:20px">
                                            <textarea class="form-control" name="deskripsi[]" style="border-radius: 8px;" rows="3"><?php echo $deskripsi ?></textarea>
                                        </div>
                                        <div class="row" style="margin-left:0px">
                                            <div class="col-sm-8">
                                                <input type="file" name="files[]" id="input-file-now-custom-3" class="dropify" style="border-radius: 8px;" data-height="110" data-default-file="<?php echo base_url() ?>files/<?php echo $image ?>" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <button type="submit" class="btn btn-danger pull-right" style="margin:300px 25px 0px;">Simpan</button>
                        </form>
                    </div>
                    <!-- ./KAJIAN PENERBITAN -->
                    <hr>
                    <!-- AKTIFITAS -->
                    <h3 class="box-title m-b-0">Aktifitas</h3><br>
                    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/tentang/edit">
                        <div class="row" style="margin: 5px;">
                            <?php
                            foreach ($aktifitas->result_array() as $i) {
                                $id         = $i['id'];
                                $judul      = $i['judul'];
                                $deskripsi  = $i['deskripsi'];
                            ?>
                                <input type="hidden" name="id[]" value="<?php echo $id ?>">
                                <input type="hidden" name="group[]" value="<?php echo $this->common_variable->getGroupAktifitas() ?>">
                                <div class="form-group" style="margin-bottom: 0px;">
                                    <h3 class="box-title" style="padding-left: 15px;"><?php echo $judul ?></h3>
                                    <div class="col-md-12">
                                        <textarea class="form-control" name="deskripsi[]" style="border-radius: 8px;margin-bottom: 20px;" rows="2"><?php echo $deskripsi ?></textarea>
                                    </div>
                                </div>
                            <?php }
                            ?>
                            <button type="submit" class="btn btn-danger pull-right" style="margin:20px 25px 0px;">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
</div>