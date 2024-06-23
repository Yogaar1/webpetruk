<?php

require_once '../functions/db.php';

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
  <link href="../../lib/animate/animate.min.css" rel="stylesheet" />
  <link href="../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="../../css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="../../css/style.css" rel="stylesheet" />
</head>

<body>
  <!-- Navbar Start-->
  <?php
  require_once 'admin_header.php';
  ?>
  <!-- Navbar End -->
  <!-- Content Start -->
  <section id="dataUser">
    <div class="container-fluid content-pelapor">
      <div class="container mt-5">
        <div class="header">
          <h2>DATA PENGADUAN</h2>
          <div class="btn-group">
            <button type="button" class="btn btn-danger">Pilih Data </button>
            <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="dataJalan.php">Jalan</a></li>
              <li><a class="dropdown-item" href="dataJembatan.php">Jembatan</a></li>
              <li><a class="dropdown-item" href="dataLampuJalan.php">Lampu Jalan</a></li>
              <li><a class="dropdown-item" href="dataLampuLalin.php">Lampu Lalu Lintas</a></li>
              <li><a class="dropdown-item" href="dataTrotoar.php">Trotoar</a></li>
              <li><a class="dropdown-item" href="dataDrainase.php">Drainase</a></li>
              <li><a class="dropdown-item" href="dataPelapor.php">Pelapor</a></li>
              <li><a class="dropdown-item" href="dataUser.php">User</a></li>
            </ul>
          </div>
        </div>
        <h2 class="pt-lg-5">DATA USER</h2>
        <p>Berikut data terkait informasi yang telah melakukan pengaduan</p>
        <div class="table py-4">

          <table class="table table-striped">
            <thead class="bg-primary text-center text-light">
              <tr>
                <th>NO.</th>
                <th>Username</th>
                <th>Email</th>
                <th>Status</th>
                <th>Code</th>
                <th>Role</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $query = "SELECT * FROM usertable";
              $rows = mysqli_query($conn, $query);
              $p = 1;
              while ($row = mysqli_fetch_array($rows)) {
              ?>
                <tr>
                  <td><?= $p; ?></td>
                  <td><?= $row['name']; ?></td>
                  <td><?= $row['email']; ?></td>
                  <td><?= $row['status']; ?></td>
                  <td><?= $row['code']; ?></td>
                  <td><?= $row['role']; ?></td>



                  
                </tr>
                
              <?php
                $p++;
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="fcad201b-6c71-47e7-bead-6ea1aaa2fa4e";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
  </section>
  <!-- ----Content End----- -->


  <?php
  require_once 'footer.php';
  ?>
</body>

</html>