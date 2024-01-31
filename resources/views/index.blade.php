<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Wedding Irham & Rosy</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- =======================================================
  * Template Name: Mentor
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <main id="main">

    <div id="invitation-popup" style="display: none;">
      <h1>Undangan Pernikahan</h1>
      <br>
      <img class="text-center img-fluid bride-nick-name bride-nick-name-front" src="{{asset('name.png')}}">
      <br>
      <p style="font-size: 18px;">Minggu, 14 April 2024</p>
      <br>
      <h3>Kepada Yth.</h3>
      <div class="guest-name-box-outer">
        <div class="guest-name-box">
          <h3>John Doe</h3>
        </div>
      </div>
      <br>
      <p style="font-size: 14px;"><i>Mohon maaf apa bila ada kesalahan penulisan nama dan gelar</i></p>
      <button id="open-popup" class="add-to-calendar"><i class="fas fa-envelope"></i> Buka Undangan</button>
    </div>

    <div id="invitation">
      <section id="about" class="about section-bg" style="height: 150%;">
        <div class="container text-center" data-aos="fade-up">
          <h3 class="text-center save-the-date">SAVE THE DATE</h3>
          <img class="text-center img-fluid bride-nick-name" src="{{asset('name.png')}}">
          <h4 class="text-center wedding-date">Minggu, 14 April 2024</h4>
          <div class="row text-center box-countdown-outer">
            <div class="col-4 box-countdown mx-0">
              <div class="box-dates">
                <h1 id="days"></h1>
                <h6>DAYS</h6>
              </div>
            </div>
            <div class="col-4 box-countdown mx-0">
              <div class="box-dates">
                <h1 id="hours"></h1>
                <h6>HOURS</h6>
              </div>
            </div>
            <div class="col-4 box-countdown mx-0">
              <div class="box-dates">
                <h1 id="minutes"></h1>
                <h6>MINUTES</h6>
              </div>
            </div>
          </div>
          <br>
          <div class="text-center">
            <a href="{{ $googleCalendarUrl }}" target="_blank" class="btn btn-primary text-center add-to-calendar">Add to Google Calendar</a>
          </div>
        </div>
      </section><!-- End About Section -->

      <section id="ayat" class="about section-bg-2">
        <div class="container" data-aos="fade-up">
          <div class="text-center">
            <img src="{{asset('basmala.png')}}" class="img-fluid" style="max-width: 200px; margin-bottom: 20px !important;">
            <h4>.وَمِنْ اٰيٰتِهٖٓ اَنْ خَلَقَ لَكُمْ مِّنْ اَنْفُسِكُمْ اَزْوَاجًا لِّتَسْكُنُوْٓا اِلَيْهَا وَجَعَلَ بَيْنَكُمْ مَّوَدَّةً وَّرَحْمَةً ۗاِنَّ فِيْ ذٰلِكَ لَاٰيٰتٍ لِّقَوْمٍ يَّتَفَكَّرُوْنَ </h4>
            <h6><i>Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri,
                agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan diantaramu rasa kasih dan sayang.
                Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir.</i></h6>
            <h6>(QS Ar Rum 21)</h6>
          </div>
        </div>
      </section><!-- End About Section -->

      <section id="children" class="about section-bg">
        <div class="container" data-aos="fade-up">
          <div class="text-center">
            <img src="{{asset('basmala.png')}}" class="img-fluid" style="max-width: 200px; margin-bottom: 20px !important;">
            <p class="invitation-description">Maha suci Allah SWT, yang telah menciptakan makhluk-Nya berpasang-pasangan.<br><br>Ya Allah, dengan mengharap ridlo dan rahmat-Mu perkenankanlah kami menikahkan putra-putri kami:</p>
            <h2 class="bride-full-name">Irham Muhammad Fadhil</h2>
            <p>Putra dari Bapak R. Sri Kuncoro Laksono W & Ibu Titi Zhahida</p>
            <img class="text-center img-fluid bride-nick-name" src="{{asset('name.png')}}">
            <h2 class="bride-full-name">Rosy Indah Permatasari</h2>
            <p>Putri dari Bapak H.R. Soenardjo (alm) & Ibu Roelly Prasetyawati</p>
          </div>
        </div>
      </section><!-- End About Section -->
      <section id="akad-event" class="about section-bg-2">
        <div class="container" data-aos="fade-up">
          <div class="text-center">
            <h5><i>Assalamu’alaikum Warahmatullahi Wabarokatuh</i></h5>
            <p>Dengan memohon rahmat dan ridho Allah SWT kami bermaksud mengundang bapak/ibu/saudara/i untuk menghadiri prosesi akad dan resepsi pernikahan putra-putri kami<br>yang Insya Allah akan diselenggarakan pada:</p>
            <div class="row" style="margin-top: 2rem;">
              <div class="col-4 wedding-date-row">
                <h3>Akad Nikah</h3>
                <h3>08:00 - 10:00 WIB</h3>
              </div>
              <div class="col-4 wedding-date-row">
                <h3>Minggu</h3>
                <h1>14</h1>
                <h1>April 2024</h1>
              </div>
              <div class="col-4 wedding-date-row">
                <h3>Resepsi</h3>
                <h3>11:00 - 13:00 WIB</h3>
              </div>
            </div>
            <div class="row" style="margin-top: 2rem;">
              <div class="col-6 wedding-date-row">
                <h3>Minggu</h3>
                <h1>14</h1>
                <h1>April 2024</h1>
              </div>
              <div class="col-6 wedding-date-row">
                <h3>Resepsi</h3>
                <h3>11:00 - 13:00 WIB</h3>
              </div>
            </div>
            <br>
            <p>Swiss-Belinn Manyar Surabaya<br>Jl. Manyar Kertoarjo No.100, Manyar Sabrangan, Mulyorejo<br>Surabaya</p>
            <div class="text-center" style="margin-bottom: 3rem;">
              <a href="https://maps.app.goo.gl/84sbSk9HwqU91ds97" target="_blank" class="btn btn-primary text-center add-to-calendar">Peta Lokasi</a>
            </div>
            <p>Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan hadir untuk memberikan doa restu kepada putra-putri kami.</p>
            <p>Wassalamu'alaikum Warahmatullahi Wabarakatuh</p>
            <p>Kami yang berbahagia</p>
            <p class="bride-full-name"><i>Kel. R. Sri Kuncoro Laksono Wedi<br>Kel.H.R. Soenardjo, S.H (Alm)<br>Irham dan Ochi</i></p>
          </div>
        </div>
      </section><!-- End About Section -->
      <section id="event-location" class="about section-bg">
        <div class="container" data-aos="fade-up">
          <div class="text-center">
            <h3>Doa untuk pengantin</h3>
            <h4>بارَكَ اللهُ لَكَ ، وَبَارَكَ عَلَيْكَ ، وَجَمَعَ بَيْنَكُمَا فِيْ خَيْرٍ</h4>
            <h6 style="margin-bottom: 20px;"><i>Semoga Allah memberkahimu ketika bahagia dan ketika susah dan mengumpulkan kalian berdua dalam kebaikan.” (HR. Abu Daud)</i></h6>
            <hr class="custom-hr">
            <br>
            <h3>Ucapkan Sesuatu</h3>
          </div>
          <form action="{{route('submit-rsvp')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="name">Nama</label>
              <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Nama" required>
            </div>
            <br>
            <div class="form-group">
              <label for="name">Kehadiran</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="attendance" id="radioOption1" value="0" required>
                <label class="form-check-label" for="radioOption1">Tidak Hadir</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="attendance" id="radioOption2" value="1" required>
                <label class="form-check-label" for="radioOption2">Hadir</label>
              </div>
            </div>
            <br>
            <div class="form-group">
              <label for="name">Jumlah Tamu</label>
              <input type="number" class="form-control" id="number_of_guest" name="number_of_guest" aria-describedby="emailHelp" placeholder="Jumlah Tamu" required>
            </div>
            <br>
            <div class="form-group">
              <label for="name">Pesan untuk Pengantin</label>
              <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
            </div>
            <br>
            <div class="text-center">
              <button type="submit" class="btn btn-primary add-to-calendar">Kirim</button>
            </div>
          </form>
        </div>
    </div>
    </section><!-- End About Section -->
    </div>

    <!-- ======= About Section ======= -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="a{{asset('ssets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <script>
      $(document).ready(function() {
        $("#invitation").hide();
        Swal.fire({
          html: $('#invitation-popup').html(),
          showConfirmButton: false,
          background: 'url("bg-image.png") center / cover no-repeat', // Set your image URL here
        });
      });

      $(document).on('click', '#open-popup', function() {
        Swal.close();
        $("#invitation").show();
      });

      $(document).on('click', function() {
        Swal.close();
        $("#invitation").show();
      });
    </script>
    <script>
      const targetDate = new Date("2024-04-14T08:00:00").getTime();

      function updateCountdown() {
        const currentDate = new Date().getTime();
        const timeLeft = targetDate - currentDate;

        if (timeLeft <= 0) {
          document.getElementById("days").textContent = "00";
          document.getElementById("hours").textContent = "00";
          document.getElementById("minutes").textContent = "00";
          document.getElementById("seconds").textContent = "00";
          return;
        }

        const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
        const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

        document.getElementById("days").textContent = days.toString().padStart(2, "0");
        document.getElementById("hours").textContent = hours.toString().padStart(2, "0");
        document.getElementById("minutes").textContent = minutes.toString().padStart(2, "0");
        document.getElementById("seconds").textContent = seconds.toString().padStart(2, "0");
      }

      // Update the countdown initially and then every second
      updateCountdown();
      setInterval(updateCountdown, 1000);
    </script>

</body>

</html>