<!DOCTYPE html>
<html lang="en">

<?php
include_once '../functions/db.php';

$nama = '';
$email = '';
$tlp = '';
$kategori = '';
$alamat = '';
$kondisi = '';
$gambar = '';

if(isset ($_GET['ubah'])){
    $id = $_GET['ubah'];
    
    $query = "SELECT * FROM pengaduan WHERE id_pengaduan = '$id';";
    $sql = mysqli_query($conn, $query);
    
    $result = mysqli_fetch_assoc($sql);
    
    $nama = $result['nama'];
    $email = $result['email'];
    $tlp = $result['no_telepon'];
    $kategori = $result['id_kategori'];
    $alamat = $result['alamat'];
    $kondisi = $result['kondisi'];
    $gambar = $result['gambar'];
    $status = $result['status'];
}
?>

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
            <form method="POST" action="../controller/tambah_pengaduan.php">
                <input type="hidden" value="<?= $id; ?>" name="id_pengaduan">
                <div class="col">
                    <div class="card-header text-center bg-dark">
                        <h2 class="text-light">Pengaduan</h2>
                    </div>
                    <div class="card-body">
                        <div class="my-3">
                            <label for="nama" class="col-sm-2 col-form-label">Nama : </label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Anda..." value="<?= $nama; ?>" required>
                        </div>
                        <div class="my-3">
                            <label for="email" class="col-sm-2 col-form-label">Alamat Email : </label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Alamat Email Anda..." value="<?= $email; ?>">
                        </div>
                        <div class="my-3">
                            <label for="no_telepon" class="col-sm-2 col-form-label">No. Telepon : </label>
                            <input type="text" name="no_telepon" class="form-control" id="no_telepon " placeholder="No Telepon Anda..." value="<?= $tlp; ?>">
                        </div>
                        <div class="my-3">
                            <label for="id_kategori" class="col-2 col-form-label">Kategori :</label>
                            <select name="id_kategori" id="id_kategori" class="form-select" required>
                                <!-- <option selected></option> -->
                                <option value="<?= $kategori; ?>" selected><?= $kategori; ?></option>
                                <?php
                                $query = mysqli_query($conn, 'SELECT * FROM kategori_pengaduan ORDER BY jenis ASC');
                                while ($kategori = mysqli_fetch_array($query)) {
                                ?>
                                    <option value="<?= $kategori['id_kategori']; ?>"> <?= $kategori['jenis']; ?> </option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="my-3">
                            <label for="alamat">Alamat Jalan Rusak</label>
                            <textarea class="form-control" rows="5" id="alamat" name="alamat" placeholder="Alamat Terkait..." required><?= $alamat; ?></textarea>
                        </div>
                        <div class="my-3">
                            <label for="kondisi" class="col-sm-2 col-form-label">Kondisi : </label>
                            <input type="text" name="kondisi" class="form-control" id="kondisi" placeholder="Masukan Kondisi Sekarang..." value="<?= $kondisi; ?>">
                        </div>

                        <div class="my-3">
                            <label for="kondisi" class="col-sm-2 col-form-label">Status : </label>
                            <input type="text" name="status" class="form-control" id="status" placeholder="Masukan Status Sekarang..." value="">
                        </div>

                        <div class="my-3">
                            <label for="gambar" class="form-label">Upload Gambar </label>
                            <input class="form-control" type="file" id="gambar" name="gambar" value="<?= $gambar; ?>">
                        </div>
                        <div class="my-3">
                            <button type="submit" name="aksi" value="edit" class="btn btn-primary">Ubah</button>
                            <a href="dataJalan.php" class="btn btn-danger">Batal</a>
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