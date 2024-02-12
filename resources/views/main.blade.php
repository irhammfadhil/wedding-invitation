<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{env('APP_NAME')}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

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
  <link rel="stylesheet" href="{{asset('assets/css/animation.css')}}">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- =======================================================
  * Template Name: Mentor
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    /* Existing CSS for the section with ID 'about' */
    #about {
      position: relative;
      height: 150%;
    }

    /* New CSS for the flowers-top-1 div */
    #flowers-top-1 {
      position: absolute;
      left: -12%;
      top: 67%;
      z-index: 1;
      width: 500px;
      /* Ensure it's above the content in #about */
    }

    #flowers-top-1 img {
      animation: tilt-shaking 3s linear infinite;
    }

    #flowers-top-2 {
      position: absolute;
      left: 85%;
      top: -5%;
      z-index: 0;
      width: 400px;
      /* Ensure it's above the content in #about */
    }

    @media screen and (max-width: 512px) {
      #flowers-top-1 {
        width: 300px;
        left: -20%;
        top: 75%;
      }

      #flowers-top-2 {
        width: 300px;
        left: 70%;
        top: -5%;
      }
    }

    #flowers-top-2 img {
      animation: rotate-animation 12s linear infinite;
    }

    /* For container Name */
    #children {
      position: relative;
    }

    #flowers-name-top-1 {
      position: absolute;
      left: -6%;
      top: 30%;
      z-index: 1;
      width: 500px;
      /* Ensure it's above the content in #about */
    }

    #flowers-name-top-1 img {
      animation: tilt-shaking 3s linear infinite;
    }

    #flowers-name-top-2 {
      position: absolute;
      left: 88%;
      top: 60%;
      z-index: 1;
      width: 400px;
      /* Ensure it's above the content in #about */
    }

    @media screen and (max-width: 400px) {
      #flowers-name-top-1 {
        width: 200px;
        top: 40%;
      }
      #flowers-name-top-2 {
        width: 200px;
        left: 80%;
        top: 60%;
      }
    }

    @media screen and (min-width: 400px) and (max-width: 512px) {
      #flowers-name-top-1 {
        width: 250px;
      }
      #flowers-name-top-2 {
        width: 300px;
        left: 80%;
        top: 60%;
      }
    }

    #flowers-name-top-2 img {
      animation: tilt-shaking 3s linear infinite;
    }

    @keyframes rotate-animation {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }


    @keyframes tilt-shaking {
      0% {
        transform: rotate(0deg);
      }

      25% {
        transform: rotate(5deg);
      }

      50% {
        transform: rotate(0deg);
      }

      75% {
        transform: rotate(-5deg);
      }

      100% {
        transform: rotate(0deg);
      }
    }

    @keyframes translate-animation {
      0% {
        transform: translateX(0);
      }

      50% {
        transform: translateX(20px);
      }

      100% {
        transform: translateX(0);
      }
    }
  </style>


</head>

<body>
<audio id="audio" autoplay loop>
  <source src="{{asset('song.mp3')}}" type="audio/mpeg">
</audio>
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container text-center">
        <h3 class="text-center save-the-date" data-aos="zoom-in" data-aos-delay="100">SAVE THE DATE</h3>
        <img class="text-center img-fluid bride-nick-name" src="{{asset('name.png')}}" data-aos="zoom-in"
          data-aos-delay="400">
        <h4 class="text-center wedding-date" data-aos="zoom-in" data-aos-delay="600">Minggu, 14 April 2024</h4>
        <div class="row text-center box-countdown-outer" data-aos="zoom-in" data-aos-delay="800">
          <div class="col-4 box-countdown mx-0">
            <div class="box-dates">
              <h1 id="days" data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="5"
                class="purecounter"></h1>
              <h6>DAYS</h6>
            </div>
          </div>
          <div class="col-4 box-countdown mx-0">
            <div class="box-dates">
              <h1 id="hours" data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="5"
                class="purecounter"></h1>
              <h6>HOURS</h6>
            </div>
          </div>
          <div class="col-4 box-countdown mx-0">
            <div class="box-dates">
              <h1 id="minutes" data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="5"
                class="purecounter"></h1>
              <h6>MINUTES</h6>
            </div>
          </div>
        </div>
        <br>
        <div class="text-center" data-aos="zoom-in" data-aos-delay="1000">
          <a href="{{ $googleCalendarUrl }}" target="_blank" class="btn btn-primary text-center add-to-calendar">Add to
            Google Calendar</a>
        </div>
      </div>
      <div id="flowers-top-1">
        <img src="{{asset('flowers-save-the-date-1.png')}}" class="img-fluid" style="max-width: 50%;">
      </div>
      <div id="flowers-top-2">
        <img src="{{asset('flowers-save-the-date-2.png')}}" class="img-fluid" style="max-width: 50%;">
      </div>
    </section><!-- End About Section -->
    <div id="image-container-top">
      <img src="{{asset('container-top-image.png')}}" class="img-fluid" style="width: 100%;">
    </div>
    <section id="ayat" class="about section-bg-3">
      <div class="container">
        <div class="text-center">
          <img src="{{asset('basmala.png')}}" class="img-fluid"
            style="max-width: 200px; margin-bottom: 20px !important;" data-aos="zoom-in">
          <h4 data-aos="zoom-in" data-aos-delay="200">.وَمِنْ اٰيٰتِهٖٓ اَنْ خَلَقَ لَكُمْ مِّنْ اَنْفُسِكُمْ اَزْوَاجًا
            لِّتَسْكُنُوْٓا اِلَيْهَا وَجَعَلَ بَيْنَكُمْ مَّوَدَّةً وَّرَحْمَةً ۗاِنَّ فِيْ ذٰلِكَ لَاٰيٰتٍ لِّقَوْمٍ
            يَّتَفَكَّرُوْنَ </h4>
          <h6 data-aos="zoom-in" data-aos-delay="400"><i>Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan
              pasangan-pasangan untukmu dari jenismu sendiri,
              agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan diantaramu rasa kasih dan sayang.
              Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang
              berpikir.</i></h6>
          <h6 data-aos="zoom-in" data-aos-delay="600">(QS Ar Rum 21)</h6>
          <div class="rotating-container" data-aos="zoom-in" data-aos-delay="800">
            <img src="{{asset('flowers-ayat.png')}}" class="img-fluid rotating-image">
          </div>
        </div>
      </div>
    </section><!-- End About Section -->
    <div id="image-container-bottom">
      <img src="{{asset('container-bottom-image.png')}}" class="img-fluid" style="width: 100%;">
    </div>
    <div id="image-container-top">
      <img src="{{asset('container-top-image.png')}}" class="img-fluid" style="width: 100%;">
    </div>
    <section id="children" class="about section-bg-3">
      <div class="container" id="container-children">
        <div class="text-center paragraph">
          <img data-aos="zoom-in" data-aos-delay="" src="{{asset('basmala.png')}}" class="img-fluid"
            style="max-width: 200px; margin-bottom: 20px !important;">
          <p data-aos="zoom-in" data-aos-delay="250" class="invitation-description">Maha suci Allah SWT, yang telah
            menciptakan makhluk-Nya berpasang-pasangan.<br><br>Ya Allah, dengan mengharap ridlo dan rahmat-Mu
            perkenankanlah kami menikahkan putra-putri kami:</p>
          <h2 data-aos="zoom-in" data-aos-delay="500" class="bride-full-name">Irham Muhammad Fadhil</h2>
          <p data-aos="zoom-in" data-aos-delay="750">Putra dari Bapak R. Sri Kuncoro Laksono Wedi<br>&</br>Ibu Titi
            Zhahida</p>
          <img data-aos="zoom-in" data-aos-delay="1000" class="text-center img-fluid bride-nick-name"
            src="{{asset('name.png')}}" style="max-width: 50%;">
          <h2 data-aos="zoom-in" data-aos-delay="1250" class="bride-full-name">Rosy Indah Permatasari</h2>
          <p data-aos="zoom-in" data-aos-delay="1500">Putri dari Bapak H.R. Soenardjo (alm)<br>&<br>Ibu Roelly
            Prastyawati</p>
        </div>
      </div>
      <div id="flowers-name-top-1">
        <img src="{{asset('flower-name-left.png')}}" class="img-fluid" style="max-width: 50%;">
      </div>
      <div id="flowers-name-top-2">
        <img src="{{asset('flower-name-right.png')}}" class="img-fluid" style="max-width: 50%;">
      </div>
    </section><!-- End About Section -->
    <div id="image-container-bottom">
      <img src="{{asset('container-bottom-image.png')}}" class="img-fluid" style="width: 100%;">
    </div>
    <div id="image-container-top">
      <img src="{{asset('container-top-image.png')}}" class="img-fluid" style="width: 100%;">
    </div>
    <section id="akad-event" class="about section-bg-3">
      <div class="container">
        <div class="text-center paragraph">
          <h5 data-aos="zoom-in"><i>Assalamu’alaikum Warahmatullahi Wabarokatuh</i></h5>
          @if($data_invitation->invitation_type == 'Akad')
          <p data-aos="zoom-in" data-aos-delay="250">Dengan memohon rahmat dan ridho Allah SWT kami bermaksud mengundang
            bapak/ibu/saudara/i untuk menghadiri prosesi akad dan resepsi pernikahan putra-putri kami yang Insya
            Allah akan diselenggarakan pada:</p>
          @else
          <p data-aos="zoom-in" data-aos-delay="250">Dengan memohon rahmat dan ridho Allah SWT kami bermaksud mengundang
            bapak/ibu/saudara/i untuk menghadiri prosesi resepsi pernikahan putra-putri kami yang Insya Allah akan
            diselenggarakan pada:</p>
          @endif
          @if($data_invitation->invitation_type == 'Akad')
          <div class="row" style="margin-top: 2rem;" data-aos="zoom-in" data-aos-delay="500">
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
          <div class="row" style="margin-top: 2rem;" data-aos="zoom-in" data-aos-delay="500">
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
          <p data-aos="zoom-in" data-aos-delay="750">Swiss-Belinn Manyar Surabaya<br>Jl. Manyar Kertoarjo No.100, Manyar
            Sabrangan, Mulyorejo<br>Surabaya</p>
          <div class="text-center" style="margin-bottom: 3rem;" data-aos="zoom-in" data-aos-delay="1000">
            <a href="https://maps.app.goo.gl/84sbSk9HwqU91ds97" target="_blank"
              class="btn btn-primary text-center add-to-calendar-v2">Menuju Lokasi</a>
          </div>
          <div class="map-container" data-aos="zoom-in" data-aos-delay="1250">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15830.591847361991!2d112.7703437!3d-7.2808363!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa33f5036057%3A0x871babfe64e1d010!2sSwiss-Belinn%20Manyar%20Surabaya!5e0!3m2!1sen!2sid!4v1707218839548!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <p style="margin-top: 2rem;" data-aos="zoom-in" data-aos-delay="1500">Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila
            Bapak/Ibu/Saudara/i berkenan hadir untuk memberikan doa restu kepada putra-putri kami.</p>
          <p data-aos="zoom-in" data-aos-delay="1750">Wassalamu'alaikum Warahmatullahi Wabarakatuh</p>
          <p class="small" style="color: #000;" data-aos="zoom-in" data-aos-delay="2000">Kami yang berbahagia</p>
          <p class="small" data-aos="zoom-in" data-aos-delay="2250" class="bride-full-name"><i>Kel. R. Sri Kuncoro Laksono
              Wedi<br>Kel. H.R. Soenardjo, S.H (Alm)<br>Irham dan Rosy</i></p>
        </div>
      </div>
    </section><!-- End About Section -->
    <div id="image-container-bottom">
      <img src="{{asset('container-bottom-image.png')}}" class="img-fluid" style="width: 100%;">
    </div>
    <section id="event-location" class="about section-bg" style="margin-top: -3rem;">
      <div class="container">
        <div class="text-center paragraph" data-aos="zoom-in" data-aos-delay="2500">
          <h5>Konfirmasi Kehadiran</h5>
        </div>
        <form id="rsvp-form" action="{{route('submit-rsvp')}}" method="post" data-aos="zoom-in" data-aos-delay="2750">
          @csrf
          <input type="hidden" name="invitation_id" value="{{$data_invitation->id}}">
          <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp"
              placeholder="Nama" value="{{$data_invitation->name}}" disabled required>
          </div>
          <br>
          <div class="form-group">
            <label for="name">Apakah Anda berkenan hadir ?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="response" id="response2" value="Yes" required>
              <label class="form-check-label custom-label" for="radioOption2"> Ya, Saya akan datang</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="response" id="response1" value="No" required>
              <label class="form-check-label custom-label" for="radioOption1"> Maaf, saya tidak bisa</label>
            </div>
          </div>
          <br>
          <div class="form-group">
            <label for="name">Jumlah Tamu yang hadir (termasuk Anda)?</label>
            <select id="number_of_guest" name="num_of_guests" class="form-control" required>
              <option value="">Pilih...</option>
              @for($i=1;$i<=10;$i++)
              <option value="{{$i}}">{{$i}} tamu</option>
              @endfor
            </select>
          </div>
          <br>
          <div class="form-group">
            <label for="name">Pesan untuk Pengantin</label>
            <textarea class="form-control" id="message" name="wishes" rows="3" required></textarea>
          </div>
          <br>
          <div class="text-center">
            <button type="submit" class="btn btn-primary add-to-calendar" style="color: #fff; background: rgb(201,142,154); border-color: rgb(201,142,154);">Kirim</button>
          </div>
        </form>
        <br><br>
        <div class="text-center" data-aos="zoom-in">
          <h5>Doa untuk pengantin</h5>
          <h4>بارَكَ اللهُ لَكَ ، وَبَارَكَ عَلَيْكَ ، وَجَمَعَ بَيْنَكُمَا فِيْ خَيْرٍ</h4>
          <h6 style="margin-bottom: 20px;"><i>Semoga Allah memberkahimu ketika bahagia dan ketika susah dan mengumpulkan
              kalian berdua dalam kebaikan.” (HR. Abu Daud)</i></h6>
          <br>
        </div>
        <br>
        <hr class="custom-hr" style="opacity: 0.25;" data-aos="zoom-in" data-aos-delay="3250">
        <br>
        <div class="text-center" data-aos="zoom-in" data-aos-delay="3500">
          <h5>Ucapan dan Doa</h5>
        </div>
        <br>
        <div class="container-wishes-outer" data-aos="zoom-in" data-aos-delay="3750">
          <div class="container-wishes overflow-auto paragraph-wishes" id="container-wishes" style="max-height: 512px; overflow: auto;">
            @foreach($rsvps as $rsvp)
            <p><b>{{$rsvp->invitation->name}}</b></p>
            <small>{{ \Carbon\Carbon::parse($rsvp->created_at)->diffForHumans() }}</small>
            <p>{{$rsvp->wishes}}</p>
            <hr>
            @endforeach
          </div>
        </div>
      </div>
      <div class="text-center" style="margin-top: 1rem;">
        <small class="text-center">Designed by Irham M Fadhil.</small>
      </div>
    </section>
  </main>
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>
  <a href="javascript:void(0)" class="stop-audio d-flex align-items-center justify-content-center active"><i class="fas fa-volume-xmark"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script src="{{asset('assets/js/animation.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
  <script>
    /*const sakura = new Sakura('b      {
      co                                  gradientColorStart: 'rgba(255,255,255                      gradientColorEnd: 'rgba(255,255,255                      gradientColorDegre                   ,
      ],
  });*/
  </script>
  <script>
    const stopAudioButton = document.querySelector('.stop-audio');
    const audioElement = document.getElementById('audio');

    let isAudioPlaying = true;

    stopAudioButton.addEventListener('click', () => {
      if (isAudioPlaying) {
        audioElement.pause(); // Pause the audio
        audioElement.currentTime = 0; // Rewind to the beginning
        stopAudioButton.innerHTML = '<i class="fas fa-volume-high"></i>'; // Change the button to a "Play" icon
        isAudioPlaying = false;
      } else {
        audioElement.play(); // Start playing the audio
        stopAudioButton.innerHTML = '<i class="fas fa-volume-xmark"></i>'; // Change the button back to a "Stop" icon
        isAudioPlaying = true;
      }
    });
  </script>
  <script>
    // When the form is submitted
    $('#rsvp-form').on('submit', function (e) {
      e.preventDefault(); // Prevent the default form submission

      // Perform an AJAX request to submit the form data
      $.ajax({
        type: 'POST',
        url: $(this).attr('action'),
        data: $(this).serialize(),
        dataType: 'json',
        success: function (response) {
          // If the form submission is successful, show a success SweetAlert
          Swal.fire({
            icon: 'success',
            title: 'RSVP Submitted!',
            text: 'Terima kasih telah mengkonfirmasi kehadiran Anda.',
          }).then(function () {
            // Redirect or perform any other actions after the success alert is closed
            $("input[type='radio']").prop("checked", false);
            $("#number_of_guest").val("");
            $("#message").val("");
            $("#container-wishes").load("{{ route('get-rsvp') }}");
          });
        },
        error: function (error) {
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
    setInterval(updateCountdown,000);
  </script>
</body>

</html>