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
                                <textarea class="form-control" name="deskripsi[]" style="border-radius: 8px;" rows="10"><?php echo $desc->deskripsi; ?></textarea>
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
                                <div class="form-group" style="margin-bottom: 20px;">
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
                    <!-- ./AKTIFITAS -->
                    <!-- <div class="form-group">
                        <label class="col-md-12" for="example-email">Email <span class="help"> e.g. "example@gmail.com"</span></label>
                        <div class="col-md-12">
                            <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Password</label>
                        <div class="col-md-12">
                            <input type="password" class="form-control" value="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Placeholder</label>
                        <div class="col-md-12">
                            <textarea class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Text area</label>
                        <div class="col-md-12">
                            <textarea class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Input Select</label>
                        <div class="col-sm-12">
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">File upload</label>
                        <div class="col-sm-12">
                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                    <input type="file" name="..."> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Helping text</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" placeholder="Helping text"> <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
</div>