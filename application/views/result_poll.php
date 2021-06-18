<div class="page-wrapper">
    <!-- ===== Page-Container ===== -->
    <div class="container-fluid">
        <div class="white-box">
            <div class="row">
                <h3 class="box-title">Polling</h3>
                <figure class="highcharts-figure">
                    <div id="chart_result_polling"></div>
                </figure>
            </div>
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
                    $count_opsi = $i['count'];
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