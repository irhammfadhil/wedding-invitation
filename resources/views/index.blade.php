<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mentor Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  <link rel="stylesheet" href="sakura.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    #invitation-popup {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      width: 100%;
      height: 100%;
      background-color: #fff9f9;
      display: flex;
      align-items: center;
      justify-content: center;
      background-image: 
        url('flowers-1.png'),
        url('flowers-2.png'),
        url('flowers-3.png'),
        url('flowers-4.png'); /* Second background image */
      background-position: top left, right bottom, top right, left bottom; /* Position the first image at center top and the second image at left bottom */
      background-repeat: no-repeat, no-repeat, no-repeat, no-repeat; /* Prevent repetition for both images */
    }

    .invitation-inner {
      text-align: center;
      color: white; /* Change the text color to make it visible on the background */
    }
    @media screen and (max-width: 768px) {
      #invitation-popup {
        background-image: 
        url('flowers-1-small.png'),
        url('flowers-2-small.png'),
        url('flowers-3-small.png'),
        url('flowers-4-small.png');
      }
    }
  </style>
  <!-- =======================================================
  * Template Name: Mentor
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  {{--<div id="invitation-popup" class="text-center">
    <div class="invitation-inner">
      <h1 style="color: #000;">Undangan Pernikahan</h1>
      <br>
      <img class="text-center img-fluid bride-nick-name bride-nick-name-front" src="{{asset('name.png')}}">
      <br>
      <h3 class="wedding-date" style="color: #000; margin-top: 10px;">Minggu, 14 April 2024</h3>
      <br>
      <h3 style="color: #000;">Kepada Yth.</h3>
      <div class="guest-name-box-outer">
        <div class="guest-name-box">
          <h3 style="color: #000;">{{$data_invitation->name}}</h3>
        </div>
      </div>
      <br>
      <p style="font-size: 14px; color: #000;"><i>Mohon maaf apa bila ada kesalahan penulisan nama dan gelar</i></p>
      <button id="open-popup" class="add-to-calendar btn btn-lg btn-primary button-open-invitation sqs-block-button btn-responsive"><i class="fas fa-envelope"></i> Buka Undangan</button>
    </div>
  </div>--}}
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg" style="height: 150%;">
        <div class="container text-center" data-aos="zoom-in" data-aos-delay="200">
          <h3 class="text-center save-the-date" data-aos="zoom-in" data-aos-delay="100">SAVE THE DATE</h3>
          <img class="text-center img-fluid bride-nick-name" src="{{asset('name.png')}}" data-aos="zoom-in" data-aos-delay="100">
          <h4 class="text-center wedding-date" data-aos="zoom-in" data-aos-delay="100">Minggu, 14 April 2024</h4>
          <div class="row text-center box-countdown-outer">
            <div class="col-4 box-countdown mx-0">
              <div class="box-dates">
                <h1 id="days" data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="5" class="purecounter"></h1>
                <h6>DAYS</h6>
              </div>
            </div>
            <div class="col-4 box-countdown mx-0">
              <div class="box-dates">
                <h1 id="hours" data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="5" class="purecounter"></h1>
                <h6>HOURS</h6>
              </div>
            </div>
            <div class="col-4 box-countdown mx-0">
              <div class="box-dates">
                <h1 id="minutes" data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="5" class="purecounter"></h1>
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
        <div class="container" data-aos="zoom-in">
          <div class="text-center">
            <img src="{{asset('basmala.png')}}" class="img-fluid" style="max-width: 200px; margin-bottom: 20px !important;">
            <h4>.وَمِنْ اٰيٰتِهٖٓ اَنْ خَلَقَ لَكُمْ مِّنْ اَنْفُسِكُمْ اَزْوَاجًا لِّتَسْكُنُوْٓا اِلَيْهَا وَجَعَلَ بَيْنَكُمْ مَّوَدَّةً وَّرَحْمَةً ۗاِنَّ فِيْ ذٰلِكَ لَاٰيٰتٍ لِّقَوْمٍ يَّتَفَكَّرُوْنَ </h4>
            <h6><i>Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri,
                agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan diantaramu rasa kasih dan sayang.
                Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir.</i></h6>
            <h6>(QS Ar Rum 21)</h6>
            <div class="rotating-container">
              <img src="{{asset('flowers-ayat.png')}}" class="img-fluid rotating-image">
            </div>
          </div>
        </div>
      </section><!-- End About Section -->

      <section id="children" class="about section-bg">
        <div class="container" data-aos="zoom-in">
          <div class="text-center">
            <img src="{{asset('basmala.png')}}" class="img-fluid" style="max-width: 200px; margin-bottom: 20px !important;">
            <p class="invitation-description">Maha suci Allah SWT, yang telah menciptakan makhluk-Nya berpasang-pasangan.<br><br>Ya Allah, dengan mengharap ridlo dan rahmat-Mu perkenankanlah kami menikahkan putra-putri kami:</p>
            <h2 class="bride-full-name">Irham Muhammad Fadhil</h2>
            <p>Putra dari Bapak R. Sri Kuncoro Laksono W & Ibu Titi Zhahida</p>
            <img class="text-center img-fluid bride-nick-name" src="{{asset('name.png')}}">
            <h2 class="bride-full-name">Rosy Indah Permatasari</h2>
            <p>Putri dari Bapak H.R. Soenardjo (alm) & Ibu Roelly Prastyawati</p>
          </div>
        </div>
      </section><!-- End About Section -->
      <section id="akad-event" class="about section-bg-2">
        <div class="container" data-aos="zoom-in">
          <div class="text-center">
            <h5><i>Assalamu’alaikum Warahmatullahi Wabarokatuh</i></h5>
            @if($data_invitation->invitation_type == 'Akad')
            <p>Dengan memohon rahmat dan ridho Allah SWT kami bermaksud mengundang bapak/ibu/saudara/i untuk menghadiri prosesi akad dan resepsi pernikahan putra-putri kami<br>yang Insya Allah akan diselenggarakan pada:</p>
            @else
            <p>Dengan memohon rahmat dan ridho Allah SWT kami bermaksud mengundang bapak/ibu/saudara/i untuk menghadiri prosesi resepsi pernikahan putra-putri kami<br>yang Insya Allah akan diselenggarakan pada:</p>
            @endif
            @if($data_invitation->invitation_type == 'Akad')
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
            @else
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
            @endif
            <br>
            <p>Swiss-Belinn Manyar Surabaya<br>Jl. Manyar Kertoarjo No.100, Manyar Sabrangan, Mulyorejo<br>Surabaya</p>
            <div class="text-center" style="margin-bottom: 3rem;">
              <a href="https://maps.app.goo.gl/84sbSk9HwqU91ds97" target="_blank" class="btn btn-primary text-center add-to-calendar">Peta Lokasi</a>
            </div>
            <p>Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan hadir untuk memberikan doa restu kepada putra-putri kami.</p>
            <p>Wassalamu'alaikum Warahmatullahi Wabarakatuh</p>
            <p>Kami yang berbahagia</p>
            <p class="bride-full-name"><i>Kel. R. Sri Kuncoro Laksono Wedi<br>Kel.H.R. Soenardjo, S.H (Alm)<br>Irham dan Rosy</i></p>
          </div>
        </div>
      </section><!-- End About Section -->
      <section id="event-location" class="about section-bg">
        <div class="container" data-aos="zoom-in">
          <div class="text-center">
            <h3>Doa untuk pengantin</h3>
            <h4>بارَكَ اللهُ لَكَ ، وَبَارَكَ عَلَيْكَ ، وَجَمَعَ بَيْنَكُمَا فِيْ خَيْرٍ</h4>
            <h6 style="margin-bottom: 20px;"><i>Semoga Allah memberkahimu ketika bahagia dan ketika susah dan mengumpulkan kalian berdua dalam kebaikan.” (HR. Abu Daud)</i></h6>
            <hr class="custom-hr">
            <br>
            <h3>Ucapkan Sesuatu</h3>
          </div>
          <form id="rsvp-form" action="{{route('submit-rsvp')}}" method="post">
            @csrf
            <input type="hidden" name="invitation_id" value="{{$data_invitation->id}}">
            <div class="form-group">
              <label for="name">Nama</label>
              <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Nama" value="{{$data_invitation->name}}" disabled required>
            </div>
            <br>
            <div class="form-group">
              <label for="name">Kehadiran</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="response" id="response1" value="No" required>
                <label class="form-check-label" for="radioOption1">Tidak Hadir</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="response" id="response2" value="Yes" required>
                <label class="form-check-label" for="radioOption2">Hadir</label>
              </div>
            </div>
            <br>
            <div class="form-group">
              <label for="name">Jumlah Tamu</label>
              <input type="number" class="form-control" id="number_of_guest" name="num_of_guests" aria-describedby="emailHelp" placeholder="Jumlah Tamu" required>
            </div>
            <br>
            <div class="form-group">
              <label for="name">Pesan untuk Pengantin</label>
              <textarea class="form-control" id="message" name="wishes" rows="3" required></textarea>
            </div>
            <br>
            <div class="text-center">
              <button type="submit" class="btn btn-primary add-to-calendar">Kirim</button>
            </div>
          </form>
          <br>
          <hr class="custom-hr">
          <br>
          <div class="text-center">
            <h3>Ucapan</h3>
          </div>
          <br>
          <div class="container-wishes-outer">
            <div class="container-wishes overflow-auto" id="container-wishes">
              @foreach($rsvps as $rsvp)
              <p><b>{{$rsvp->invitation->name}}</b></p>
              <small>{{ \Carbon\Carbon::parse($rsvp->created_at)->diffForHumans() }}</small>
              <p>{{$rsvp->wishes}}</p>
              <hr>
              @endforeach
            </div>
          </div>
        </div>
      </section>
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <script>
      /*const sakura = new Sakura('body', {
        colors: [
            {
                gradientColorStart: 'rgba(255,255,255,1.0)',
                gradientColorEnd: 'rgba(255,255,255,1.0)',
                gradientColorDegree: 120,
            },
        ],
      });*/
    </script>
    <script>
      $(document).ready(function() {
        $("#main").show();
        $("#open-popup").click(function(e) {
          //sakura.stop();
          $("#invitation-popup").hide();
          $("#main").show();
          $('html, body').animate({
            scrollTop: $("#about").offset().top
          }, 0);
        })
      });
    </script>
    <script>
      // When the form is submitted
      $('#rsvp-form').on('submit', function(e) {
        e.preventDefault(); // Prevent the default form submission

        // Perform an AJAX request to submit the form data
        $.ajax({
          type: 'POST',
          url: $(this).attr('action'),
          data: $(this).serialize(),
          dataType: 'json',
          success: function(response) {
            // If the form submission is successful, show a success SweetAlert
            Swal.fire({
              icon: 'success',
              title: 'RSVP Submitted!',
              text: 'Terima kasih telah mengkonfirmasi kehadiran Anda.',
            }).then(function() {
              // Redirect or perform any other actions after the success alert is closed
              $("input[type='radio']").prop("checked", false);
              $("#number_of_guest").val("");
              $("#message").val("");
              $("#container-wishes").load("{{ route('get-rsvp') }}");
            });
          },
          error: function(error) {
            // If there is an error with the form submission, show an error SweetAlert
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Something went wrong! Please try again later.',
            });
          }
        });
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

        document.getElementById("days").setAttribute("data-purecounter-end", days);
        document.getElementById("hours").setAttribute("data-purecounter-end", hours);
        document.getElementById("minutes").setAttribute("data-purecounter-end", minutes);
      }

      // Update the countdown initially and then every second
      updateCountdown();
      setInterval(updateCountdown, 1000);
    </script>
</body>

</html>