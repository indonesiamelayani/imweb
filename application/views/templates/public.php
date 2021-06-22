<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/plugins/images/logo_im_sm.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style-public.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- google chart -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


    <title>Indonesia Melayani</title>
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url('home') ?>">
                <img src="<?php echo base_url() ?>assets/img/logo3.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto font-weight-bold">
                    <a class="nav-item nav-link text-bold <?= $this->uri->segment(1) == "artikel"  ? "active" : "" ?>" href="<?php echo base_url('artikel') ?>">ARTIKEL</a>
                    <a class="nav-item nav-link text-bold <?= $this->uri->segment(1) == "infografis"  ? "active" : "" ?>" href="<?php echo base_url('infografis') ?>">INFO GRAFIS</a>
                    <a class="nav-item nav-link text-bold <?= $this->uri->segment(1) == "bankdata"  ? "active" : "" ?>" href="<?php echo base_url('bankdata') ?>">BANK DATA</a>
                    <a class="nav-item nav-link text-bold <?= $this->uri->segment(1) == "lokakarya"  ? "active" : "" ?>" href="<?php echo base_url('lokakarya') ?>">LOKAKARYA</a>
                    <a class="nav-item nav-link text-bold <?= $this->uri->segment(1) == "tentang"  ? "active" : "" ?>" href="<?php echo base_url('tentang') ?>">TENTANG IM</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- navbar close -->

    <?php $this->load->view($content) ?>


    <!-- footer -->
    <footer class="bg-blue text-white text-lg-start">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5>Main Office & Project</h5>
                    <span style="font-size: 14px;">
                        Yayasan Indonesia Melayani<br />
                        <?php echo $this->MY_Model->singleData('pengaturan', array('id' => '7'))->deskripsi; ?>
                    </span>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5>Daftar</h5>

                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Masukan Email">
                        <button class="btn btn-danger" type="button">Subscribe</button>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="mb-0">Follow Us</h5>
                    <?php
                    $footer = $this->MY_Model->getListOrderby('pengaturan', array('id <=' => 4), 'id')->result_array();
                    foreach ($footer as $i) { ?>
                        <a href="<?php echo $i['deskripsi'] ?>" target="_blank">
                            <img class="mx-2 my-2" src="<?php echo base_url() ?>assets/img/<?php echo strtolower($i['judul']) ?>.png" width="30" height="30" alt="<?php echo $i['judul'] ?>">
                        </a>
                    <?php
                    }
                    ?>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
            <div class="row mt-4">
                <div class="col-12" style="font-size: 12px;">
                    <!-- Copyright -->
                    © <?php echo $this->MY_Model->singleData('pengaturan', array('id' => '6'))->deskripsi; ?> <a class="text-white" href="#"><?php echo $this->MY_Model->singleData('pengaturan', array('id' => '5'))->deskripsi; ?></a>
                    <!-- Copyright -->
                </div>
            </div>
        </div>
        <!-- Grid container -->
    </footer>
    <!-- footer close -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>