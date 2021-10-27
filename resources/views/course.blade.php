<!DOCTYPE html>
<html lang="en">
<head>
    <title>KELAS</title>
    <link rel="shortcut icon" href="assets/images/kelas.png">
</head>
<body>
    @include('layouts/header')
    <section class="section courses" data-section="section4">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading mt-5">
                <h2>Pilih Kelasmu dan Mulai Belajar</h2>
              </div>
            </div>
            <div class="owl-carousel owl-theme">
              <div class="item">
                <img src="assets/images/logic.jpg" alt="Course #1">
                <div class="down-content">
                  <h4>Programming Logic</h4>
                  <p>Pelajari logika-logika dasar dalam pemrograman dimulai dari jenis-jenis logika pemrograman, gerbang logika, hingga computational thinking.</p>
                  <div class="author-image">
                    <img src="assets/images/author-01.png" alt="Author 1">
                  </div>
                  <div class="text-button-pay">
                    <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="item">
                <img src="assets/images/pengenalandata.jpg" alt="Course #2">
                <div class="down-content">
                  <h4>Pengenalan Data pada Pemrograman</h4>
                  <p>Pelajari logika-logika dasar dalam pemrograman dimulai dari jenis-jenis logika pemrograman, gerbang logika, hingga computational thinking.</p>
                  <div class="author-image">
                    <img src="assets/images/author-02.png" alt="Author 2">
                  </div>
                  <div class="text-button-free">
                    <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="item">
                <img src="assets/images/dasargit.jpg" alt="Course #3">
                <div class="down-content">
                  <h4>Belajar Dasar Git dengan GitHub</h4>
                  <p>Pelajari cara mengelola data atau kode menggunakan Git dengan GitHub, mulai dari dasar-dasar Git hingga berkolaborasi dengan tim.</p>
                  <div class="author-image">
                    <img src="assets/images/author-03.png" alt="Author 3">
                  </div>
                  <div class="text-button-pay">
                    <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="item">
                <img src="assets/images/C.jpg" alt="Course #4">
                <div class="down-content">
                  <h4>Memulai Pemrograman Dengan C</h4>
                  <p>Belajar programming menggunakan bahasa C yang menjadi populer dikarenakan cepat dan mudah untuk dipelajari bagi para pemula. </p>
                  <div class="author-image">
                    <img src="assets/images/C.jpg" alt="Author 4">
                  </div>
                  <div class="text-button-free">
                    <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="item">
                <img src="assets/images/java.jpg" alt="">
                <div class="down-content">
                  <h4>Memulai Pemrograman Dengan Java</h4>
                  <p>Belajar bahasa Java buat kamu yang ingin mempelajari konsep Pemrograman Berorientasi Objek (PBO) terpopuler untuk mengembangkan aplikasi.</p>
                  <div class="author-image">
                    <img src="assets/images/java.jpg" alt="">
                  </div>
                  <div class="text-button-pay">
                    <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="item">
                <img src="assets/images/solid.jpg" alt="">
                <div class="down-content">
                  <h4>Belajar Prinsip Pemrograman SOLID</h4>
                  <p>Pelajari kelima prinsip desain yang merupakan pedoman untuk rancangan kode yang baik pada pemrograman berorientasi objek (OOP).</p>
                  <div class="author-image">
                    <img src="assets/images/author-01.png" alt="">
                  </div>
                  <div class="text-button-free">
                    <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      @include('layouts/footer')
      @include('layouts/script')
</body>
</html>