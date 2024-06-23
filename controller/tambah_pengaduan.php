<?php
include_once '../functions/db.php';
session_start();


if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] == "tambah_pengaduan") {

        // var_dump($_FILES);
        // echo 

        // die();

        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $no_telepon = $_POST['no_telepon'];
        $kategori = $_POST['id_kategori'];
        $alamat = $_POST['alamat'];
        $kondisi = $_POST['kondisi'];
        $gambar = $_FILES['gambar']['name'];

        $dir = "../img/fotoPelaporan/";
        $tmpFile = $_FILES['gambar']['tmp_name'];

        move_uploaded_file($tmpFile, $dir.$gambar);

        // die();

        $query = "INSERT INTO pengaduan (nama, email, no_telepon, id_kategori, alamat, kondisi, gambar) VALUES ('$nama', '$email', '$no_telepon', '$kategori', '$alamat', '$kondisi', '$gambar')";
        $sql = mysqli_query($conn, $query);

        if ($sql) {
            $_SESSION['sweetAlert'] = [
                'title' => 'Berhasil',
                'text' => 'Data berhasil ditambahkan',
                'type' => 'success'
            ];
            header("Location: ../view/dataJalan.php");
        } else {
            $_SESSION['sweetAlert'] = [
                'title' => 'Gagal',
                'text' => 'Data gagal ditambahkan',
                'type' => 'error'
            ];
            header("Location: ../view/dataJalan.php");
        }
    } else if ($_POST['aksi'] == 'edit') {
        $id = $_POST['id_pengaduan'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $no_telepon = $_POST['no_telepon'];
        $kategori = $_POST['id_kategori'];
        $alamat = $_POST['alamat'];
        $kondisi = $_POST['kondisi'];
        $gambar = $_FILES['gambar']['name'];
        $status = $_POST['status'];

        $dir = "../img/fotoPelaporan/";
        $tmpFile = $_FILES['gambar']['tmp_name'];

        move_uploaded_file($tmpFile, $dir.$gambar);

        $query = "UPDATE pengaduan SET nama = '$nama', email = '$email', no_telepon = '$no_telepon', id_kategori = '$kategori', kondisi = '$kondisi', gambar = '$gambar', status = '$status' WHERE id_pengaduan = '$id';";
        $sql = mysqli_query($conn, $query);

        if ($sql) {
            $_SESSION['sweetAlert'] = [
                'title' => 'Berhasil',
                'text' => 'Data berhasil diubah',
                'type' => 'success'
            ];
            header("Location: ../view/dataJalan.php");
        } else {
            $_SESSION['sweetAlert'] = [
                'title' => 'Gagal',
                'text' => 'Data gagal diubah',
                'type' => 'error'
            ];
            header("Location: ../view/dataJalan.php");
        }
    }
}
if (isset($_GET['hapus'])) {
    $id_pengaduan = $_GET['hapus'];

    $querySh = "SELECT * FROM pengaduan WHERE id_pengaduan = '$id_pengaduan';";
    $sqlSh = mysqli_query($conn, $querySh);
    $result = mysqli_fetch_assoc($sqlSh);

    // var_dump($result);

    unlink("../img/fotoPelaporan/".$result['gambar']);

    $query = "DELETE FROM pengaduan WHERE id_pengaduan = '$id_pengaduan';";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        $_SESSION['sweetAlert'] = [
            'title' => 'Berhasil',
            'text' => 'Data berhasil dihapus',
            'type' => 'success'
        ];
        header("Location: ../view/dataJalan.php");
    } else {
        $_SESSION['sweetAlert'] = [
            'title' => 'Gagal',
            'text' => 'Data gagal dihapus',
            'type' => 'error'
        ];
        header("Location: ../view/dataJalan.php");
    }
}
