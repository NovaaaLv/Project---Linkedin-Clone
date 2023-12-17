<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.19.0/font/bootstrap-icons.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/novstyle.css" />
  <link rel="icon" href="Assets/LI-In-Bug.png" />
  <title>Linkedin Clone</title>

<body>
  <!-- Navrbar -->
  <?php include('src/Navbar.php'); ?>

  <section>
    <div class="container-main container-mt d-flex justify-content-evenly" style="height: 80px">
      <div class="container-main-left bg-white list-group-item d-flex flex-column rounded-3" style="width: 250px">
        <span class="text-head">Kelola Notifikasi Anda</span>
        <a href="#" class="text-head pt-2" style="color: blue">Lihat Pengaturan</a>
      </div>

      <div class="container-main-middle" style="width: 500px">
        <div class="sect--1 bg-white list-group-item rounded-3 btn-notify d-flex align-items-center gap-3" style="height: 65px;">
          <button style="border-color: grey; color: rgb(90, 89, 89);">Semua</button>
          <button style="border-color: grey; color: rgb(90, 89, 89);">Postingan saya</button>
          <button style="border-color: grey; color: rgb(90, 89, 89);">Penyebut Nama</button>
        </div>
        <div class="sect--2 bg-white list-group-item mt-3 rounded-3 d-flex">
          <img src="Assets/login-logo.svg" alt="" width="55px" />
          <div class="d-flex align-items-center ps-2">
            <div class="" style="max-width: 350px">
              <span style="color: black; font-size: 14px">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Eaque, tenetur!</span>
              <span class="text-small text-dark">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Dolor, distinctio.</span>
            </div>
            <div class="d-flex flex-column ps-4">
              <span class="text-smaller">Date</span>
              <i class="bi bi-three-dots"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="container-main-right">
        <div class="container-promorion bg-white list-group-item rounded-3" style="width: 300px; height: 250px">
          <div class="container-right-sect1 container-icon d-flex align-items-center justify-content-between">
            <span style="font-size: 17px">Promosi</span>
            <button><i class="bi bi-three-dots"></i></button>
          </div>
          <div class="sontainer-right-sect2 pt-2 d-flex align-items-center">
            <div class="">
              <img src="Assets/login-logo.svg" alt="" />
            </div>
            <div class="container-icon d-flex align-items-center ps-2">
              <div class="d-flex flex-column">
                <a href="" style="font-size: 16px; color: black; font-weight: 400">Name Company</a>
                <span style="font-weight: 300; font-size: 12px">Desk About The Company</span>
              </div>
              <button>
                <i class="bi bi-chevron-compact-right" style="font-size: 30px"></i>
              </button>
            </div>
          </div>
        </div>

        <div class="container d-flex flex-column align-items-center text-small footer-linkedin ms-4 mt-3">
          <div class="contain d-flex gap-2">
            <a href="">Tentang</a>
            <a href="">Aksebilitas</a>
            <a href="">Pusat Bantuan</a>
          </div>
          <div class="contain d-flex gap-2">
            <a href="" class="dropdown-toggle">Privasi & Ketentuan </a>
            <a href="">Opsi Iklan</a>
          </div>
          <div class="contain d-flex gap-2">
            <a href="">Periklanan</a>
            <a href="" class="dropdown-toggle">Layanan Bisnis</a>
          </div>
          <div class="contain d-flex gap-2">
            <a href="">Dapatkan aplikasi linkedin</a>
            <a href="">Lainnya</a>
          </div>
          <div class="contain d-flex gap-2">
            <img src="Assets/LI-Logo.png" alt="" height="15px" width="auto" />
            <span class="text-small text-dark">Linkedln Corporation © 2023</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Message -->
  <?php include('src/Right-Message-Bottom.php'); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>