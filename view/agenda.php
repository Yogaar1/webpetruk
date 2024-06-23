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
    <!-- Animasi-->
      <link 
      rel="stylesheet" 
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

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
      <div id="calendar-container">
        <div id="calendar-header">
          <button id="prev-button">&lt;</button>
          <h2 id="month-name"></h2>
          <button id="next-button">&gt;</button>
        </div>
        <table id="calendar-table">
          <thead>
            <tr>
              <th>Sen</th>
              <th>Sel</th>
              <th>Rab</th>
              <th>Kam</th>
              <th>Jum</th>
              <th>Sab</th>
              <th>Min</th>
            </tr>
          </thead>
          <tbody id="calendar-body">
            <!-- Konten kalender dihasilkan melalui JavaScript -->
          </tbody>
        </table>
      </div>
      <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="fcad201b-6c71-47e7-bead-6ea1aaa2fa4e";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
      

      <script src="../js/main.js"></script>
   
    <!-- Footer Start -->
    <?php
  require_once 'footer.php';
  ?>
</body>
</html>