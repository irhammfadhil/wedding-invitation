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
  <link rel="stylesheet" href="{{asset('sakura.css')}}">
  <style>
    #invitation-popup {
      position: absolute;
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
        url({{asset('flowers-1.png')}}),
        url({{asset('flowers-2.png')}}),
        url({{asset('flowers-3.png')}}),
        url({{asset('flowers-4.png')}});
      /* Second background image */
      background-position: top left, right bottom, top right, left bottom;
      /* Position the first image at center top and the second image at left bottom */
      background-repeat: no-repeat, no-repeat, no-repeat, no-repeat;
      /* Prevent repetition for both images */
    }

    .invitation-inner {
      text-align: center;
      color: white;
      /* Change the text color to make it visible on the background */
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
  <div id="invitation-popup" class="text-center">
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
      <p style="font-size: 14px; color: #000;"><i>Mohon maaf apabila ada kesalahan penulisan nama dan gelar</i></p>
      <a href="{{route('invitation-uuid-open', ['name' => $name])}}" id="open-popup"
        class="add-to-calendar btn btn-lg btn-primary button-open-invitation sqs-block-button btn-responsive"><i
          class="fas fa-envelope"></i> Buka Undangan</a>
        <br>
      <a href="{{route('user-qr-code', ['id' => $id])}}" id="open-popup"
        class="add-to-calendar-2 btn btn-lg btn-primary button-open-invitation sqs-block-button btn-responsive"><i
          class="fas fa-th-large"></i> QR Code</a>
    </div>
  </div>
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script src="{{asset('assets/js/animation.js')}}"></script>
  <script src="{{asset('sakura.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
  <script>
    const sakura = new Sakura('body');
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
    setInterval(updateCountdown, 1000);
  </script>
</body>

</html>