    <!-- row 1 -->
    <div class="container my-3">
      <div class="row flex-row-reverse">
        <div class="col-md-4 col-sm-12">
          <img class="img-header w-100" src="<?php echo base_url() . "files/" .  $besar->image ?>" alt="">
        </div>
        <div class="col-md-8 col-sm-12 py-2">
          <h2><?php echo word_limiter($besar->judul, 8)  ?></h2>
          <!-- <h2 class="text-danger">RAMAH HAM</h2> -->
          <p>
            <?php echo word_limiter($besar->isi, 80)  ?><a class="nav-link d-inline" href="<?php echo base_url('artikel/show/') . $besar->id_artikel ?>">Lebih Lanjut</a>
          </p>
        </div>
      </div>
    </div>
    <!-- row 1 close -->

    <!-- slider 1 -->
    <div class="container my-3">
      <div class="row">
        <div class="col-12">
          <img class="img-fluid w-100" src="assets/img/slider.png" alt="">
        </div>
      </div>
    </div>
    <!-- slider 1 close -->

    <!-- row 2 -->
    <div class="container row-2 my-3">
      <div class="row">
        <div class="col-md-8 col-sm-12">
          <h3>DATA</h3>
          <h3 class="text-danger">INDONESIA</h3>
          <p>
            By sponsoring a child, you can change his or her life towards a better future and allow Peduli Anak to continue providing support and opening doors to more children in need.
          </p>
        </div>
        <div class="col-md-4 col-sm-12">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <?php foreach ($info->result_array() as $i) {
          $id     = $i['id_infografis'];
          $image  = $i['image'];
        ?>
              <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo base_url() . "files/" . $image ?>" alt="First slide">
              </div>
              <?php }?>
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
    <!-- row 2 close -->

    <!-- row 3 -->
    <div class="bg-white">
      <div class="container row-3 my-3">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <img src="<?php echo base_url() . "assets/img/" . $desc->image ?>" class="w-100" height="254" alt="">
          </div>
          <div class="col-md-6 col-sm-12 my-4">
            <h3 class="header-team d-inline">Indonesia Melayani</h3>
            <p>
              <?php echo word_limiter($desc->deskripsi, 48) ?>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- row 3 close -->

    <!-- row 4 -->
    <div class="container row-3 my-3">
      <div class="row">
        <div class="col-12">
          <h3 class="my-3">Polling</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <label>Data apa yg anda butuhkan:</label>
          <div class="row">
            <div class="col-md-6 col-sm-12 py-2">
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                <label class="custom-control-label" for="customRadio1">Keuangan</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input bg-danger">
                <label class="custom-control-label" for="customRadio2">Nasabah</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input bg-danger">
                <label class="custom-control-label" for="customRadio3">Kerusakan Barang</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input bg-danger">
                <label class="custom-control-label" for="customRadio4">Pemasukan</label>
              </div>
              <button class="btn btn-sm btn-danger">Vote</button>
            </div>
            <div class="col-md-6 col-sm-12">
              <div id="needs" style="width: 200px; height: 200px;"></div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <label>Workshop/Pelatihan apa yg anda butuhkan:</label>
          <div class="row">
            <div class="col-md-6 col-sm-12 py-2">
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                <label class="custom-control-label" for="customRadio1">Komputer</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input bg-danger">
                <label class="custom-control-label" for="customRadio2">Menjahit</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input bg-danger">
                <label class="custom-control-label" for="customRadio3">Budidaya Ikan</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input bg-danger">
                <label class="custom-control-label" for="customRadio4">Budidaya Tanaman</label>
              </div>
              <button class="btn btn-sm btn-danger">Vote</button>
            </div>
            <div class="col-md-6 col-sm-12">
              <div id="workshop" style="width: 200px; height: 200px;"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- row 4 close -->

    <!-- row 5 -->
    <div class="container row-5 my-3">
      <div class="row text-center">
        <div class="col-12">
          <h3>Latest <span class="text-danger">Articles</span></h3>
        </div>
      </div>
      <div class="row mx-auto">
        <?php foreach ($kanan->result_array() as $i) {
          $id     = $i['id_artikel'];
          $image  = $i['image'];
          $judul  = $i['judul'];
          $isi    = $i['isi'];
        ?>
          <div class="col-md-3 col-sm-12 my-2">
            <div class="card">
              <img src="<?php echo base_url() . "files/" .  $image ?>" class="card-img-top w-100" style="height: 100px;" alt="...">
              <div class="card-body">
                <p class="card-text"><?php echo word_limiter($isi, 15) ?></p>
                <a href="<?php echo base_url('artikel/show/') . $id ?>" class="nav-link text-end link-danger" style="margin-right:0 !important;">> Read More</a>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
    </div>
    <!-- row 5 close -->