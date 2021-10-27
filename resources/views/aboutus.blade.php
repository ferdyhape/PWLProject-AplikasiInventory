<!DOCTYPE html>
<html lang="en">
    <head>
        <title>TENTANG KAMI</title>
        <link rel="shortcut icon" href="assets/images/user.png">
    </head>
    <body>
        @include('layouts/header')
        <section class="section why-us" data-section="section2">
          <div class="container">
            <br><br><br><br>
            <div class="section-heading">
              <h2>Daftar Nama Siswa Kelas</h2>
            </div>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kota</th>
                    <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $faker = Faker\Factory::create('id_ID');

                    for ($i=1; $i <= 20; $i++) { 
                        echo "<tr>";
                        echo "<td>$i</td>";
                        echo "<td>$faker->name</td>";
                        echo "<td>$faker->city</td>";
                        echo "<td>$faker->email</td>";
                        echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
              <div class="row">
                <div class="col-md-12">
                  <div class="section-heading mt-5">
                    <h2>Kenapa harus Z-Class?</h2>
                  </div>
                </div>
                <div class="col-md-12">
                  <div id='tabs'>
                    <ul>
                      <li><a href='#tabs-1'>Learn</a></li>
                      <li><a href='#tabs-2'>Practice</a></li>
                      <li><a href='#tabs-3'>Events</a></li>
                    </ul>
                    <section class='tabs-content'>
                      <article id='tabs-1'>
                        <div class="row">
                          <div class="col-md-6">
                            <img src="assets/images/Learn.jpg" style="margin-top: 65px; margin-left: 30px; width: 450px;" alt="">
                          </div>
                          <div class="col-md-6">
                            <h4>Learn</h4>
                            <p>Kami menyediakan banyak modul, mulai dari pemrograman dasar hingga pemrograman lanjut. Kami menyediakan modul modul untuk berbagai Bahasa pemrograman, seperti C, C#, C++, Java, dsb. Kami menyediakan fitur untuk listening modul, yang didalamnya modul tersebut dibacakan secara ototmatis sehingga Z-Member tidak perlu repot-repot membaca, karena kami sudah membacakannya untuk anda.</p>
                          </div>
                        </div>
                      </article>
                      <article id='tabs-2'>
                        <div class="row">
                          <div class="col-md-6">
                            <img src="assets/images/practice.jpeg" style="margin-top: 65px;" alt="">
                          </div>
                          <div class="col-md-6">
                            <h4>Practice</h4>
                            <p>Kami menyediakan kesempatan untuk Z-Member untuk memulai sebuah projek. Mulai dari projek kecil individu, hingga projek skala besar dan menengah, yang dapat dikerjakan secara kolaboratif dengan Z-Member yang lain.</p> 
                          </div>
                        </div>
                      </article>
                      <article id='tabs-3'>
                        <div class="row">
                          <div class="col-md-6">
                            <img src="assets/images/event.jpg" style="margin-top: 65px;" alt="">
                          </div>
                          <div class="col-md-6">
                            <h4>Events</h4>
                            <p>Kami menyediakan event event menarik seperti webinar, workshop, opentalk, dan lain sebagainya. Z-Member dapat bergabung ke event tersebut dengan mendaftar melalui form yang telah kami sediakan. Untuk event, kami kolaborasikan dengan fitur calendar sehingga Z-Member dapat dengan mudah mengingat dan menandai event mana saja yang sudah terlewat, sedang berlangsung, atau yang akan digelar.</p>
                          </div>
                        </div>
                      </article>
                    </section>
                  </div>
                </div>
              </div>
            </div>
          </section>
          @include('layouts/header')
          @include('layouts/script')
    </body>
</html>