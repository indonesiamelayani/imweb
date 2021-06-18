<!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style-public.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(needs);
      google.charts.setOnLoadCallback(workshop);
      
      function needs() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Keuangan',     29],
          ['Nasabah',      10],
          ['Kerusakan Barang',  31],
          ['Pemasukan', 30]
        ]);

        var options = {
          pieHole: 0.4,
          backgroundColor: {
            fill: 'transparent'
          },
          legend: 'none',
          chartArea: { 
            width: '80%',
            height: '80%'
          }
        };

        var chart = new google.visualization.PieChart(document.getElementById('needs'));
        chart.draw(data, options);
      }

      function workshop() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Komputer',     29],
          ['Menjahit',      10],
          ['Budidaya Ikan',  31],
          ['Budidaya Tanaman', 30]
        ]);

        var options = {
          pieHole: 0.4,
          backgroundColor: {
            fill: 'transparent'
          },
          legend: 'none',
          chartArea: { 
            width: '80%',
            height: '80%'
          }
        };

        var chart = new google.visualization.PieChart(document.getElementById('workshop'));
        chart.draw(data, options);
      }
    </script>

    <title>Indonesia Melayani</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img src="assets/img/logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto font-weight-bold">
            <a class="nav-item nav-link text-bold" href="article.html">ARTIKEL</a>
            <a class="nav-item nav-link text-bold" href="infografis.html">INFO GRAFIS</a>
            <a class="nav-item nav-link text-bold active" href="bank_data.html">BANK DATA</a>
            <a class="nav-item nav-link text-bold" href="lokakarya.html">LOKAKARYA</a>
            <a class="nav-item nav-link text-bold" href="tentang.html">TENTANG IM</a>
          </div>
        </div>
      </div>
    </nav>-->

<!-- row 1 -->
<div class="container row-3 my-3">
  <div class="row">
    <div class="col-md-6 col-sm-12">
      <h5 class="my-3">Data apa yang anda butuhkan:</h5>
      <!-- <label>Data apa yg anda butuhkan:</label> -->
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
    <!-- <div class="col-md-5 col-sm-12 ml-auto">
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
    </div> -->
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
<div class="img-fluid mr-0 ml-0 py-5" style="background: url('assets/img/bg_bank_data.png') no-repeat; background-size: cover;">
  <div class="container">
    <div class="row">
      <?php foreach ($bankdata->result_array() as $i) {
        $image  = $i['image'];
        $judul  = $i['judul'];
        $link  = $i['link'];
      ?>
        <div class="col-md-4 col-12 position-relative my-2">
          <img src="<?php echo base_url() . "files/" .  $image ?>" class="img-fluid w-100" style="height:240px !important" alt="">
          <div class="text-center position-absolute fw-bold article-shadow mx-3" style="bottom: 5%;"><a class="text-dark nav-link" href="<?php echo $link ?>"><?php echo $judul ?></a></div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>
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