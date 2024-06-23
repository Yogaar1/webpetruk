
<?php
require_once '../functions/db.php';


$get1 = mysqli_query($conn,"select * from pengaduan where status='selesai'");
$count1 = mysqli_num_rows($get1);

$get2 = mysqli_query($conn,"select * from pengaduan where status='belum'");
$count2 = mysqli_num_rows($get2);

$get3 = mysqli_query($conn,"select * from pengaduan where status='proses perbaikan'");
$count3 = mysqli_num_rows($get3);
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
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap"
      rel="stylesheet"
    />
    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet" />
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
   

    <!-- Table style -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

  </head>

  <body>
 <!-- Navbar Start -->
 <?php
  require_once 'user_header.php';
  ?>
    <!-- Navbar End -->
    <h1 class="mt-3">Data Pelaporan Jalan</h1>
    <div class="container">
  <div class="row">
    <div class="col">
      <span class="badge bg-success ml-4 mt-5"><?=$count1?></span> SUDAH DI PERBAIKI
    </div>
    </div>

    <div class="row">
    <div class="col">
      <span class="badge bg-danger ml-4 mb-5 mt-5"><?=$count2;?></span> BELUM DI PERBAIKI
    </div>
    </div>

    <div class="row">
    <div class="col">
      <span class="badge bg-primary ml-4 mb-5"><?=$count3;?></span> DALAM PROSES
    </div>
    </div>
</div>

<hr>
<table id="example" class="display" style="width:100%">
        <thead bgcolor="orange">
            <tr>
                <th>Id Jln</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No Telpon</th>
                <th>Alamat</th>
                <th>Kondisi</th>
                <th>Gambar</th>
            </tr>
            </thead>
           <tfoot>
        </tfoot>
   
    </table>   
 
    <script type="text/javascript">
$(document).ready(function () {
    $('#example').DataTable({
      "ajax": {
        "url":"../functions/db_js.php",
        "dataSrc":""
      },
      "columns":[
        {"data":"id_pengaduan"},
        {"data":"nama"},
        {"data":"email"},
        {"data":"no_telepon"},
        {"data":"alamat"},
        {"data":"kondisi"},
        {"data":"gambar"}
      ]

});
    
});
    </script>


  </body>
</html>