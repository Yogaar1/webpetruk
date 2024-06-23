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
  <!-- Animasi-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

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
  <div class="container">
    <div class="row">
      <div class="col">
        <img src="../img/help.png" alt="" class="img-thumbnail animate__animated animate__fadeInLeft">
        <h2 class="img-thumbnail animate__animated animate__fadeInLeft">KRITIK & SARAN</h2>
        <P style="text-align: justify; font-size:18px;" class="img-thumbnail animate__animated animate__fadeInLeft">Selamat datang di menu "Kritik dan Pertanyaan"! Kami menghargai setiap masukan, kritik, dan pertanyaan yang Anda berikan</P>
      </div>

      <div class="col d-flex justify-content-end">
        <div class="reset-box mb-5 mt-5 " style="box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3);">

          <div class="d-flex justify-content-center ">
            <div class="text-center">
              <img src="../img/logoBlack.png" style="width: 50%;" class="mb-5">
            </div>
          </div>

          <form>
            <div class="user-box">
              <input type="text" name="username" placeholder="Nama">

            </div>
            <div class="user-box">
              <select id="negara" name="negara">
                <option value="Kritik">KRITIK</option>
                <option value="Saran">SARAN</option>
                <option value="Pertanyaan">PERTANYAAN</option>
              </select>

            </div>
            <div class="user-box">
              <textarea name="" placeholder="MASUKAN/PERTANYAAN" rows="8" cols="42"></textarea>
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