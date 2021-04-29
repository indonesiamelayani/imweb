<div class="page-wrapper">
  <!-- ===== Page-Container ===== -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-sm-3 col-xs-12">
        <div class="white-box analytics-info">
          <h3 class="box-title">Pengunjung Hari Ini</h3>
          <ul class="list-inline">
            <li class="text-center">
              <span class="counter text-default" style="font-size: 30px;font-weight:bold;">
                <?php echo $today ?>
              </span>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-sm-3 col-xs-12">
        <div class="white-box analytics-info">
          <h3 class="box-title">Jumlah Artikel</h3>
          <ul class="list-inline">
            <li class="text-center">
              <span class="counter text-default" style="font-size: 30px;font-weight:bold;">
                <?php echo $artikel ?>
              </span>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-sm-3 col-xs-12">
        <div class="white-box analytics-info">
          <h3 class="box-title">Jumlah Komentar</h3>
          <ul class="list-inline">
            <li class="text-center">
              <span class="counter text-default" style="font-size: 30px;font-weight:bold;">
                <?php echo $komentar ?>
              </span>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="white-box stat-widget">
          <div class="row">
            <div class="col-sm-3">
              <h4 class="box-title">Pengunjung Bulanan</h4>
            </div>
            <div class="col-sm-9">
              <select class="custom-select" id="bulan">
                <option selected>-Pilih Bulan-</option>
                <?php
                for ($i = 0; $i < 12; $i++) { ?>
                  <option value="<?php echo $i ?>"><?php echo $bulan[$i] ?></option>
                <?php
                }
                ?>
              </select>
              <ul class="list-inline">
              </ul>
            </div>
            <div class="white-box">
              <h3 class="box-title"></h3>
              <div id="bulan_hasil"></div>
              <!-- <div id="bulanan"></div> -->
            </div>
          </div>
          <!-- <div id="myfirstchart1" style="height: 250px;"></div> -->
          <!-- <div class="home"></div> -->
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ===== Page-Container-End ===== -->
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $('#bulan').on('change', function() {
    pilih_bulan = document.getElementById('bulan').value;
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url() ?>admin/home/getmonthly',
        data: {
          bulan: pilih_bulan,
        },
      })
      .done(function(response) {
        $('#bulan_hasil').html(response);
      });
  })
</script>