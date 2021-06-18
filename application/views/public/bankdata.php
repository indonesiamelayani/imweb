<script type="text/javascript">
  google.charts.load("current", {
    packages: ["corechart"]
  });
  google.charts.setOnLoadCallback(poll2);

  function poll2() {
    var data = google.visualization.arrayToDataTable([
      ['Task', 'Hours per Day'],
      <?php foreach ($poll2_opsi->result_array() as $i) {
        $nm_opsi = $i['nm_opsi'];
        $count   = $i['count'];
      ?>['<?php echo $nm_opsi ?>', <?php echo $count ?>],
      <?php } ?>
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

    var chart = new google.visualization.PieChart(document.getElementById('poll2'));
    chart.draw(data, options);
  }
</script>

<!-- row 1 -->
<div class="container row-3 my-3">
  <div class="row">
    <div class="col-md-6 col-sm-12">
      <label><?php echo $poll2->judul_polling ?></label>
      <div class="row">
        <div class="col-md-6 col-sm-12 py-2">
          <form action="<?php echo base_url('home/pilih_polling') ?>" method="post">
            <?php
            foreach ($poll2_opsi->result_array() as $i) {
              $id       = $i['id'];
              $nm_opsi  = $i['nm_opsi'];
            ?>
              <div class="custom-control custom-radio">
                <input type="radio" id="<?php echo $id ?>" value="<?php echo $id ?>" name="id_opsi1" class="custom-control-input">
                <label class="custom-control-label" for="<?php echo $id ?>"><?php echo $nm_opsi ?></label>
              </div>
            <?php
            }
            ?>
            <button class="btn btn-sm btn-danger">Vote</button>
          </form>
        </div>
        <div class="col-md-6 col-sm-12">
          <div id="poll2" style="width: 200px; height: 200px;"></div>
        </div>
      </div>

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