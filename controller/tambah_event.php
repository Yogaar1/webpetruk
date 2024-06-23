<?php
include_once '../functions/db.php';
session_start();


if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] == "tambah_event") {

        // var_dump($_FILES);
        // echo 

        // die();

        $judul = $_POST['judul'];
        $isi = $_POST['isi'];
        $waktu = $_POST['waktu'];
        $gambar = $_FILES['gambar']['name'];

        $dir = "../img/fotoevent/";
        $tmpFile = $_FILES['gambar']['tmp_name'];

        move_uploaded_file($tmpFile, $dir.$gambar);

        // die();

        $query = "INSERT INTO event (judul, isi,waktu,gambar) VALUES ('$judul', '$isi','$waktu','$gambar')";
        $sql = mysqli_query($conn, $query);

        if ($sql) {
            $_SESSION['sweetAlert'] = [
                'title' => 'Berhasil',
                'text' => 'Data berhasil ditambahkan',
                'type' => 'success'
            ];
            header("Location: ../view/data_event.php");
        } else {
            $_SESSION['sweetAlert'] = [
                'title' => 'Gagal',
                'text' => 'Data gagal ditambahkan',
                'type' => 'error'
            ];
            header("Location: ../view/data_event.php");
        }
    } else if ($_POST['aksi'] == 'edit') {
        $id = $_POST['id'];
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];
        $waktu = $_POST['waktu'];
        $gambar = $_FILES['gambar']['name'];

        $dir = "../img/fotoevent/";
        $tmpFile = $_FILES['gambar']['tmp_name'];

        move_uploaded_file($tmpFile, $dir.$gambar);

        $query = "UPDATE event SET judul = '$judul', isi = '$isi', waktu = '$waktu', gambar = '$gambar' WHERE id = '$id';";
        $sql = mysqli_query($conn, $query);

        if ($sql) {
            $_SESSION['sweetAlert'] = [
                'title' => 'Berhasil',
                'text' => 'Data berhasil diubah',
                'type' => 'success'
            ];
            header("Location: ../view/data_event.php");
        } else {
            $_SESSION['sweetAlert'] = [
                'title' => 'Gagal',
                'text' => 'Data gagal diubah',
                'type' => 'error'
            ];
            header("Location: ../view/data_event.php");
        }
    }
}
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];

    $querySh = "SELECT * FROM berita WHERE id = '$id';";
    $sqlSh = mysqli_query($conn, $querySh);
    $result = mysqli_fetch_assoc($sqlSh);

    // var_dump($result);

    unlink("../img/fotoevent/".$result['gambar']);

    $query = "DELETE FROM event WHERE id = '$id';";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        $_SESSION['sweetAlert'] = [
            'title' => 'Berhasil',
            'text' => 'Data berhasil dihapus',
            'type' => 'success'
        ];
        header("Location: ../view/data_event.php");
    } else {
        $_SESSION['sweetAlert'] = [
            'title' => 'Gagal',
            'text' => 'Data gagal dihapus',
            'type' => 'error'
        ];
        header("Location: ../view/data_event.php");
    }
}
