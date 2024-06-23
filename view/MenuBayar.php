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

<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="fcad201b-6c71-47e7-bead-6ea1aaa2fa4e";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>

<body style="background-color: lightgrey;">
  <!-- Navbar Start -->
  <?php
  require_once 'user_header.php';
  ?>
  <!-- Navbar End -->

  <!--Content-->
  <div class="continer-fluid">
      <div class="contianer">
        <div class="header-donasi py-4">
          <h1 class="text-center">DONASI</h1>
        </div>
        <div class="content-donasi pb-lg-4">
          <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-2">
              <div class="card text-center" style="height: 400px;">
                <div class="card-header bg-primary">
                  <h3 class="pt-3 text-light">BRI</h3>
                </div>
                <div class="card-body">
                  <img class="bri" src="../img/bri.png" alt="" width="200px;">
                  <div class="card-footer pt-5">
                      <a href="BRI.php" class="btn btn-primary">Donate</a>
                </div>
              </div>
              </div>
            </div>

            <div class="col-md-2">
              <div class="card text-center" style="height: 400px;">
                <div class="card-header bg-primary">
                  <h3 class="pt-3 text-light">BNI</h3>
                </div>
                <div class="card-body">
                  <img class="bni" src="../img/bni.png" alt="" width="200px;">
                  <div class="card-footer pt-5">
                      <a href="BNI.php" class="btn btn-primary">Donate</a>
                </div>
              </div>
              </div>
            </div>

            <div class="col-md-2">
              <div class="card text-center" style="height: 400px;">
                <div class="card-header bg-primary">
                  <h3 class="pt-3 text-light">MANDIRI</h3>
                </div>
                <div class="card-body">
                  <img class="mandiri" src="../img/mandiri.png" alt="" width="200px;">
                  <div class="card-footer pt-5">
                      <a href="Mandiri.php" class="btn btn-primary">Donate</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-2">
              <div class="card text-center" style="height: 400px;">
                <div class="card-header bg-primary">
                  <h3 class="pt-3 text-light">BCA</h3>
                </div>
                <div class="card-body">
                  <img class="bca" src="../img/bca.png" alt="" width="200px;">
                  <div class="card-footer pt-5">
                  <a href="BCA.php" class="btn btn-primary">Donate</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-2">
              <div class="card text-center" style="height: 400px;">
                <div class="card-header bg-primary">
                  <h3 class="pt-3 text-light">DANA</h3>
                </div>
                <div class="card-body">
                  <img class="dana" src="../img/dana.png" alt="" width="200px;">
                  <div class="card-footer pt-5">
                    <a href="Dana.php" class="btn btn-primary">Donate</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <!--Content End-->


  <!-- Footer Start -->
  <?php
  require_once 'footer.php';
  ?>
</body>

</html>