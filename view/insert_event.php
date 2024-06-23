<?php
include_once '../functions/db.php';
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
</head>

<body>
    <?php
    require_once '../view/admin_header.php';
    ?>
    <!-- Content Start -->
    <div class="container-fluid pelaporan wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5 jalan-rusak">
            <form method="POST" enctype="multipart/form-data" action="../controller/tambah_event.php">
                <div class="col">
                    <div class="card-header text-center bg-dark">
                        <h2 class="text-light">Berita</h2>
                    </div>
                    <div class="card-body">
                        <div class="my-3">
                            <label for="nama" class="col-sm-2 col-form-label">Judul : </label>
                            <input type="text" name="judul" class="form-control" id="judul" placeholder="Masukan Judul....." required>
                        </div>
                        <div class="my-3">
                            <label for="email" class="col-sm-2 col-form-label">Isi : </label>
                            <textarea name="isi" placeholder="Masukan Isi........" class="form-control" rows="8" cols="42"></textarea>
                        </div>

                        <div class="my-3">
                            <label for="email" class="col-sm-2 col-form-label">Waktu : </label>
                            <input type="date" name="waktu" class="form-control" id="waktu" required>
                        </div>
                       
                        <div class="my-3">
                            <label for="gambar" class="form-label">Upload Gambar </label>
                            <input class="form-control" type="file" id="gambar" name="gambar" accept="image/*" required>
                        </div>
                        <div class="my-3">
                            <button type="submit" name="aksi" value="tambah_event" class="btn btn-success">Kirim</button>
                            <a href="data_event.php" class="btn btn-danger">Batal</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="fcad201b-6c71-47e7-bead-6ea1aaa2fa4e";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
    <!-- ----Content End----- -->
    <?php
    require_once 'footer.php';
    ?>
</body>

</html>