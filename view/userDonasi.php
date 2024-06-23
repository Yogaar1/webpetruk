<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>PETRUK - Pengaduan Infrastruktur</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet" />
  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="../lib/animate/animate.min.css" rel="stylesheet" />
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="../css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="../css/style.css" rel="stylesheet" />
</head>

<body>
  <?php
  require_once 'user_header.php';
  ?>

  <!--Content-->
  <div class="continer-fluid">
    <div class="contianer pb-lg-4">
      <div class="header-donasi py-4">
        <h1 class="text-center">DONASI</h1>
      </div>
      <div class="content-donasi pb-lg-4">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-3">
            <div class="card text-center" style="height: 500px;">
              <div class="card-header">
                <h3 class="pt-3">INFRASTRUKTUR</h3>
              </div>
              <div class="card-body">
                <img class="imgInfra" src="../img/infrastruktur@4x.png" alt="">
                <p class="py-5">Dana yang disumbangkan akan diguakan untuk kebutuhan perbaikan jalan</p>
                <a href="MenuBayar.php" class="btn btn-primary">Donate</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card text-center" style="height: 500px;">
              <div class="card-header">
                <h3 class="pt-3">DEVELOPER</h3>
              </div>
              <div class="card-body">
                <img class="imgDev" src="../img/Dev@4x.png" alt="">
                <p class="py-5">Dana yang disumbangkan akan digunakan untuk pengembangan web agar lebih baik</p>
                <a href="MenuBayar.php" class="btn btn-primary">Donate</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="fcad201b-6c71-47e7-bead-6ea1aaa2fa4e";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>

  <!--Content End-->

  <!-- Footer Start -->
  <?php
  require_once 'footer.php';
  ?>
</body>

</html>