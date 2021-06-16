<div class="container row-1 my-3">
  <div class="row">
    <div class="col-12 col-md-7">
      <h2><?php echo $utama->judul ?></h2>
      <span class="text-secondary d-block"><?php echo date('l, d F Y | H:i', strtotime($utama->created_date)) ?> WIB</span>
      <!-- Kamis, 11 Februari 2021 | 20:03 WIB -->
      <span class="text-secondary">Oleh : <?php echo $utama->created_by ?></span>
      <div class="row">
        <div class="col-md-12">
          <img class="img-header img-fluid w-100" src="<?php echo base_url() . 'files/' . $utama->image ?>" height="709" alt="">
          <p class="my-2 text-justify">
            <?php echo $utama->isi ?>
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-5 col-sm-12">
      <div class="row">
        <div class="col-12">
          <h4 class="text-danger">Popular</h4>
          <div class="card border-0 mb-3 bg-transparent" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4 col-sm-12">
                <img src="<?php echo base_url() ?>assets/img/logo-im.jpg" class="w-100" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body py-1">
                  <h5 class="card-title"><a class="nav-link nopadding" href="#">Pemkot Bekasi Targetkan Lampu Jalan di Kayuringin Nyala Minggu Ini</a></h5>
                  <div class="row mt-4" style="font-size: 12px;">
                    <div class="col-12">
                      <small class="text-muted mr-3"><img src="<?php echo base_url() ?>assets/img/ic-clock.png" alt=""> 09:25 - 12 Feb 2021</small>
                      <small class="text-muted"><img src="<?php echo base_url() ?>assets/img/ic-comment.png" alt=""> 90</small>
                    </div>
                  </div>
                </div>
              </div>
              <hr class="mt-2" />
            </div>
          </div>
          <div class="card border-0 mb-3 bg-transparent" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4 col-sm-12">
                <img src="<?php echo base_url() ?>assets/img/logo-im.jpg" class="w-100" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body py-1">
                  <h5 class="card-title"><a class="nav-link nopadding" href="#">Pemkot Bekasi Targetkan Lampu Jalan di Kayuringin Nyala Minggu Ini</a></h5>
                  <div class="row mt-4" style="font-size: 12px;">
                    <div class="col-12">
                      <small class="text-muted mr-3"><img src="<?php echo base_url() ?>assets/img/ic-clock.png" alt=""> 09:25 - 12 Feb 2021</small>
                      <small class="text-muted"><img src="<?php echo base_url() ?>assets/img/ic-comment.png" alt=""> 90</small>
                    </div>
                  </div>
                </div>
              </div>
              <hr class="mt-2" />
            </div>
          </div>
          <div class="card border-0 mb-3 bg-transparent" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4 col-sm-12">
                <img src="<?php echo base_url() ?>assets/img/logo-im.jpg" class="w-100" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body py-1">
                  <h5 class="card-title"><a class="nav-link nopadding" href="#">Pemkot Bekasi Targetkan Lampu Jalan di Kayuringin Nyala Minggu Ini</a></h5>
                  <div class="row mt-4" style="font-size: 12px;">
                    <div class="col-12">
                      <small class="text-muted mr-3"><img src="<?php echo base_url() ?>assets/img/ic-clock.png" alt=""> 09:25 - 12 Feb 2021</small>
                      <small class="text-muted"><img src="<?php echo base_url() ?>assets/img/ic-comment.png" alt=""> 90</small>
                    </div>
                  </div>
                </div>
              </div>
              <hr class="mt-2" />
            </div>
          </div>
        </div>
        <div class="col-md-12 col-sm-12">
          <h4 class="text-danger">INFO TERKINI</h4>
          <div class="row">
            <div class="col-12 my-2">
              <img src="<?php echo base_url() ?>assets/img/img-info1.png" alt="">
            </div>
            <div class="col-12">
              <img src="<?php echo base_url() ?>assets/img/img-info2.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>