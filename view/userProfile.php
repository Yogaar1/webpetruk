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

  <?php
  require_once 'user_header.php';
  ?>


  <div class="profile-box d-flex justify-content-center mb-5 mt-5">
    <div class="profile-picture">
      <img src="../../img/" alt="Profile Picture">
    </div>
    <div class="profile-form">
      <h2>Profile</h2>
      <form>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" value="john_doe" required>
        </div>
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" value="John Doe" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" value="johndoe@example.com" required>
        </div>
        <div class="form-group">
          <label for="phone">No. HP</label>
          <input type="tel" id="phone" name="phone" value="1234567890" required>
        </div>
        <div class="form-group">
          <label for="address">Alamat</label>
          <textarea id="address" name="address" required>Jalan ABC No. 123</textarea>
        </div>
        <button class="edit-profile-button" type="submit">Edit Profile</button>

      </form>
    </div>
  </div>
  <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="fcad201b-6c71-47e7-bead-6ea1aaa2fa4e";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>



  <?php
  require_once 'footer.php';
  ?>
</body>

</html>