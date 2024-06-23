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

  <!-- Navbar Start -->
  <section id="navbar">
    <nav class="navbar navbar-expand-lg sticky-top py-lg-3 bg-dark"></nav>
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-lg-5 py-lg-0" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);">
      <a href="AdminlandingPage.php">
        <img class="logo px-lg-4" src="../img/logoBlack.png" alt="LOGO PELAN">
      </a>
      <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav navbar-menu">
          <a href="../view/AdminlandingPage.php" class="nav-item nav-link active">
            <i class="fas fa-home"></i>
            HOME
</a>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">INFORMASI</a>
            <div class="dropdown-menu bg-light m-0">
              <a href="../view/berita.php" class="dropdown-item">BERITA</a>
              <a href="../view/stat_admin.php" class="dropdown-item">STATISTIK</a>
              <!-- <a href="manualUser.php" class="dropdown-item">PANDUAN PETRUK</a> -->
              <a href="../view/galeri.php" class="dropdown-item">GALERI</a>
              <!-- <a href="donasi.php" class="dropdown-item">DONASI</a> -->
           
            </div>
          </div>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">TAMBAH DATA</a>
            <div class="dropdown-menu bg-light m-0">
              <a href="../view/pengaduan.php" class="dropdown-item">PENGADUAN</a>
              <a href="../view/insert_berita.php" class="dropdown-item">BERITA</a>
       
            </div>
          </div>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">DATA</a>
            <div class="dropdown-menu bg-light m-0">
              <a href="../view/dataJalan.php" class="dropdown-item">PENGADUAN</a>
              <a href="../view/data_berita.php" class="dropdown-item">BERITA</a>

            </div>
          </div>
          <!-- <a href="kontak.php" class="nav-item nav-link">KONTAK KAMI</a> -->
        </div>
      </div>
      <div class="ml-4">
        <div class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><img src="../img/akun.jpg" alt="Avatar Logo" style="width:50px;" class="rounded-pill"> </a>
          <div class="dropdown-menu bg-light m-0">
            <a href="../view/userProfile.php" class="dropdown-item">PROFILE</a>
            <a href="../view/logout-user.php" class="dropdown-item"><i class=""></i>KELUAR</a>
          </div>
        </div>
      </div>
      <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="fcad201b-6c71-47e7-bead-6ea1aaa2fa4e";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
    </nav>
  </section>
  <!-- Navbar End -->