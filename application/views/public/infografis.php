    <!-- row 1 -->
    <div class="container mt-3">
      <div class="row">
        <div class="col-12">
          <h1>Info <span class="text-danger">Grafis</span></h1>
          <div class="row">
            <?php foreach ($info->result_array() as $i) {
          $image  = $i['image'];
          $judul  = $i['judul'];
        ?>
            <div class="col-md-4 my-3">
              <img class="img-fluid" src="<?php echo base_url() . "files/" .  $image ?>" alt="">
              <h5 class="bg-danger text-white py-2 pl-2 mb-3"><?php echo $judul ?></h5>
            </div>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
    <!-- row 1 close -->