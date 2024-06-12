<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pendaftaran Siswa Baru | SMK TI BALI GLOBAL</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"  
    />

    

    <style>
      * {
        margin: 0;
        padding: 0;
      }

      .teks {
        font-family: "Poetsen One", sans-serif;
        font-weight: 400;
        font-style: normal;
      }


      .hero {
        background-image: url('gedung.jpg');
        overflow: hidden;
        -webkit-mask-image: linear-gradient(
          rgb(255, 255, 255) 50%,
          rgba(255, 255, 255, 0)
        );
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        position: relative;
        opacity: 0.8;
        width: 100%;
        height: 500px;
        z-index: 5;
      }

      .welcome {
        position: absolute;
      }

      .buton:hover {
        background: red;
        text-colore:white;
      }

      .main {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 15px;
        height: 150px;
      }

      @media (max-width: 768px) {
        .hero {
          height: 200px; 
        }
      }


    </style>


  </head>
  <body>

    <!-- start navbar -->
    
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #213b52">
      <div class="container">
        <a class="teks navbar-brand" href="#">SMK TI BALI GLOBAL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="form-daftar.php">Pendaftaran</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

      <!-- end navbar -->

      <!-- start hero -->

    <section class="carousel pt-5">
      <div class="hero d-flex align-items-center justify-content-center text-light">
        <div class="row p-4 text-center position-absolute">
          <div class="col">
            <h1 class="fw-bold" id="teks"></h1>
          </div>
        </div>
      </div>
    </section>
    <section class="daftar p-4">
      <div class="container">
         <div class="row">

          <div class="col-6 d-flex justify-content-end">
  
            <a class="btn btn-center btn-dark"style="background-color: #213b52"
            href="form-daftar.php">Daftar
            Sekarang</a>
          </div>
          <div class="col-6 d-flex justify-content-start">
            <a class="btn btn-center btn-dark"style="background-color: #213b52"
            href="list-siswa.php">Lihat pendaftar</a>
          </div>
          
        </div>
      </div>
    </section>

    <!-- end hero -->

    <!-- start info tgl -->

    <section class="main text-dark" >
      <h3>PENDAFTARAN DIMULAI PADA TANGAL 19 JULI 2024</h3>
    </section>

    <!-- end info tgl -->

    <!-- start fasilitas sekolah -->

    <section id="team" class="team" style="background-color: #213b52">
      <div class="container ">

        <div class="section-title p-4 text-center">
          <h2><font color="white">FASILITAS SEKOLAH</font></h2><font color="white">
          </font><p><font color="white">Berbagai fasilitas yang dimiliki oleh SMK TI Bali Global Denpasar sangat lengkap, mulai dari fasilitas Lab Komputer masing-masing jurusan, ruangan belajar yang sangat nyaman, fasilitas internet yang lancar dan dapat diakses dari semua area sekolah serta kegiatan ekstra yang banyak pilihan untuk mendukung kreatifitas siswa.</font></p>
        </div>

        <div style="padding: 20px; background-color: white;border-radius: 5px">
        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class=""><img src="https://smkti-baliglobal.sch.id/gambar/fasilitas/lab.jpg" class="img-fluid" alt="">
                  <h3 class="btn-learn-more text-center">Lab Komputer Lengkap</h3>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
               <div class="member d-flex align-items-start">
             <div class=""><img src="https://smkti-baliglobal.sch.id/gambar/fasilitas/kelas.jpg" class="img-fluid" alt="">
             <h3 class="btn-learn-more text-center">ruang Belajar Nyaman</h3>
            </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
             <div class=""><img src="https://smkti-baliglobal.sch.id/gambar/fasilitas/wifi.jpg" class="img-fluid" alt="">
             <h3 class="btn-learn-more text-center">Akses Internet Lancar</h3>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
             <div class=""><img src="https://smkti-baliglobal.sch.id/gambar/fasilitas/ekstra.jpg" class="img-fluid" alt="">
             <h3 class="btn-learn-more text-center">Kegiatan Extra</h3>
              </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- end fasilitas sekolah -->

    <!-- start jurusan -->
    <section id="services" class="services" style="background-color: #213b52">
      <div class="container p-4">

        <div class="section-title ">
          <h2 class="text-center"><font color="white">JURUSAN</font></h2><font color="white">
          </font><p><font color="white">SMK TI Bali Global Denpasar memiliki 5 jurusan, diantaranya Teknik Komputer dan Jaringan, Rekayasa Perangkat Lunak, Multimedia, Desain Komunikasi Visual (DKV) dan Animasi. Semua jurusan ini memiliki bidang keahlian yang sering dibutuhkan di dunia kerja.</font></p>
        </div>

<style type="text/css">
  .row .col {
  border: none;
}
</style>
        <div class="row">
          <div class="col">
             <img src="https://smkti-baliglobal.sch.id/gambar/jurusan/rpl.png" class="img-fluid" alt="">
          </div>
          <div class="col">
           <img src="https://smkti-baliglobal.sch.id/gambar/jurusan/tkj.png" class="img-fluid" alt="">
          </div>
          <div class="col">
            <img src="https://smkti-baliglobal.sch.id/gambar/jurusan/mm.png" class="img-fluid" alt="">
          </div>
          <div class="col">
           <img src="https://smkti-baliglobal.sch.id/gambar/jurusan/animasi.png" class="img-fluid" alt="">
          </div>
          <div class="col">
            <img src="https://smkti-baliglobal.sch.id/gambar/jurusan/dkv.png" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </section>

    <!-- end jurusan -->

    <!-- start galeri foto -->

    <section id="portfolio" class="portfolio section-bg p-4">
      <div class="container">

        <div class="section-title text-center">
          <h2>GALERY FOTO</h2>
          <p>Galery foto kegiatan yang dilakukan oleh SMK TI Bali Global Denpasar</p>
        </div>
        
		<div class="row portfolio-container" style="position: relative; height: 819.407px;">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="position: absolute; left: 0px; top: 0px;">
            <div class="portfolio-wrap">
              <img src="https://smkti-baliglobal.sch.id/file/galery/HRNFJK.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="https://smkti-baliglobal.sch.id/file/galery/HRNFJK.jpg" data-gall="portfolioGallery" class="venobox vbox-item" title="Kunjungan Lembaga Pendidikan With The World. Inc Japan"><i class="icofont-plus-circle"></i></a>
              </div>
              <div class="portfolio-info ">
                <h4>Kunjungan Lembaga Pendidikan With The World. Inc Japan</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="position: absolute; left: 380px; top: 0px;">
            <div class="portfolio-wrap">
              <img src="https://smkti-baliglobal.sch.id/file/galery/KVDSRI.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="https://smkti-baliglobal.sch.id/file/galery/KVDSRI.jpg" data-gall="portfolioGallery" class="venobox vbox-item" title="Penyerahan Piala Bergilir Prof Bandem"><i class="icofont-plus-circle"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Penyerahan Piala Bergilir Prof Bandem</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="position: absolute; left: 760px; top: 0px;">
            <div class="portfolio-wrap">
              <img src="https://smkti-baliglobal.sch.id/file/galery/YMUSKT.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="https://smkti-baliglobal.sch.id/file/galery/YMUSKT.jpg" data-gall="portfolioGallery" class="venobox vbox-item" title="Lomba Operet Teater Bagol"><i class="icofont-plus-circle"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Lomba Operet Teater Bagol</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="position: absolute; left: 0px; top: 263.438px;">
            <div class="portfolio-wrap">
              <img src="https://smkti-baliglobal.sch.id/file/galery/GEMHNU.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="https://smkti-baliglobal.sch.id/file/galery/GEMHNU.jpg" data-gall="portfolioGallery" class="venobox vbox-item" title="Launching Film Animasi MoW Panji Semirang"><i class="icofont-plus-circle"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Launching Film Animasi MoW Panji Semirang</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="position: absolute; left: 380px; top: 263.438px;">
            <div class="portfolio-wrap">
              <img src="https://smkti-baliglobal.sch.id/file/galery/STMIFP.jpeg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="https://smkti-baliglobal.sch.id/file/galery/STMIFP.jpeg" data-gall="portfolioGallery" class="venobox vbox-item" title="Magang di berbagai Industri Terbaik dan Terpercaya"><i class="icofont-plus-circle"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Magang di berbagai Industri Terbaik dan Terpercaya</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="position: absolute; left: 760px; top: 263.438px;">
            <div class="portfolio-wrap">
              <img src="https://smkti-baliglobal.sch.id/file/galery/MHIAYT.jpeg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="https://smkti-baliglobal.sch.id/file/galery/MHIAYT.jpeg" data-gall="portfolioGallery" class="venobox vbox-item" title="Talkshow abersama Elcoga Radio"><i class="icofont-plus-circle"></i></a>
               
              </div>
              <div class="portfolio-info">
                <h4>Talkshow abersama Elcoga Radio</h4>
               
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="position: absolute; left: 0px; top: 555.938px;">
            <div class="portfolio-wrap">
              <img src="https://smkti-baliglobal.sch.id/file/galery/LM4B7U.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="https://smkti-baliglobal.sch.id/file/galery/LM4B7U.jpg" data-gall="portfolioGallery" class="venobox vbox-item" title="Dokumentasi Multimedia"><i class="icofont-plus-circle"></i></a>
               
              </div>
              <div class="portfolio-info">
                <h4>Dokumentasi Multimedia</h4>
               
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="position: absolute; left: 380px; top: 555.938px;">
            <div class="portfolio-wrap">
              <img src="https://smkti-baliglobal.sch.id/file/galery/314PKL.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="https://smkti-baliglobal.sch.id/file/galery/314PKL.jpg" data-gall="portfolioGallery" class="venobox vbox-item" title="Proses Pembuatan Animasi"><i class="icofont-plus-circle"></i></a>
               
              </div>
              <div class="portfolio-info">
                <h4>Proses Pembuatan Animasi</h4>
               
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="position: absolute; left: 760px; top: 555.938px;">
            <div class="portfolio-wrap">
              <img src="https://smkti-baliglobal.sch.id/file/galery/SZWAIV.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="https://smkti-baliglobal.sch.id/file/galery/SZWAIV.jpg" data-gall="portfolioGallery" class="venobox vbox-item" title="Proses Green Screen Multimedia"><i class="icofont-plus-circle"></i></a>
               
              </div>
              <div class="portfolio-info">
                <h4>Proses Green Screen Multimedia</h4>
               
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- end galeri foto -->

    <!-- start sponsor -->

    <section class="container">
      <div class="row p-4 pt-5 pb-5 mt-5 mb-5 justify-content-center">
        <div class="col-md-2 p-3">
          <img src="ruang.jpg" class="w-100" alt="">
        </div>
        <div class="col-md-2 p-3 align-items-center">
          <img src="pp.png" class="w-100 align-items-center" alt="">
        </div>
        <div class="col-md-2 p-3">
          <img src="smkop.png" class="w-100" alt="">
        </div>
      </div>
    </section>
    
<!-- end sponsor -->

<!-- start footer -->

<section id="contact" class="contact" style="background-color: #213b52">
      <div class="container">

        <div class="section-title">
          <h2><font color="white">Kontak Kami</font></h2><font color="white">
          </font><p><font color="white">Silahkan kunjungi segera SMK TI Bali Global Denpasar, kalau ada yang yang ingin ditanyakan silahkan hubungi kontak dibawah ini.</font></p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box text-light">
                  <a href="https://www.youtube.com/channel/UCn32n8rVp8JjZQ7kCN2h2uA" class="youtube" target="_blank"><i class="bx bxl-youtube"></i></a>
                  <a href="https://facebook.com/globaliTIDPS" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
                  <a href="https://www.instagram.com/globalitidps" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
                  <h3>SMK TI Bali Global Denpasar</h3>
                  <p>Jl. Tukad Citarum No. 44 Denpasar. Bali</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4 text-light">
                  <i class="bx bx-envelope"></i>
                  <h3>Email</h3>
                  <p>info@smkti-baliglobal.sch.id</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4 text-light">
                  <i class="bx bx-phone-call"></i>
                  <h3>Telp/Fax</h3>
                  <p>(0361) - 249434</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-5 mt-4 mt-lg-0 ">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.084739364345!2d115.23159441464578!3d-8.683491693760983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2409b0e5e80db%3A0xad78f1ff66b638d2!2sSMK%20TI%20Bali%20Global%20Denpasar!5e0!3m2!1sid!2sid!4v1594526597296!5m2!1sid!2sid" width="100%" height="370" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>

        </div>

      </div>
    </section>
        
<!-- end footer -->



    <?php if(isset($_GET['status'])): ?>
    
      <?php
                if($_GET['status'] == 'sukses') {
                    echo "<script type='text/javascript'>alert('Pendaftaran Anda Berhasil');</script>";
                } else {
                   echo "<script type='text/javascript'>alert('Pendataran anda gagal!');</script>";
                }
            
            ?>
   
    <?php endif; ?>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script src="script.js"></script>
  </body>
</html>