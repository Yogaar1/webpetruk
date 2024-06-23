<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PETRUK - Pengaduan Infrastruktur</title>
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

  <!-- Animasi-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

  <!-- Template Stylesheet -->
  <link href="../css/style.css" rel="stylesheet" />
</head>

<body>
  <!-- Navbar Start -->
  <?php
  require_once 'admin_header.php';
  ?>
  <!-- Navbar End -->

  <!-- ----Form Start----- -->
  <p class="text-center fs-1 text-primary mt-5  animate__animated animate__fadeInDownBig" style="font-weight: bold; font-family:Arial, Helvetica, sans-serif;">EVENT</p>
  <div class="d-flex justify-content-center text-center">
    <div class="container img-thumbnail animate__animated animate__fadeInDownBig">
      <P style="text-align: center ;font-size: 15px;">Mari kita bergerak bersama dalam aksi kerja bakti yang bermanfaat bagi masyarakat. Kerja bakti adalah kesempatan bagi kita untuk berkontribusi dalam memperbaiki lingkungan sekitar kita. Dengan bergabung dalam kegiatan ini, kita dapat membersihkan tempat-tempat umum, memperbaiki infrastruktur yang rusak, dan menjaga kebersihan lingkungan. Kerja bakti bukan hanya tentang membersihkan sampah, tetapi juga membangun ikatan sosial dan solidaritas di antara warga. Ajakan ini mengajak kita semua untuk melibatkan diri aktif dalam kerja bakti demi menciptakan lingkungan yang lebih bersih, indah, dan nyaman untuk kita tinggali. </P>

      <img src="../img/green.png" width="300px" alt="" class="img-thumbnail animate__animated animate__zoomIn">
    </div>
  </div>
  </div>
  </div>


  <div class="container">
    <div class="row">
    <?php
    include("../functions/db.php");
$sql="SELECT * FROM event";
$hasil = mysqli_query($conn, $sql);

$jberita=mysqli_num_rows($hasil);
  if ($jberita > 0){
    while($row = mysqli_fetch_assoc($hasil)){

?>
      <div class="col-md-3">
        <div class="card border">
        <img src="../img/fotoevent/<?= $row['gambar']; ?>" width="300px">
          <div class="card-body">
            <p class="card-text text-muted mb-5"><?= $row['judul']; ?></p>
            <p class="card-text text-muted mb-5"><?= $row['waktu']; ?></p>
          </div>
        </div>
      </div>
<?php
}
}
?>
      
    </div>
  </div>
  <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="fcad201b-6c71-47e7-bead-6ea1aaa2fa4e";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>



  <!-- Footer Start -->
  <?php
  require_once 'footer.php';
  ?>
</body>

</html>