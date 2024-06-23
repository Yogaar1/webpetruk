<?php
  include_once '../functions/db.php'
  ?>

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

  <!-- Animasi-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body style="background-color: lightgrey;">
  <!-- Navbar Start -->
  
<?php
require_once 'user_header.php';
?>
  <!-- Navbar End -->

  <!--Content-->
  <div class="container-fluid">
    <div class="container wow fadeInUp">
      <div class="header-donasi py-4">
        <h1 class="text-center">TESTIMONI</h1>
      </div>
      <div class="row ">
        <img class="jalan1 " src="../img/jalan 1.jpg" alt="">
        <div class="card col-md-1 mb-3 " style="width: 60rem; height: 12rem;">
          <div class="card-body">
            <h4 class="card-text">Muh Naufal Rafif</h4>
            <p style="color: black;">Jl. Deresan II No.mor 15, Manggung, Caturtunggal, Daerah Istimewa Yogyakarta</p>
            <p>Saya sangat senang melihat perbaikan jalan yang dilakukan di wilayah kami.
              Sebelumnya, jalan ini sangat rusak dan berlubang, menyebabkan kerusakan kendaraan dan kesulitan dalam mobilitas.
              Namun, setelah perbaikan dilakukan, jalan menjadi lebih mulus dan nyaman untuk dilalui.</p>
          </div>
        </div>

        <img class="jalan2" src="../img/jalan 2.jpg" alt="">
        <div class="card col-md-1 mb-3" style="width: 60rem; height: 12rem;">
          <div class="card-body">
            <h4 class="card-text">Muh Fajri Kanugraha Agung</h4>
            <p style="color: black;">Jl. C. Simanjuntak No.73, Terban, Kec. Gondokusuman, Daerah Istimewa Yogyakarta</p>
            <p>Saya merasa lebih aman dan nyaman saat berkendara di jalan ini sekarang.
              Terima kasih kepada pemerintah daerah yang telah memperhatikan dan mengambil
              tindakan untuk memperbaiki infrastruktur jalan</p>
          </div>
        </div>

        <img class="jalan3" src="../img/jalan 3.jpg" alt="">
        <div class="card col-md-1 mb-3" style="width: 60rem; height: 12rem;">
          <div class="card-body">
            <h4 class="card-text">Ulinnuha Rif'atur Rizky S</h4>
            <p style="color: black;">Jl. Temanggal 1, Temanggal I, Purwomartani, Kec. Kalasan, Daerah Istimewa Yogyakarta</p>
            <p>Perbaikan jalan ini benar-benar membantu meningkatkan kualitas hidup dan memfasilitasi mobilitas masyarakat.
              Saya berharap perbaikan jalan ini dapat terus dilakukan di seluruh wilayah untuk memberikan manfaat yang lebih luas bagi masyarakat.</p>
          </div>
        </div>

        <img class="RambuLintas" src="../img/jalan 1.jpg" alt="">
        <div class="card col-md-1 mb-3" style="width: 60rem; height: 12rem;">
          <div class="card-body">
            <h4 class="card-text">Hafidz Haratmoko</h4>
            <p style="color: black;">Jl. Pakel Baru Utara No.5, Sorosutan, Kec. Umbulharjo, Daerah Istimewa Yogyakarta</p>
            <p>Dengan adanya rambu lalu lintas, saya merasa lebih percaya diri dan aman saat berkendara. Mereka meminimalkan
              risiko kecelakaan lalu lintas dan mempromosikan disiplin pengendara. Saya juga menghargai upaya pemerintah
              dalam memperbarui dan memelihara rambu lalu lintas secara teratur untuk memastikan kualitasnya tetap baik.</p>
          </div>
        </div>

        <img class="jalan2" src="../img/jalan 2.jpg" alt="">
        <div class="card col-md-1 mb-3" style="width: 60rem; height: 12rem;">
          <div class="card-body">
            <h4 class="card-text">Muh Fajri Kanugraha Agung</h4>
            <p style="color: black;">Jl. C. Simanjuntak No.73, Terban, Kec. Gondokusuman, Daerah Istimewa Yogyakarta</p>
            <p>Saya merasa lebih aman dan nyaman saat berkendara di jalan ini sekarang.
              Terima kasih kepada pemerintah daerah yang telah memperhatikan dan mengambil
              tindakan untuk memperbaiki infrastruktur jalan</p>
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