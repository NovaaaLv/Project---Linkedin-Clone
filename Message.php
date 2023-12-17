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
    <div class="container-main d-flex">
      <div class="container-main-pesan container-mt rounded-3 list-group-item">
        <!-- Container Semua section Sebelah Kiri-->
        <div class="container-all-sect-left rounded-3">
          <!-- Container "Pesan" -->
          <div class="container-sect-1 rounded-3">
            <div class="text">
              <span class="text-head">Pesan</span>
            </div>
            <div class="container-icon">
              <button>
                <i class="bi bi-three-dots size-icon-pesan"></i>
              </button>
              <button>
                <i class="bi bi-box-arrow-in-down-left size-icon-pesan"></i>
              </button>
            </div>
          </div>
          <!-- Container "Cari Pesan" -->
          <div class="conainer-sect-2 list-group-item">
            <div class="container-input-cariPesan">
              <div class="icon-seacrh">
                <i class="bi bi-search size-icon-input"></i>
                <input type="text" name="" id="" placeholder="Cari Pesan" />
              </div>
              <i class="bi bi-sliders size-icon-input"></i>
            </div>
            <!-- Container Button Prioritas dan Lainnya -->
            <div class="container pt-2 container-icon d-flex justify-content-center gap-10">
              <button class="text-head">Prioritas</button>
              <button class="text-head">Lainnya</button>
            </div>
          </div>
          <!-- Container Profile -->
          <div class="container-sect-3 list-group-item">
            <div class="d-flex justify-content-between">
              <div class="container-img-message d-flex gap-2">
                <div class="img">
                  <img src="Assets/login-logo.svg" alt="" width="60px" />
                </div>
                <div class="container-message d-flex flex-column">
                  <span style="font-size: 18px">Name Account</span>
                  <span class="color-text-desk" style="font-size: 15px">Message</span>
                </div>
              </div>
              <div class="container-date">
                <span class="color-text-desk">Date</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container-main-message-middle container-mt list-group">
        <div class="container-middle-sect1 d-flex list-group-item">
          <div class="profile-acc d-flex flex-column">
            <span class="text-head">Name Account</span>
            <span class="text-small">Account Desk</span>
          </div>
          <div class="container-icon">
            <button>
              <i class="bi bi-three-dots size-icon-pesan color-text-desk"></i>
            </button>
            <button>
              <i class="bi bi-camera-video-fill size-icon-pesan color-text-desk"></i>
            </button>
            <button>
              <i class="bi bi-star size-icon-pesan color-text-desk"></i>
            </button>
          </div>
        </div>
        <div class="container-middle-sect2 list-group-item">
          <img src="Assets/login-logo.svg" alt="" width="100px" />
          <div class="container-name-acc">
            <span class="text-head">Name Account</span>
            <span class="text-small">ke -1</span>
          </div>
          <span>Name Job</span>
          <div class="container-massage" style="min-height: 200px">
            <div class="d-flex justify-content-center">
              <div class="con-date position-absolute">Date</div>
            </div>
            <div class="pt-4 d-flex">
              <img src="Assets/login-logo.svg" alt="" />
              <div class="con-message">
                <div class="ps-2">
                  <span class="text-head">Name Account</span>
                  <span class="text-small">Date</span>
                </div>
                <span class="ps-2">Message</span>
              </div>
            </div>
          </div>
        </div>
        <div class="container-middle-sect3 list-group-item">
          <div class="d-flex justify-content-between">
            <textarea class="message-area" name="" id="" cols="55" rows="4" placeholder="Tuliskan Pesan..."></textarea>
            <i class="bi bi-chevron-compact-up" style="font-size: 25px"></i>
          </div>
        </div>
        <div class="container-middle-sect-4 list-group-item d-flex align-items-center justify-content-between">
          <div class="d-flex align-items-center container-icon">
            <button>
              <i class="bi bi-card-image" style="font-size: 20px; color: #5f5f5f"></i>
            </button>
            <button>
              <i class="bi bi-link-45deg" style="font-size: 24px; color: #5f5f5f"></i>
            </button>
            <button>
              <i class="bi bi-filetype-gif" style="font-size: 20px; color: #5f5f5f"></i>
            </button>
            <button>
              <i class="bi bi-emoji-smile" style="font-size: 20px; color: #5f5f5f"></i>
            </button>
          </div>
          <div class="d-flex">
            <button style="
                  background-color: #ede4ed;
                  padding: 0px 10px;
                  border: transparent;
                  border-radius: 10px;
                  color: #979397;
                ">
              Kirim
            </button>
            <div class="container-icon ps-2">
              <i class="bi bi-three-dots" style="color: #5f5f5f; font-size: 24px"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="">
        <div class="container-promorion container-mt ms-5 bg-white list-group-item rounded-3" style="width: 300px; height: 250px">
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

        <?php include('src/Footer.php'); ?>
      </div>
    </div>
  </section>

  <!-- Message -->
  <?php include('src/Right-Message-Bottom.php'); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>