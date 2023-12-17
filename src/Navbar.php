<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta charset="UTF-8" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.19.0/font/bootstrap-icons.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/novstyle.css" />
  <link rel="icon" href="Assets/LI-In-Bug.png" />
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="Assets/LI-In-Bug.png" alt="" style="width: 43.5px; height: auto" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0 padd-left-10px">
          <li class="nav-item form-control me-sm-2 search-nav d-flex">
            <form class="d-flex my-2 my-lg-0 padd" style="margin-left: -15px">
              <button style="
                    border: none;
                    background-color: transparent;
                    padding-left: 20px;
                  ">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16" style="margin-top: -4px">
                  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                </svg>
              </button>
              <input type="text" placeholder="Cari" style="border: none" class="inp-nav" />
            </form>
          </li>
        </ul>
        <ul class="navbar-nav me-auto mt-2 mt-lg-0" id="collapsibleNavId">
          <li class="nav-item">
            <a class="nav-link nav-link-menu padd" href="index.php" aria-current="page" style="width: 98px">
              <img src="Assets/home-logo.svg" alt="home-logo" width="25px" height="22px" />
              <span class="text-hal-utama-nav">Halaman Utama</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-menu" href="Network.php" style="width: 100px">
              <img src="Assets/jaringanSaya-logo.svg" alt="Jaringan-saya" width="26px" height="22.5px" />
              <span class="d-none d-lg-inline text-hal-utama-nav">Jaringan Saya</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-menu" href="Job.php" style="width: 75px">
              <img src="Assets/pekerjaan-logo.png" alt="" width="21px" height="23px" />
              <span class="text-hal-utama-nav">Pekerjaan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-menu" href="Message.php" style="width: 90px">
              <img src="Assets/pesan-logo.svg" alt="pesan" width="21px" height="24px" />
              <span class="text-hal-utama-nav">Pesan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-menu" href="Notify.php" style="width: 80px">
              <img class="notif-trans" src="Assets/Notifikasi-logo.svg" alt="Notifikasi-logo" width="21px" height="24px" />
              <span class="text-hal-utama-nav"> Notifikasi</span>
            </a>
          </li>
          <!--Dropdown-->
          <li class="nav-item dropdown">
            <a class="nav-link nav-link-menu padd" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 80px">
              <img src="Assets/login-logo.svg" alt="" width="26px" height="24px" />
              <span class="text-hal-utama-nav">Saya<span class="dropdown-toggle"></span></span>
            </a>
            <div class="dropdown-menu pb-0" aria-labelledby="dropdownId">
              <a class="dropdown-item" href="#">
                <div class="dropACC d-flex">
                  <img src="Assets/login-logo.svg" alt="" />
                  <ul class="list-unstyled ps-2">
                    <li>
                      <span class="text-head">Name Account User</span>
                    </li>
                    <li><span class="text-medium">Study User</span></li>
                  </ul>
                </div>
              </a>
              <div class="dropdown-item list-group-item d-flex flex-column" href="#">
                <span class="text-head">Akun</span>
                <span class="text-medium"><a href="" class="hover-text" style="color: #5f5f5f"><img src="Assets/card-gold-logo.svg" alt="" width="15px" style="margin-right: 5px" />Coba Premium seharga IDR0</a></span>
                <a href="#"><span class="text-small">Pengaturan & Privasi</span></a>
                <a href="#"><span class="text-small">Bantuan</span></a>
                <a href="#"><span class="text-small">Bahasa</span></a>
              </div>
              <div class="dropdown-item list-group-item d-flex flex-column">
                <span class="text-head">Kelola</span>
                <a href=""><span class="text-small">Posting & Aktivitas</span></a>
                <a href=""><span class="text-small">Akun Posting Pekerjaan</span></a>
              </div>
              <div class="dropdown-item list-group-item">
                <a href=""><span class="text-small">Logout</span></a>
              </div>
            </div>
          </li>
          <li class="nav-item garis"></li>
          <li class="nav-item dropdown" style="padding-top: 2px">
            <a class="nav-link nav-link-menu padd" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 80px">
              <img src="Assets/untukBisnis.svg" alt="" width="22px" height="22px" />
              <span class="dropdown-toggle">Untuk Bisnis</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownId">
              <a class="dropdown-item" href="#">
                <img src="Assets/login-logo.svg" alt="" />
              </a>
              <a class="dropdown-item" href="#">Action 2</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</body>

</html>