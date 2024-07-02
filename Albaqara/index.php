<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>cow service</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- Header -->
  <nav class="navbar navbar-expand navbar-dark">
    <div class="container-lg">
      <a class="navbar-brand" href="#"> <i class="bi bi-hypnotize"></i> Albaqara</a>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Account
            </a>
            <ul class="dropdown-menu dropdown-menu-end mt-2">
              <li><a class="dropdown-item" href="#"><i class="bi bi-door-open-fill"> </i>Register</a></li>
              <li><a class="dropdown-item" href="#"><i class="bi bi-gear-fill"> </i>Setting</a></li>
              <li><a class="dropdown-item" href="#"><i class="bi bi-door-closed-fill"> </i>Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Header -->
  <div class="container-lg">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-lg-3">
        <nav class="navbar navbar-expand-lg rounded border mt-2 bg-custom-grey">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
              aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
              aria-labelledby="offcanvasNavbarLabel" style="width:250px">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
                  <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#"></a><i class="bi bi-house-heart-fill"> </i>Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-clipboard-data-fill"> </i>Tabel Data</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-newspaper"> </i>Market News</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-receipt-cutoff"> </i>Preorder</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
      <!-- End Sidebar -->

      <!-- Content -->
      <div class="col-lg-9 mt-2">
        <div class="container-fluid py-5 content">
          <h1 class="display-4 text-center">Albaqara</h1>
          <p class="lead text-center">Temukan Sapi Berkualitas Terbaik Hanya di Albaqara
🌟 Pilihan Terlengkap: Kami menawarkan berbagai jenis sapi berkualitas yang siap memenuhi kebutuhan peternakan Anda.

🔍 Transparansi Penuh: Lihat riwayat kesehatan, berat, dan asal usul sapi dengan mudah. Kami percaya bahwa informasi yang lengkap adalah kunci kepuasan pelanggan.

🚚 Pengiriman Aman dan Cepat: Kami memastikan sapi Anda tiba dalam kondisi terbaik dengan layanan pengiriman terpercaya dan cepat.

💰 Harga Kompetitif: Nikmati harga terbaik dengan kualitas unggul. Kami selalu berusaha memberikan nilai lebih untuk setiap pembelian Anda.

🛡️ Garansi Kesehatan: Setiap sapi yang Anda beli dilengkapi dengan garansi kesehatan, memastikan Anda mendapatkan hewan ternak yang sehat dan prima.

🛒 Belanja Mudah: Proses pemesanan yang sederhana dan cepat, serta layanan pelanggan yang siap membantu Anda kapan saja.</p>
        </div>
      </div>
      <!-- End Content -->
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>

</html>
