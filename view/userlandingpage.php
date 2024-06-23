<?php
//index.php
include_once '../functions/db.php';
session_start();

if (isset($_SESSION['sweetAlert'])) {
  $sweetAlert = $_SESSION['sweetAlert'];

  // Hapus pesan SweetAlert dari session setelah ditampilkan
  unset($_SESSION['sweetAlert']);
}
?>
<?php
require_once 'user_header.php';
?>

  <!-- Content Start -->
  <!-- ---Banner Start----- -->
  <section id="banner">
    <div class="container-fluid banner">
      <div class="container">
        <div class="row py-lg-5">
          <div class="col-md-6 py-lg-5 wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="text-light">Selemat datang di</h5>
            <h1 class="text-light judul">WEBSITE PENGADUAN <br> INFRASTRUKTUR</h1>
          </div>
          <div class="col-lg-4 ">
            <img src="../img/truck.png" class="gambar-banner wow fadeInUp" data-wow-delay="0.2s">
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- ---Banner End---- -->

  <!-- ----About Website Start--- -->
  <section id="main">
    <div class="container-fluid main-content py-lg-5">
      <div class="container wow fadeInUp">
        <h1 class="text-primary">TENTANG WEBSITE</h1>
        <p class="text-light">Anda dapat melaporkan berbagai infrastruktur dalam negeri yang sudah tidak layak dipakai atau terdapat kerusakan melalui website ini. Dengan adanya ini kami berharap agar mendorong kemajuan pengembangan infrastruktur yang merata sehingga dapat menuju Indonesia lebih maju.</p>
        <p class="text-light mt-3">Ayo Laporkan Infrastruktur tidak layak pakai, Disini!</p>
        <a href="engaduan.php" class="btn btn-primary btn-lg">LAPORKAN SEKARANG</a>
      </div>
    </div>
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="fcad201b-6c71-47e7-bead-6ea1aaa2fa4e";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
  </section>
  <!-- ---About Website End--- -->
  <!-- ----Content End----- -->


  <?php
  require_once 'footer.php';
  ?>
  <script src="../js/sweetalert/package/dist/sweetalert2.all.min.js"></script>
<?php if (isset($sweetAlert)) { ?>
    <script>
        Swal.fire({
            title: '<?php echo $sweetAlert['title']; ?>',
            text: '<?php echo $sweetAlert['text']; ?>',
            icon: '<?php echo $sweetAlert['type']; ?>',
        });
    </script>
<?php } ?>



</body>

</html>
