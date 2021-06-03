<!-- row 1 -->
<div class="container my-3">
  <div class="row">
    <div class="col-md-4 col-sm-12">
      <img class="img-fluid" src="assets/img/frame_tentang_1.png" alt="">
      <div class="position-absolute" style="top: 12%; left: 10%; max-width: 296px; max-height: 394px;">
        <img src="assets/img/img_tentang_kami_1.png" alt="">
      </div>
    </div>
    <div class="col-md-8 col-sm-12">
      <h1><?php echo nl2br($desc->judul) ?> <span class="text-danger">Kami</span></h1>
      <p><?php echo $desc->deskripsi; ?></p>
    </div>
  </div>
</div>
<!-- row 1 close -->

<!-- row 2 -->
<div class="mb-3 img-fluid py-5 tujuan">
  <div class="row mx-5">
    <div class="col-12 col-md-3 position-relative my-2 ml-auto">
      <div class="position-absolute tujuan-1">
        <h1><?php echo $karsa->judul ?></h1>
        <p class="text-muted d-inline-block"><?php echo $karsa->deskripsi ?></p>
        <img class="img-fluid" src="<?php echo base_url() . "files/" . $karsa->image ?>" alt="" style="max-width: 220px;">
      </div>
      <img class="img-fluid" src="<?php echo base_url() ?>assets/img/frame_tentang_2.png" alt="">
    </div>
    <div class="col-12 col-md-3 position-relative my-2 mr-auto">
      <div class="position-absolute tujuan-2">
        <h1 class="text-danger"><?php echo $karya->judul ?></h1>
        <p class="text-muted d-inline-block"><?php echo $karya->deskripsi ?></p>
        <img class="img-fluid" src="<?php echo base_url() . "files/" . $karya->image ?>" alt="" style="max-width: 220px;">
      </div>
      <img class="img-fluid" src="<?php echo base_url() ?>assets/img/frame_tentang_3.png" alt="">
    </div>
  </div>
</div>
<!-- row 2 close -->

<!-- row 3 -->
<div class="container py-5">
  <div class="row">
    <div class="col-md-12">
      <h1><?php echo $struktur->judul ?></h1>
      <img class="img-fluid d-block mx-auto my-3" src="<?php echo base_url() . "files/" . $struktur->image ?>" alt="">
    </div>
  </div>
</div>
<!-- row 3 close -->

<!-- row 4 -->
<div class="container mt-3">
  <div class="row">
    <div class="col-12">
      <h1>Alur <span class="text-danger">Publikasi</span></h1>
      <div class="row">
        <?php foreach ($alur_p->result_array() as $i) {
          $judul      = $i['judul'];
          $deskripsi  = $i['deskripsi'];
          $image      = $i['image'] ?>
          <div class="col-md-3 text-center mb-5">
            <img class="img-fluid my-5" src="<?php echo base_url() . "files/" . $image ?>" alt="">
            <h5 class="bg-danger font-weight-bold text-white text-center py-2 mb-3"><?php echo $judul ?></h5>
            <p class="text-muted"><?php echo $deskripsi ?></p>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 text-center">
      <img src="assets/img/img_about.png" class="w-75 mt-2" alt="">
    </div>
  </div>
</div>
<!-- row 4 close -->

<!-- row 5 -->
<div class="mb-3 img-fluid px-5 py-5 w-100" style="background: url('assets/img/bg_mekanisme.png') no-repeat; background-size: cover;">
  <h1 class="text-white text-center"><?php echo $publikasi->judul ?></h1>
  <img class="img-fluid d-block mx-auto py-auto" src="<?php echo base_url() . "files/" . $publikasi->image ?>" alt="">
</div>
<!-- row 5 close -->

<!-- row 6 -->
<div class="container my-3 py-5">
  <div class="row">
    <div class="col-md-12">
      <h1>Kajian <span class="text-danger">Penerbitan</span></h1>
      <div class="row">
        <?php foreach ($kajian->result_array() as $i) {
          $judul      = $i['judul'];
          $deskripsi  = $i['deskripsi'];
          $image      = $i['image'] ?>
          <div class="col-md-3 mb-3">
            <img class="img-fluid my-3 text-center" src="<?php echo base_url() . "files/" . $image ?>" alt="">
            <h5 class="mb-3 text-muted font-weight-bold"><?php echo $judul ?></h5>
            <p class="text-muted"><?php echo $deskripsi ?></p>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
<!-- row 6 close -->

<!-- row 7 -->
<div class="container my-3 py-5">
  <div class="row">
    <div class="col-12">
      <h1>Aktifitas</h1>
    </div>
    <?php foreach ($aktivitas->result_array() as $i) {
      $judul      = $i['judul'];
      $deskripsi  = $i['deskripsi']; ?>
      <div class="col-12 text-muted">
        <h5><?php echo $judul ?></h5>
        <p><?php echo $deskripsi ?></p>
        <hr />
      </div>
    <?php } ?>

  </div>

</div>
<!-- row 7` close -->