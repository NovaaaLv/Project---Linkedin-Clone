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
    <div class="wrap">
      <ul class="group list-group list-group-flush kiri1 rounded-3" style="width: 250px">
        <li class="list-group-item" style="padding: 0">
          <div class="kiri1">
            <img src="Assets/back-1.svg" alt="" width="250px" />
          </div>
          <div class="kamera">
            <img src="Assets/camera-logo.svg" alt="" width="80px" id="slmtDatang" />
          </div>
        </li>
        <li class="list-group-item kiri1" style="padding: 70px 0px 20px 0px; width: 250px">
          <label class="hover-text" for="slmtDatang">Selamat Datang, Nama ! </label><a class="hover-text">Tambahkan Foto</a>
        </li>
        <li class="list-group-item flex-column">
          <span class="text-hal-utama op-08" style="padding-top: 5px">Koneksi</span>
          <span class="text-hal-utama" style="padding-bottom: 5px">Kembangkan Jaringan Anda</span>
        </li>
        <li class="list-group-item flex-column">
          <span class="text-hal-utama">Akses alat & wawasan ekslusif</span>
          <span class="text-hal-utama"><a href="" class="hover-text" style="color: #5f5f5f"><img src="Assets/card-gold-logo.svg" alt="" width="12px" style="margin-right: 5px" />Coba Premium seharga IDR0</a></span>
        </li>
        <li class="list-group-item">
          <span class="text-hal-utama"><img src="Assets/favorit-logo.svg" width="12px" alt="" style="margin-right: 5px" />
            Item saya</span>
        </li>
        <ul class="group list-group list-group-flush kiri1 rounded-3">
          <li class="list-group-item flex-column" style="width: 250px; margin-top: 20px">
            <a href="" class="text-hal-utama" style="padding-top: 5px; color: rgb(43, 43, 189)">Group</a>
            <a href="" class="text-hal-utama" style="padding-top: 10px; color: rgb(43, 43, 189)">Acara</a>
            <a href="" class="text-hal-utama" style="padding-top: 10px; color: rgb(43, 43, 189)">Hashtag yang diikuti</a>
          </li>
          <li class="list-group-item flex-column" style="width: 250px">
            <span class="text-hal-utama">Temukan lebih banyak </span>
          </li>
        </ul>
      </ul>
      <div class="wrap2">
        <ul class="group second rounded-nv-card">
          <li class="card-item d-flex">
            <img src="Assets/login-logo.svg" alt="" width="45px" style="margin-top: 10px; margin-left: -17px" />
            <input class="rounded-nv text-black-50 text-start padd-left-25" type="button" name="txPosting" style="margin: 10px 10px 0px 10px; width: 90%" value="Mulai buat posting" />
          </li>
          <li class="card-item">
            <ul class="justify-content-between d-flex padd-right-25" style="padding: 20px">
              <li>
                <img src="Assets/galeri-icon.svg" alt="" width="25px" style="margin-right: 10px" />Media
              </li>
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="brown" class="bi bi-calendar2-week-fill" viewBox="0 0 16 16">
                  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5m9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5M8.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM3 10.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5m3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z" />
                </svg>
                Acara
              </li>
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="orange" class="bi bi-bar-chart-steps" viewBox="0 0 16 16">
                  <path d="M.5 0a.5.5 0 0 1 .5.5v15a.5.5 0 0 1-1 0V.5A.5.5 0 0 1 .5 0M2 1.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zm2 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-6a.5.5 0 0 1-.5-.5zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5z" />
                </svg>
                Tulis Artikel
              </li>
            </ul>
          </li>
        </ul>
        <ul style="width: 550px; padding: 0">
          <li class="card-item">
            <div class="wrapcard d-flex">
              <div class="garis-sortir"></div>
              <span class="text-muted">Sortir menurut: </span>
              <a class="nav-link-menu" style="width: auto" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="dropdown-toggle">Terpopuler</span>
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownId">
                <a class="dropdown-item" href="#">Action 1</a>
                <a class="dropdown-item" href="#">Action 2</a>
              </div>
            </div>
          </li>
        </ul>
        <ul class="group seconds list-group rounded-nv-card">
          <li class="text-head" style="
                color: rgb(82, 81, 81);
                padding: 10px 0px 40px 10px;
                font-size: 14px;
              ">
            Direkomendasikan untuk anda
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <div class="d-flex">
              <img src="Assets/login-logo.svg" alt="" />
              <ul class="ps-3">
                <li class="text-head">
                  <span name="nameACC">Name Account</span>
                </li>
                <li class="text-medium">
                  <span name="deskACC">Desk Account</span>
                </li>
                <li class="text-small">
                  <span name="discACC">Discuss about</span>
                </li>
              </ul>
            </div>
            <div class="btn-ikuti">
              <button class="btn-follow">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                </svg>
                Ikuti
              </button>
            </div>
          </li>
        </ul>
      </div>
      <div class="wrap3">
        <ul class="group third rounded-nv-card list-group">
          <li class="card-item d-flex justify-content-between ms-3 mt-3 me-3">
            <span class="text-head">Tambahkan ke feed Anda</span>
            <a href="#" class="text-black-50">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-square-fill" viewBox="0 0 16 16">
                <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm8.93 4.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
              </svg>
            </a>
          </li>
          <li class="card-item ps-3">
            <div class="d-flex">
              <img src="Assets/login-logo.svg" alt="" />
              <div class="flex-column d-flex align-items-start">
                <ul class="ps-3 pt-3">
                  <li class="text-head">
                    <span name="bussACC">Bussines Account</span>
                  </li>
                  <li class="text-smaller">
                    <span name="deskACC">Perusahaan</span>
                    <span>|</span>
                    <span name="bidangACC">Bidang</span>
                  </li>
                </ul>
                <div class="btn-ikuti">
                  <button style="
                        border-radius: 20px;
                        color: rgb(95, 95, 95);
                        font-size: 18px;
                        border: 1px solid rgb(66, 66, 66);
                        background-color: transparent;
                        padding: 0px 8px;
                        margin-left: 15px;
                        margin-bottom: 10px;
                        margin-top: 5px;
                      ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                    </svg>
                    Ikuti
                  </button>
                </div>
              </div>
            </div>
          </li>
          <li class="list-group-item d-none">Yang lengkap?</li>
        </ul>
        <ul class="p-0 mt-3">
          <li class="see-who-hiring rounded-nv-card"></li>
        </ul>
        <div class="">
          <?php include('src/Footer.php'); ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Message -->
  <?php include('src/Right-Message-Bottom.php'); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>