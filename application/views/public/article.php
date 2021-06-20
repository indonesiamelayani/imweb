<?php
include('FeedParser.php');
$Parser = new FeedParser();
?>
<div class="container">
  <div class="row">
    <div class="col-12 col-md-5 ml-auto">
      <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
        <div class="input-group">
          <input type="search" placeholder="Cari Artikel" aria-describedby="button-search" class="form-control border-0 bg-light">
          <div class="input-group-append">
            <button id="button-search" type="submit" class="btn btn-link text-primary"><i class="fas fa-search"></i></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- row 1 -->
<div class="container row-1 my-3">
  <div class="row">
    <div class="col-md-7 col-sm-12 mb-3">
      <img class="img-header w-100" src="<?php echo base_url() . "files/" .  $besar->image ?>" style="height: 455px;" alt="">
      <div class="position-relative d-block" style="top: -9%;">
        <a class="text-dark nav-link position-absolute px-2 d-inline-block" href="<?php echo base_url('artikel/show/') . $besar->id_artikel ?>">
          <h5><?php echo word_limiter($besar->judul, 8)  ?></h5>
        </a>
        <div class="shadow-box" style="top: -7%;"></div>
      </div>
    </div>
    <div class="col-md-5 col-sm-12">
      <div class="row">
        <?php foreach ($kanan->result_array() as $i) {
          $id     = $i['id_artikel'];
          $image  = $i['image'];
          $judul  = $i['judul'];
          $isi    = $i['isi'];
          $jam    = $i['created_date'];
          $komen  = isset($i['countComment']) ? $i['countComment'] : 0;
        ?>

          <div class="col-12">
            <div class="card border-0 mb-3 bg-transparent" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="<?php echo base_url() . "files/" .  $image ?>" class="w-100 h-141" alt="<?php echo $judul ?>">
                </div>
                <div class="col-md-8">
                  <div class="card-body py-1" style="padding-right: 0 !important;">
                    <h5 class="card-title size-18"><a class="nav-link nopadding" href="<?php echo base_url('artikel/show/') . $id ?>"><?php echo $judul ?></a></h5>
                    <p class="card-text size-14">
                      <?php echo word_limiter($isi, 23) ?>
                    </p>
                    <div class="row" style="font-size: 12px;">
                      <div class="col-8">
                        <small class="text-muted mr-2"><img src="assets/img/ic-clock.png" alt=""> <?php echo date('H:i - d M Y', strtotime($jam)) ?></small>
                        <small class="text-muted"><img src="assets/img/ic-comment.png" alt=""> <?php echo $komen ?></small>
                      </div>
                      <div class="col-4 text-end">
                        <a href="<?php echo base_url('artikel/show/') . $id ?>" class="btn btn-sm btn-danger bg-blue border-0">Readmore</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <hr class="nopadding" />
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
<!-- row 1 close -->

<!-- row 2 -->
<div class="container row-2 my-3">
  <div class="row">
    <div class="col-md-3 col-sm-12 position-relative my-2">
      <img src="<?php echo base_url() . "files/" .  $politik->image ?>" class="w-100 h-240" alt="">
      <div class="position-absolute" style="top: 20px;">
        <div class="badge bg-danger text-wrap py-2 my-auto px-auto size-20" style="width: 6rem;">
          <?php echo $politik->kategori ?>
        </div>
      </div>
      <div class="text-center position-absolute fw-bold article-shadow mx-3" style="bottom: 5%;">
        <a class="text-dark nav-link" href="<?php echo base_url('artikel/show/') . $politik->id_artikel ?>">
          <?php echo $politik->judul ?>
        </a>
      </div>
    </div>
    <div class="col-md-3 col-sm-12 position-relative my-2">
      <img src="<?php echo base_url() . "files/" .  $pelayanan->image ?>" class="w-100 h-240" alt="">
      <div class="position-absolute" style="top: 20px;">
        <div class="badge bg-danger text-wrap py-2 my-auto px-auto w-100 size-20" style="width: 6rem;">
          <?php echo $pelayanan->kategori ?>
        </div>
      </div>
      <div class="text-center position-absolute fw-bold article-shadow mx-3" style="bottom: 5%;">
        <a class="text-dark nav-link" href="<?php echo base_url('artikel/show/') . $pelayanan->id_artikel ?>">
          <?php echo $pelayanan->judul ?>
        </a>
      </div>
    </div>
    <div class="col-md-3 col-sm-12 position-relative my-2">
      <img src="<?php echo base_url() . "files/" .  $digilife->image ?>" class="w-100 h-240" alt="">
      <div class="position-absolute" style="top: 20px;">
        <div class="badge bg-danger text-wrap py-2 my-auto px-auto size-20" style="width: 6rem;">
          <?php echo $digilife->kategori ?>
        </div>
      </div>
      <div class="text-center position-absolute fw-bold article-shadow mx-3" style="bottom: 5%;">
        <a class="text-dark nav-link" href="<?php echo base_url('artikel/show/') . $digilife->id_artikel ?>">
          <?php echo $digilife->judul ?>
        </a>
      </div>
    </div>
    <div class="col-md-3 col-sm-12 position-relative my-2">
      <img src="<?php echo base_url() . "files/" .  $keamanan->image ?>" class="w-100 h-240" alt="">
      <div class="position-absolute" style="top: 20px;">
        <div class="badge bg-danger text-wrap py-2 my-auto px-auto w-100 size-20" style="width: 6rem;">
          <?php echo $keamanan->kategori ?>
        </div>
      </div>
      <div class="text-center position-absolute fw-bold article-shadow mx-3" style="bottom: 5%;">
        <a class="text-dark nav-link" href="<?php echo base_url('artikel/show/') . $keamanan->id_artikel ?>">
          <?php echo $keamanan->judul ?>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- row 2 close -->

<div class="container">
  <div class="row mb-3">
    <div class="col-md-8">
      <?php
      foreach ($baru->result_array() as $i) {
        $id     = $i['id_artikel'];
        $image  = $i['image'];
        $judul  = $i['judul'];
        $isi    = $i['isi'];
        $jam    = $i['created_date'];
        $komen  = isset($i['countComment']) ? $i['countComment'] : 0;
      ?>
        <div class="card border-0 mb-3 bg-transparent w-100">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="<?php echo base_url() . "files/" .  $image ?>" class="w-100" style="height: 140px;" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body py-1" style="padding-right: 0 !important;">
                <h5 class="card-title" style="font-size: 18px;">
                  <a class="nav-link nopadding" href="<?php echo base_url('artikel/show/') . $id ?>">
                    <?php echo $judul ?>
                  </a>
                </h5>
                <p class="card-text" style="font-size: 14px;">
                  <?php echo word_limiter($isi, 20) ?>
                </p>
                <div class="row" style="font-size: 12px;">
                  <div class="col-8">
                    <small class="text-muted mr-2"><img src="assets/img/ic-clock.png" alt=""> <?php echo date('H:i - d M Y', strtotime($jam)) ?></small>
                    <small class="text-muted"><img src="assets/img/ic-comment.png" alt=""> <?php echo $komen ?></small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr class="nopadding" />
        </div>
      <?php
      }
      ?>
    </div>
    <div class="col-md-4 col-sm-12">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <div class="row">
            <div class="col-12 my-2">
              <?php
              $Parser->parse('https://rss.tempo.co/nasional');
              $channels = $Parser->getChannels();
              $items = $Parser->getItems();

              ?>
              <div class="col-md-12 col-sm-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <h5>Berita Terkini</h5>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="assets/img/logo-im.jpg" height="178px">
                    </div>
                    <?php foreach (array_slice($items, 0, 5) as $item) : ?>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo $item['IMG']; ?>" height="178px">
                        <div class="carousel-caption d-none d-md-block">
                          <h5><?php echo $item['TITLE']; ?></h5>
                          <a href="<?php echo $item['LINK']; ?>" class="btn btn-sm btn-danger">Baca</a>
                        </div>
                      </div>
                    <?php endforeach; ?>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>

          </div>
          <div class="col-12">
            <img class="w-100" src="assets/img/img-info2.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>