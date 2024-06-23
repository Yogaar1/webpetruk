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

<body style="background-color: lightgrey;">
  <!-- Navbar Start -->
  <?php
  require_once 'user_header.php';
  ?>
  <!-- Navbar End -->

  <!--Content-->
  <div class="continer-fluid">
    <div class="contianer wow fadeInUp">
      <h1 class="pt-3 text-center">MANUAL USER</h1>
      <hr>
      <div class="px-lg-4">
        <h3>- Pengisian Form Pelaporan</h3>
        <p class="px-lg-4" style="color: black;">Sebelum mengisi form pelaporan,<b> pastikan anda sudah melakukan Login terlebih dahulu.</b>
          Setelah itu masukkan nama lengkap anda, alamat E-mail, jenis kelamin, dan No telepon. Setelah itu masukkan Alamat jalan
          yang rusak, serta tuliskan kondisi di jalan tersebut dengan detil. Anda juga bisa menekan tombol 'Choose file' untuk mengupload gambar jalan yang rusak.
          Cara ini berlaku untuk kesemua menu pelaporan yang ada.</p>
        <div class="text-center">
          <img class="MUForm" src="../img/manualuser4.png" alt="">
          <img class="MUForm" src="../img/manualuser5.png" alt="">
        </div><br>

        <h3 class="pt-3">- Donasi</h3>
        <p class="px-lg-4" style="color: black;">Untuk menu Donasi terdapat 2 pilihan yaitu Donasi Infrastruktur dan Donasi Developer.
          Untuk Infrastruktur dana yang disumbangkan akan diguakan untuk kebutuhan perbaikan jalan oleh masyarakat. Untuk Developer
          Dana yang disumbangkan akan digunakan untuk pengembangan web agar lebih baik. Lalu tekan 'Donate' untuk menuju ke halaman berikutnya</p>
        <div class="text-center">
          <img class="MUDonasi" src="../img/manualuser1.png" alt="">
        </div><br>
        <p class="px-lg-4" style="color: black;">Setelah menekan tombol 'Donate' anda akan diarahkan ke menu pembayaran yang dimana berisi nomor
          rekening dari setiap Bank. Lalu tekan 'Donate' disalah satu bank untuk masuk ke halaman QR yang nanti nya user dapat meng-scan QR yang telah tertera.</p>
        <div class="text-center">
          <img class="MUMenuBayar" src="../img/manualuser2.png" alt="">
          <img class="MUQR" src="../img/manualuser3.png" alt="">
        </div><br>
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