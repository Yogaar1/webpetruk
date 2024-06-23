<?php

$errors = array();

//validasi username
if (empty($_POST['username'])) {
    $errors['username'] ="Username Harus Diisi.";
}

//validasi password
if (empty($_POST['password'])) {
    $errors['password'] ="Password Harus Diisi.";
}

if(count($errors) === 0){
    include 'db.php';
    $usernames = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username ='$username' AND password ='$password'";
    $result = mysqli_query($conn, $query);
    //cek hasil query
    if (mysqli_num_rows($result) == 1){
        session_start();
        $_SESSION['status'] = 'login';
        header("Location:  AdminLogin.php");
    }else{
        header("Location: login.php");
    }
}else{
    include "login.php";
}

?>