
<?php
require_once "config/database.php";
require_once "helper/fungsi_tanggal_indo.php";
?>

<!doctype html>
<html lang="en" class="h-100">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Aplikasi Pengelolaan Data Member dengan PHP 8, MySQLi, dan Bootstrap 5">
  <meta name="author" content="Indra Styawantoro">

  <!-- Title -->
  <title>Aplikasi Pengelolaan Data Member </title>

  <!-- Favicon icon -->
  <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  <!-- Datepicker CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css">

  <!-- Custom Style -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="d-flex flex-column h-100">
  <header class="p-2 bg-indigo text-white shadow">
    <div class="container">
      <div class="d-flex flex-column flex-md-row align-items-center justify-content-center">
        <!-- logo brand -->
        <a href="https://github.com/Linafaujiah31" class="d-flex flex-column flex-md-row align-items-center justify-content-center me-md-auto py-2 py-md-0 text-decoration-none">
          <img src="assets/img/indrasatya.png" alt="Indra Satya" height="53" class="me-2">
          <span class="text-white font-monospace fs-4">Lina<span class="text-orange fs-5">Fauziah</span></span>
        </a>
        <!-- button social media -->
        <div class="mb-2 mb-md-0">
          <a href="https://github.com/Linafaujiah31" target="_blank" class="btn btn-light rounded-pill me-2">
            <i class="fab fa-github py-1"></i>
          </a>
        </div>
      </div>
    </div>
  </header>

  <main class="flex-shrink-0 mb-4">
    <div class="container">
      <?php
      // pemanggilan file konten sesuai "halaman" yang dipilih
      // jika tidak ada halaman yang dipilih atau halaman yang dipilih "data"
      if (empty($_GET["halaman"]) || $_GET['halaman'] == 'data') {
        // panggil file tampil data
        include "tampil_data.php";
      }
      // jika halaman yang dipilih "entri"
      elseif ($_GET['halaman'] == 'entri') {
        // panggil file form entri
        include "form_entri.php";
      }
      // jika halaman yang dipilih "ubah"
      elseif ($_GET['halaman'] == 'ubah') {
        // panggil file form ubah
        include "form_ubah.php";
      }
      // jika halaman yang dipilih "detail"
      elseif ($_GET['halaman'] == 'detail') {
        // panggil file tampil detail
        include "tampil_detail.php";
      }
      // jika halaman yang dipilih "pencarian"
      elseif ($_GET['halaman'] == 'pencarian') {
        // panggil file tampil pencarian
        include "tampil_pencarian.php";
      }
      ?>
    </div>
  </main>

  <!-- Footer -->
  <footer class="footer mt-auto py-3 bg-indigo">
    <div class="container">
      <div class="d-flex flex-column flex-md-row align-items-center align-items-md-left text-white">
        <!-- copyright -->
        <div class="copyright text-center mb-2 mb-md-0">
          &copy; 2024 - <a href="https://github.com/Linafaujiah31" target="_blank">Lina Fauziah</a>. All rights reserved.
        </div>
        <!-- link -->
        <div class="link ms-md-auto">
          <a href="https://github.com/Linafaujiah31" target="_blank" class="me-3">Syarat dan Ketentuan</a>
          <a href="https://github.com/Linafaujiah31" target="_blank">Lisensi</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Popper and Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

  <!-- Datepicker JS -->
  <script src="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/js/datepicker.min.js"></script>

  <!-- Custom Scripts -->
  <script src="assets/js/vanillajs-datepicker.js"></script>
  <script src="assets/js/form-validation.js"></script>
</body>

</html>