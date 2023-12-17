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
    <div class="container d-flex justify-content-between" style="margin-top: 4.5rem">
      <div class="left d-flex flex-column bg-white list-group">
        <span class="text-head ps-3 pt-3"> Kelola jaringan saya</span>
        <span class="text-medium p-2 ps-4 text-large"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#757474" class="bi bi-people-fill" viewBox="0 0 16 16">
            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
          </svg>
          <span class="ps-3 align-items-baseline"> Koneksi</span></span>
        <span class="text-medium p-2 ps-4 text-large">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#757474" class="bi bi-person-fill" viewBox="0 0 16 16">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
          </svg>
          <span class="ps-3 align-items-baseline">
            Mengikuti & Pengikut</span></span>
        <span class="text-medium p-2 ps-4 text-large">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#757474" class="bi bi-calendar3" viewBox="0 0 16 16">
            <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
            <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
          </svg>
          <span class="ps-3 align-items-baseline"> Acara</span></span>
        <span class="text-medium p-2 ps-4 text-large">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#757474" class="bi bi-building" viewBox="0 0 16 16">
            <path d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z" />
            <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1zm11 0H3v14h3v-2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15h3z" />
          </svg>
          <span class="ps-3 align-items-baseline"> Halaman</span></span>
        <span class="text-medium p-2 ps-4 text-large">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#757474" class="bi bi-newspaper" viewBox="0 0 16 16">
            <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5z" />
            <path d="M2 3h10v2H2zm0 3h4v3H2zm0 4h4v1H2zm0 2h4v1H2zm5-6h2v1H7zm3 0h2v1h-2zM7 8h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2z" />
          </svg>
          <span class="ps-3 align-items-baseline"> Newsletter</span></span>
        <span class="text-medium p-2 ps-4 text-large">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#757474" class="bi bi-hash" viewBox="0 0 16 16">
            <path d="M8.39 12.648a1.32 1.32 0 0 0-.015.18c0 .305.21.508.5.508.266 0 .492-.172.555-.477l.554-2.703h1.204c.421 0 .617-.234.617-.547 0-.312-.188-.53-.617-.53h-.985l.516-2.524h1.265c.43 0 .618-.227.618-.547 0-.313-.188-.524-.618-.524h-1.046l.476-2.304a1.06 1.06 0 0 0 .016-.164.51.51 0 0 0-.516-.516.54.54 0 0 0-.539.43l-.523 2.554H7.617l.477-2.304c.008-.04.015-.118.015-.164a.512.512 0 0 0-.523-.516.539.539 0 0 0-.531.43L6.53 5.484H5.414c-.43 0-.617.22-.617.532 0 .312.187.539.617.539h.906l-.515 2.523H4.609c-.421 0-.609.219-.609.531 0 .313.188.547.61.547h.976l-.516 2.492c-.008.04-.015.125-.015.18 0 .305.21.508.5.508.265 0 .492-.172.554-.477l.555-2.703h2.242l-.515 2.492zm-1-6.109h2.266l-.515 2.563H6.859l.532-2.563z" />
          </svg>
          <span class="ps-3 align-items-baseline"> Hashtag</span></span>
        <span class="text-head p-2 ps-4 text-large">
          Tampilkan lebih sedikit
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M7.776 5.553a.5.5 0 0 1 .448 0l6 3a.5.5 0 1 1-.448.894L8 6.56 2.224 9.447a.5.5 0 1 1-.448-.894l6-3z" />
          </svg>
        </span>
        <div class="list-group-item p-0" style="height: 250px; background-color: hite"></div>
        <div class="contain pt-3 pb-3">
          <div class="container d-flex flex-column align-items-center text-small footer-linkedin">
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

      <!-- Right -->

      <div class="right">
        <div class="container bg-white d-flex align-items-center justify-content-between rounded-3" style="height: 40px">
          <span class="text-network">Tidak Ada Undangan yang belum dijawab</span>
          <span class="text-head text-network">Kelola</span>
        </div>

        <div class="container bg-white mt-3 p-3 rounded-3">
          <div class="d-flex align-items-center justify-content-between">
            <span class="text-head">Capai target lebih cepat dengan Premium
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
              <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
            </svg>
          </div>
          <span class="text-small pt-2 pb-2">Lihat siapa yang telah mengunjungi profil Anda dan kirim pesan
            langsung ke anggota di luar jaringan Anda.</span>
          <div class="container p-0 pb-3">
            <img src="Assets/login-logo.svg" alt="" width="25px" />
            <span class="text-smaller">Jutaan anggota menggunakan Premium</span>
          </div>
          <button class="btn-premium">Coba Premiumseharga IDR0</button>
        </div>

        <div class="container mt-4 bg-white rounded-3 p-3">
          <div class="contain d-flex justify-content-between pb-3">
            <span>Orang di Indonesia juga mengikuti orang orang ini</span>
            <span class="text-head">Lihat semua</span>
          </div>
          <div class="contain">
            <div class="card rounded" style="border: 1px solid #767474">
              <div class="d-block">
                <div class="area1 p-3 py-5"></div>
                <div class="area2 text-start px-3" style="max-height: 180px">
                  <div class="image mr-3">
                    <img src="Assets/login-logo.svg" class="rounded-circle" width="65px" />
                    <h5 class="mt-3 thi">Account Name</h5>
                    <div class="contain d-flex flex-column">
                      <span class="text-medium">Name Company</span>
                      <span class="pb-2 text-smaller">Total Pengikut</span>
                    </div>
                    <div class="btn-ikuti">
                      <button class="btn-follow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                          <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                        </svg>
                        Ikuti
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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