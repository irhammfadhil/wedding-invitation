<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Wedding Irham & Rosy | Admin Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('admin/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('admin/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('admin/plugins/summernote/summernote-bs4.min.css')}}">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSA5P5Cw5F5z5O5f5RZ" crossorigin="anonymous">
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="{{asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="/admin/index" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{route('logout')}}" class="nav-link">Logout</a>
        </li>
      </ul>

      <!-- Right navbar links -->

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('admin.layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Buku Tamu</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Buku Tamu</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
              <!-- small box -->
              <div class="small-box bg-1">
                <div class="inner">
                  <h5>Total Tamu Hadir</h5>
                  <h3>{{$sum_num_of_guests}}</h3>
                </div>
                <div class="icon">
                  <i class="fas fa-user"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
              <!-- small box -->
              <div class="small-box bg-2">
                <div class="inner">
                  <h5>Waktu saat ini</h5>
                  <h3 id="current-time"></h3>
                </div>
                <div class="icon">
                  <i class="fas fa-clock"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col-9">
                  <h3 class="card-title">Buku Tamu</h3>
                </div>
                <div class="col-3" style="text-align: right;">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new-invitation-modal">
                    Cek Data Tamu
                  </button>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="table-responsive">
                @if($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                  <strong>{{$message}}</strong>
                </div>
                @endif
                <table id="example1" class="table table-bordered table-striped table-hover">
                  <thead>
                    <tr>
                      <th class="text-center align-middle" style="width: 15%;">Nama</th>
                      <th class="text-center align-middle">Jumlah Tamu</th>
                      <th class="text-center align-middle">Waktu Masuk</th>
                      <th class="text-center align-middle">Foto</th>
                      <th class="text-center align-middle" style="width: 15%;">Tindakan</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($guests as $guest)
                    <tr>
                      <td class="text-center">{{$guest->invitation->name}}</td>
                      <td class="text-center">{{$guest->invitation->num_of_guests}} pax</td>
                      <td class="text-center">{{$guest->created_at}}</td>
                      <td class="text-center"><img src="{{asset($guest->photos)}}" class="img-fluid"></td>
                      <td class="text-center">
                        <a type="button" class="btn btn-primary edit-button mb-4" data-toggle="modal" data-target="#edit-invitation-modal" data-id="{{ $guest->invitation_id }}">
                          <i class="fas fa-eye"></i>
                        </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- The Bootstrap modal -->
  <div class="modal fade bd-example-modal-lg" id="new-invitation-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <form action="{{route('check-invitation')}}" method="post" enctype="multipart/form-data">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cek Data Tamu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Alamat</label>
              <input type="text" class="form-control" name="address" id="address" required>
            </div>
            <div id="result-container"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
            <!-- Add a save button or any other buttons you need in the modal footer -->
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="modal fade bd-example-modal-lg" id="edit-invitation-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Undangan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            @csrf
            <input type="hidden" name="id" id="id-edit">
            <input type="hidden" name="uuid" id="uuid-edit">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" name="name" id="name-edit" class="form-control" required readonly>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Webcam</label><br>
              <video autoplay="true" id="video-webcam">
                  Browsermu tidak mendukung bro, upgrade donk!
              </video>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button class="btn btn-primary" id="capture-btn" type="submit">Ambil Gambar</button>
            <!-- Add a save button or any other buttons you need in the modal footer -->
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; {{date('Y')}} Irham & Rosy.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{asset('admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
  <script src="{{asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
  <script src="{{asset('admin/plugins/jszip/jszip.min.js')}}"></script>
  <script src="{{asset('admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
  <script src="{{asset('admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
  <script src="{{asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{asset('admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- ChartJS -->
  <script src="{{asset('admin/plugins/chart.js/Chart.min.js')}}"></script>
  <!-- Sparkline -->
  <script src="{{asset('admin/plugins/sparklines/sparkline.js')}}"></script>
  <!-- JQVMap -->
  <script src="{{asset('admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
  <script src="{{asset('admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{asset('admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
  <!-- daterangepicker -->
  <script src="{{asset('admin/plugins/moment/moment.min.js')}}"></script>
  <script src="{{asset('admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
  <!-- Summernote -->
  <script src="{{asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
  <!-- overlayScrollbars -->
  <script src="{{asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('admin/dist/js/adminlte.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{asset('admin/dist/js/demo.js')}}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{asset('admin/dist/js/pages/dashboard.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

  <script>
    $(function() {
      $("#example1").DataTable();
    });
  </script>
  <script>
    $(document).ready(function() {
      var table = $('#example1').DataTable(); // Initialize DataTable
      // Event delegation for edit button
      $('#example1').on('click', '.edit-button', function() {
          var id = $(this).data('id');
          var url = "{{ route('view-invitation', [':id']) }}".replace(':id', id);
          
          $.ajax({
              type: 'GET',
              url: url,
              dataType: 'json',
              success: function(data) {
                  $('#id-edit').val(data.data.id);
                  $('#uuid-edit').val(data.data.uuid);
                  $('#name-edit').val(data.data.name);
                  $('#address-edit').val(data.data.address);
                  $('#phone-edit').val(data.data.phone);
                  $('#invitation-type-edit').val(data.data.invitation_type);
                  $('#num_of_guests-edit').val(data.data.num_of_guests);
              },
              error: function() {
                  alert('Error fetching data');
              }
          });
      });
    });
    $(document).ready(function() {
      // Add event listener for form submission
      $('#new-invitation-modal form').submit(function(event) {
        // Prevent default form submission
        event.preventDefault();

        $('#result-container').empty();

        // Serialize form data
        var formData = $(this).serialize();

        // Send AJAX request
        $.ajax({
          url: $(this).attr('action'),
          method: $(this).attr('method'),
          data: formData,
          success: function(response) {
            // Update specific div inside modal body with the received data
            $('#result-container').html(response);
          },
          error: function(xhr, status, error) {
            // Handle error
            console.error(xhr.responseText);
          }
        });
      });
    });
  </script>
  <script>
      // Function to update the clock
      function updateClock() {
        var now = new Date();
        var hours = now.getHours();
        var minutes = now.getMinutes();
        var seconds = now.getSeconds();
    
        // Ensure two digits for hours, minutes, and seconds
        hours = ('0' + hours).slice(-2);
        minutes = ('0' + minutes).slice(-2);
        seconds = ('0' + seconds).slice(-2);
    
        // Display the clock
        var clockDiv = document.getElementById('current-time');
        clockDiv.textContent = hours + ':' + minutes + ':' + seconds + ' WIB';
      }
    
      // Call updateClock every second
      setInterval(updateClock, 1000);
    
      // Initial call to updateClock to prevent delay in displaying the clock
      updateClock();
   </script>
   <script type="text/javascript">
    var video = document.querySelector("#video-webcam");

    navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.oGetUserMedia;

    if (navigator.getUserMedia) {
        navigator.getUserMedia({ video: true }, handleVideo, videoError);
    }

    function handleVideo(stream) {
        video.srcObject = stream;
    }

    function videoError(e) {
        alert("Izinkan menggunakan webcam untuk demo!");
    }

    document.getElementById('capture-btn').addEventListener('click', function(e) {
        e.preventDefault();
        var canvas = document.createElement('canvas');
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;
        var context = canvas.getContext('2d');
        context.drawImage(video, 0, 0, canvas.width, canvas.height);
        var imageData = canvas.toDataURL('image/jpeg');
        var id = $("#id-edit").val();

        // Send image data to Laravel backend
        saveImage(id, imageData);
    });

    function saveImage(id, imageData) {
        // Send image data to Laravel backend using AJAX
        var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        $.ajax({
            url: "{{route('save-image')}}",
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            data: { id: id, 
              image_data: imageData },
            success: function(response) {
              Swal.fire({
                  title: 'Success',
                  text: 'Image saved successfully!',
                  icon: 'success',
                  confirmButtonText: 'OK'
              }).then((result) => {
                  if (result.isConfirmed) {
                      // If user clicks OK, refresh the page
                      location.reload();
                  }
              });
            },
            error: function(xhr, status, error) {
              Swal.fire({
                title: 'Error',
                text: 'Error saving image',
                icon: 'error',
                confirmButtonText: 'OK'
              }).then((result) => {
                  if (result.isConfirmed) {
                    location.reload();
                  }
              });
            }
        });
    }
</script>
</body>

</html>