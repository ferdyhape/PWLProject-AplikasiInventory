<!DOCTYPE html>
<html lang="en">

  <head>
    <title>BERANDA</title>
    <link rel="shortcut icon" href="assets/images/home.png">
  </head>

<body>
  @include('layouts/header')
  <section class="section main-banner" id="top" data-section="section1">
      <img src="assets/images/bannerdepan.jpg" id="bg-poto" alt="">

      <div class="video-overlay header-text">
          <div class="caption">
              <h6>Belajar Programming dari Nol</h6>
              <h2><em>Z </em> - CLASS</h2>
              <div class="main-button">
                  <div class="scroll-to-section"><a href="/course">Cek Kelas</a></div>
              </div>
          </div>
      </div>
  </section>


  <section class="features mb-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-12">
          <div class="features-post">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-pencil"></i>Junior Class</h4>
              </div>
              <div class="content-hide">
                <p>Ingin belajar pemrograman, tapi tidak punya basic IT? segera ambil junior class, Tingkatan yang cocok untuk pemula yang ingin belajar mengenai Pemrograman dari awal.</p>
                <div class="scroll-to-section"><a href="/course">Info Selengkapnya.</a></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post second-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-graduation-cap"></i>Intermediate Class</h4>
              </div>
              <div class="content-hide">
                <p>anda sudah punya skill pemrograman, tapi masih sangat sedikit? kelas yang cocok untuk anda yang ingin menambah dan mengasah skill dan pengalaman di bidang Pemrograman, dan yang pasti akan mendapat berbagai modul yang ada di Z-Class.</p>
                <div class="scroll-to-section"><a href="/course">Info Selengkapnya</a></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post third-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-book"></i>Senior Class</h4>
              </div>
              <div class="content-hide">
                <p>sudah sangat mahir di pemrograman? silahkan gabung kelas ini untuk lebih mengasah dengan project2 besar yang siap memberikan pengalaman tentunya.</p>
                <div class="scroll-to-section"><a href="/course">Info Selengkapnya</a></div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @include("layouts/footer")
  @include("layouts/script")
</body>
</html>