<?php
include('FeedParser.php');
$Parser = new FeedParser();
?>
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
          <?php
          foreach ($popular->result_array() as $i) {
            $id     = $i['id_artikel'];
            $image  = $i['image'];
            $judul  = $i['judul'];
            $isi    = $i['isi'];
            $jam    = $i['created_date'];
            $komen  = isset($i['countComment']) ? $i['countComment'] : 0;

          ?>
            <div class="card border-0 mb-3 bg-transparent" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4 col-sm-12">
                  <img src="<?php echo base_url() . 'files/' . $image ?>" class="w-100" style="height: 90px;" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body py-1">
                    <h5 class="card-title">
                      <a class="nav-link nopadding" href="<?php echo base_url('artikel/show/') . $id ?>"><?php echo $judul ?></a>
                    </h5>
                    <div class="row mt-4" style="font-size: 12px;">
                      <div class="col-12">
                        <small class="text-muted mr-3">
                          <img src="<?php echo base_url() ?>assets/img/ic-clock.png" alt=""> <?php echo date('H:i - d M Y', strtotime($jam)) ?>
                        </small>
                        <small class="text-muted"><img src="<?php echo base_url() ?>assets/img/ic-comment.png" alt=""> <?php echo $komen ?></small>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="mt-2" />
              </div>
            </div>
          <?php
          }
          ?>
        </div>
        <div class="col-md-12 col-sm-12">
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
                      <h4 class="text-danger">INFO TERKINI</h4>
                      <div class="carousel-inner">
                        <?php
                        $idx = 0;
                        foreach (array_slice($items, 0, 5) as $item) :
                          if ($idx == 0) { ?>
                            <div class="carousel-item active">
                              <img class="d-block w-100" src="<?php echo $item['IMG']; ?>" height="178px">
                              <div class="carousel-caption d-none d-md-block">
                                <h5><?php echo $item['TITLE']; ?></h5>
                                <a href="<?php echo $item['LINK']; ?>" class="btn btn-sm btn-danger">Baca</a>
                              </div>
                            </div>
                          <?php
                          } else { ?>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="<?php echo $item['IMG']; ?>" height="178px">
                              <div class="carousel-caption d-none d-md-block">
                                <h5><?php echo $item['TITLE']; ?></h5>
                                <a href="<?php echo $item['LINK']; ?>" class="btn btn-sm btn-danger">Baca</a>
                              </div>
                            </div>
                        <?php }
                          $idx++;
                        endforeach; ?>
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
</div>