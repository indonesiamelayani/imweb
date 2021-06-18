    <!-- row 1 -->
    <div class="container row-3 my-3">
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <h5 class="my-3">Lokakarya/Pelatihan apa yg anda butuhkan:</h5>
          <label>Data apa yg anda butuhkan:</label>
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
              <button class="btn btn-sm btn-danger my-3">Vote</button>
            </div>
            <div class="col-md-6 col-sm-12">
              <figure class="highcharts-figure">
                <div id="chart_result_polling"></div>
              </figure>
            </div>
          </div>
        </div>
        <div class="col-md-5 col-sm-12 ml-auto">
          <div class="row">
            <div class="col-12">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/img/logo-im.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/logo-im.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/logo-im.jpg" alt="Third slide">
                  </div>
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
          <div class="row">
            <div class="col-12 text-right">
              <a href="#" class="btn btn-sm btn-danger  my-2">Daftar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- row 1 close -->

    <!-- row 2 -->
    <div class="container my-3 py-5">
      <div class="row">
        <div class="col-12">
          <h1>Gallery <span class="text-danger">Kegiatan</span></h1>
        </div>
        <?php foreach ($galeri->result_array() as $i) {
          $image  = $i['image'];
          $judul  = $i['judul'];
        ?>
          <div class="col-md-3 col-sm-12 position-relative my-2 d-block">
            <img src="<?php echo base_url() . "files/" .  $image ?>" class="w-100" style="height:240px !important" alt="">
            <div class="position-absolute fw-bold article-shadow mx-3" style="bottom: 5%;"><a class="text-dark nav-link" href="#"><?php echo $judul ?></a></div>
          </div>
        <?php } ?>
      </div>
    </div>
    <!-- row 2 -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script>
      // $('#jml_opsi').on('change', function() {});
      Highcharts.chart('chart_result_polling', {
        chart: {
          plotBackgroundColor: null,
          plotBorderWidth: null,
          plotShadow: false,
          type: 'pie'
        },
        title: {
          text: '<?php echo $info_judul->judul_polling ?>'
        },
        tooltip: {
          pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        accessibility: {
          point: {
            valueSuffix: '%'
          }
        },
        plotOptions: {
          pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
              enabled: false
            },
            showInLegend: true
          }
        },
        series: [{
          name: 'Opsi',
          colorByPoint: true,


          data: [
            <?php
            foreach ($info_opsi->result_array() as $i) {
              $id_opsi    = $i['id'];
              $nm_opsi    = $i['nm_opsi'];
              $count_opsi = $this->MY_Model->count('id_result', 'result_polling', array('id' => $id_opsi))->i;
            ?> {
                name: '<?php echo $nm_opsi ?>',
                y: <?php echo $count_opsi ?>,
              },
            <?php
            }
            ?>
          ]
        }]
      });
    </script>