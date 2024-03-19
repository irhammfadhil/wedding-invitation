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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSA5P5Cw5F5z5O5f5RZ" crossorigin="anonymous">
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
              <h1 class="m-0">Daftar Undangan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Invitation List</li>
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
          <div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col-9">
                  <h3 class="card-title">Daftar Undangan</h3>
                </div>
                <div class="col-3" style="text-align: right;">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new-invitation-modal">
                    Buat Undangan Baru
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
                      <th class="text-center align-middle" style="width: 10%;">PIC</th>
                      <th class="text-center align-middle">Tipe Undangan</th>
                      <th class="text-center align-middle">Alamat</th>
                      <th class="text-center align-middle">No. HP</th>
                      <th class="text-center align-middle">Jumlah Tamu</th>
                      <th class="text-center align-middle">Status Pengiriman</th>
                      <th class="text-center align-middle" style="width: 15%;">Tindakan</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($guests as $guest)
                    <tr>
                      <td>{{$guest->name}}</td>
                      <td class="text-center">{{$guest->user->name}}</td>
                      <td class="text-center">{{$guest->invitation_type}}</td>
                      <td class="text-center">{{$guest->address}}</td>
                      <td class="text-center">{{$guest->phone}}</td>
                      <td class="text-center">{{$guest->num_of_guests}} pax</td>
                      <td class="text-center">
                        @if($guest->is_sent == 0)
                        Belum Terkirim
                        @else
                        Sudah Terkirim
                        @endif
                      </td>
                      <td class="text-center">
                        @if($guest->is_sent == 0)
                        <a href="#" class="btn btn-secondary mb-4 whatsappButton" data-id="{{ $guest->id }}"><i class="fas fa-paper-plane"></i></a>
                        @endif
                        <a href="{{route('invitation-uuid', ['name' => $guest->name])}}" class="btn btn-info mb-4"><i class="fas fa-eye"></i></a>
                        <a type="button" class="btn btn-primary edit-button mb-4" data-toggle="modal" data-target="#edit-invitation-modal" data-id="{{ $guest->id }}">
                          <i class="fas fa-edit"></i>
                        </a>
                        <a href="" class="btn btn-danger delete-invitation mb-4" data-id="{{ $guest->id }}"><i class="fas fa-trash"></i></a>
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
        <form action="{{route('submit-new-invitation')}}" method="post" enctype="multipart/form-data">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Buat Undangan Baru</h5>
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
            <div class="form-group">
              <label for="exampleInputEmail1">No. HP (gunakan format 628xxx)</label>
              <input type="text" class="form-control" name="phone" id="phone" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Tipe Undangan</label>
              <select name="invitation_type" class="custom-select form-control-border" aria-label="Default select example" required>
                <option>Pilih...</option>
                <option value="Akad">Akad</option>
                <option value="Resepsi">Resepsi</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Jumlah Tamu</label>
              <input type="number" class="form-control" name="num_of_guests" id="num_of_guests" required>
            </div>
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
        <form action="{{route('submit-edit-invitation')}}" method="post" enctype="multipart/form-data">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Undangan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" id="id-edit">
            <input type="hidden" name="uuid" id="uuid-edit">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" name="name" id="name-edit" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Alamat</label>
              <input type="text" class="form-control" name="address" id="address-edit" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">No. HP (gunakan format 628xxx)</label>
              <input type="text" class="form-control" name="phone" id="phone-edit" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Tipe Undangan</label>
              <select name="invitation_type" id="invitation-type-edit" class="custom-select form-control-border" aria-label="Default select example" required>
                <option>Pilih...</option>
                <option value="Akad">Akad</option>
                <option value="Resepsi">Resepsi</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Jumlah Tamu</label>
              <input type="number" class="form-control" name="num_of_guests" id="num_of_guests-edit" required>
            </div>
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
      $('#example1').on('click', '.whatsappButton', function(event) {
        console.log('clicked');
        event.preventDefault();
        var id = $(this).data('id');
        var url = "{{ route('view-invitation', [':id']) }}";
        url = url.replace(':id', id);
        // Send an AJAX GET request to retrieve the record data
        console.log(url)
        $.ajax({
          type: 'GET',
          url: url,
          dataType: 'json',
          success: function(data) {
            // Populate the modal's form fields with the data from the response
            $.ajax({
                type: 'GET',
                url: "{{ route('mark-invitation-as-sent', ['id' => ':id']) }}".replace(':id', id),
                dataType: 'json',
                success: function(response) {
                    // Handle success
                    console.log(response.message);
                },
                error: function() {
                    alert('Error marking invitation as sent');
                }
            });
            var invitationName = data.data.name;
            invitationName = invitationName.replace(/ /g, '%20');
            var invitationLink = "{{ route('invitation-uuid', [':name']) }}"
            invitationLink = invitationLink.replace(':name', invitationName);
            var phoneNumber = data.data.phone; // Replace with the recipient's phone number
            var message = "Assalamu'alaikum Warahmatullahi Wabarakatuh\n\nYth " + data.data.name + 
            "\n\nDengan memohon ridho dan rahmat Allah SWT, kami bermaksud mengundang Bapak/Ibu untuk dapat menghadiri resepsi pernikahan putra/putri kami." + 
            "\n\n*Irham Muhammad Fadhil & Rosy Indah Permatasari*" +
            "\n\nHari: Minggu, 14 April 2024\nTempat: Swiss-Belinn Manyar Surabaya, Jl. Manyar Kertoarjo No.100, Manyar Sabrangan, Kec. Mulyorejo, Surabaya, Jawa Timur 60116" + 
            "\n\nLink Undangan:" +
            "\n\n" + invitationLink +
            "\n\nMerupakan suatu kehormatan dan kebahagiaan bagi kami apabila Bapak/Ibu berkenan hadir dan memberikan doa restu. Terima kasih kami ucapkan dari lubuk hati terdalam.\n\nMohon dapat memberikan konfirmasi kehadiran pada link undangan." + 
            "\n\nKami yang berbahagia," + 
            "\n\nR Sri Kuncoro Laksono W dan Keluarga"+ 
            "\nH.R. Soenardjo, S.H. (alm) dan Keluarga";
            var url = "https://wa.me/" + phoneNumber + "?text=" + encodeURIComponent(message);

            window.location.href = url;
          },
          error: function() {
            alert('Error fetching data'); // Handle errors if needed
          }
        });
      });
    });
  </script>
  <script>
    // Select the link with the class 'delete-invitation'
    var deleteLinks = document.querySelectorAll('.delete-invitation');

    // Add a click event listener to each delete link
    deleteLinks.forEach(function(link) {
      link.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default link behavior

        // Get the 'id' from the 'data-id' attribute of the clicked link
        var id = link.getAttribute('data-id');

        // Show a SweetAlert confirmation dialog
        Swal.fire({
          title: 'Apakah Anda yakin untuk menghapus undangan ini?',
          text: 'Anda tidak akan dapat mengembalikan tindakan ini!',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Ya, Hapus!',
          cancelButtonText: 'Batal'
        }).then((result) => {
          if (result.isConfirmed) {
            // If the user confirms, execute the delete action using the 'id'
            var id = $(this).data('id');
            var deleteUrl = "{{ route('delete-invitation', ['id' => ':id']) }}";
            deleteUrl = deleteUrl.replace(':id', id);

            // Send a DELETE request to the delete route
            fetch(deleteUrl, {
                method: 'DELETE',
                headers: {
                  'X-CSRF-TOKEN': '{{ csrf_token() }}',
                  'Content-Type': 'application/json'
                },
                body: JSON.stringify({}), // You can include an empty JSON object as the request body if needed
              })
              .then(response => {
                if (response.ok) {
                  // The delete action was successful
                  Swal.fire({
                    title: 'Deleted!',
                    text: 'Undangan telah dihapus.',
                    icon: 'success',
                    confirmButtonText: 'OK'
                  }).then(() => {
                      // Redirect to a different page or route
                      window.location.href = "{{ route('index-invitation') }}"; // Replace with your desired route
                  });
                } else {
                  // The delete action failed
                  Swal.fire('Error', 'Terjadi kesalahan saat menghapus undangan.', 'error');
                  console.log(response);
                }
              })
              .catch(error => {
                console.error('Error:', error);
              });
          }
        });
      });
    });
  </script>
</body>

</html>