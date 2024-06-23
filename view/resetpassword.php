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

  <div class="reset-box mb-5 mt-5" style="box-shadow: 4px 4px 4px 4px rgba(0, 0, 0, 0.5);">
    <source>
    <div class="d-flex justify-content-center ">
      <div class="text-center">
        <img src="../img/logoBlack.png" style="width: 50%;" class="">
      </div>
    </div>

    <img src="../img/cload.png" alt="" class="container" style="margin-bottom: -70px ;">
    </source>
    <h2 class="text-muted ">RESET PASSWORD?</h2>
    <p class="text-center mb-1">Enter email for verification code.</p>
    <form>
      <div class="user-box">
        <input type="text" name="username" required>
        <label>Email</label>
      </div>
      <div style="border-top: 1px solid black;"></div>
      <h2> </h2>
      <button class="cancel-button " style="float: right;" type="submit">cancel</button>
      <button class="confirm-button" type="submit">confirm</button>

      <div>
        <p style="position: relative; left: 100px; font-size: 10px;" class="py-4">Don’t have account yet? Register</p>
      </div>
    </form>
  </div>

  <!-- Footer Start -->
  <?php
  require_once 'footer.php';
  ?>
</body>

</html>