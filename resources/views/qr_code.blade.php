<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QR Code</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #fff9f9;
    }

    .container-qr {
      padding-left: 10%;
      padding-right: 10%;
      padding-top: 5%;
      padding-bottom: 5%;
    }

    @media screen and (min-width: 512px) {
      .gambar {
        max-width: 400px;
      }
    }

    .qr-code-notification {
      margin-top: 3vh !important;
      font-size: calc(12px + 0.5vw);
    }

    .wedding-date {
      color: #000;
      margin-top: 5vh;
      margin-bottom: 5vh;
      font-size: calc(22px + 0.5vw);
    }

    .top-title {
      color: #000;
      margin-bottom: 10px;
      font-size: calc(32px + 0.5vw);
    }

    .container-qr {
      background-image: url('{{ asset('flowers-1.png') }}'),
      url('{{ asset('flowers-2.png') }}'),
      url('{{ asset('flowers-3.png') }}'),
      url('{{ asset('flowers-4.png') }}');
      /* Second background image */
      background-position: top left, right bottom, top right, left bottom;
      /* Position the first image at center top and the second image at left bottom */
      background-repeat: no-repeat, no-repeat, no-repeat, no-repeat;
      /* Prevent repetition for both images */
    }

    @media screen and (max-width: 768px) {
      .container-qr {
        background-image: url('{{ asset('flowers-1-small.png') }}'),
        url('{{ asset('flowers-2-small.png') }}'),
        url('{{ asset('flowers-3-small.png') }}'),
        url('{{ asset('flowers-4-small.png') }}');
      }
    }
  </style>
</head>

<body>
  <div class="text-center container-qr">
    <h3 class="text-center top-title">Pernikahan</h3>
    <img class="text-center img-fluid gambar" src="{{asset('name.png')}}">
    <br>
    <h3 class="wedding-date">Minggu, 14 April 2024</h3>
    <p class="qr-code-notification">Terima kasih telah hadir di pernikahan kami.</p>
    {!! QrCode::size(200)->generate($url) !!}
    <p class="qr-code-notification">Silakan scan barcode ini untuk check-in.</p>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>