<!DOCTYPE html>
<html lang="en">
<head>
    <title>KONTAK</title>
    <link rel="shortcut icon" href="assets/images/contact.png">
</head>
<body>
    @include('layouts/header')
    <section class="section contact" data-section="section6">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Hubungi Kami di</h2>
              </div>
            </div>
            <div class="col-md-6" id="i">
              <div class="row">
                <div class="col-lg-2"><i class="fab fa-whatsapp-square" style="font-size: 50px; color: #27d248"></i></div>
                <div class="col"><a href="wa.me/6287856725286"><p>Whatsapp: 087856725286</p></a></div>
                <div class="w-100"></div>
                <div class="col-lg-2"><i class="fab fa-telegram" style="font-size: 50px; color: #1f95ce"></i></div>
                <div class="col"><p>Telegram: @ferdyhape</p></div>
                <div class="w-100"></div>
                <div class="col-lg-2"><i class="fas fa-envelope-open-text" style="font-size: 50px; color: #e2e2e2"></i></div>
                <div class="col"><p>Email: ferdyhahan5@gmail.com</p></div>
              </div>
            </div>
            <div class="col-md-6">
                <div id="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3380.388567419926!2d112.61347971432816!3d-7.946708281364513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827687d272e7%3A0x789ce9a636cd3aa2!2sPoliteknik%20Negeri%20Malang!5e1!3m2!1sid!2sid!4v1635241759474!5m2!1sid!2sid" width="100%" height="422px" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </section>
      @include('layouts/footer')
      @include('layouts/script')
</body>
</html>