

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
  <p class="text-center fs-1 text-primary " style="font-weight: bold;">BERITA</p>


  <div class="container-fluid">
    <div class="container wow fadeInUp">
      <div class="header-donasi py-4">
      </div>
      <div class="row ">
      <?php
    include("../functions/db.php");
$sql="SELECT * FROM berita";
$hasil = mysqli_query($conn, $sql);

$jberita=mysqli_num_rows($hasil);
  if ($jberita > 0){
    while($row = mysqli_fetch_assoc($hasil)){

?>
       
         <img class="jalan1 " src="../img/fotoberita/<?= $row['gambar']; ?>" alt="">
        <div class="card col-md-1 mb-3 " style="width: 60rem; height: 12rem;">
          <div class="card-body">
            <h4 class="card-text"><?= $row['judul']; ?></h4>
            <p><?= $row['isi']; ?></p>
          </div>
        </div>

        <?php
}
}
?>

      </div>
    </div>
  </div>
  <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="fcad201b-6c71-47e7-bead-6ea1aaa2fa4e";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>

  <!-- Footer Start -->
  <?php
  require_once 'footer.php';
  ?>
</body>

</html>