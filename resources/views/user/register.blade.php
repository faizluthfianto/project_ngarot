
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>

  <link rel="stylesheet" href="{{ asset('coba/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('coba/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('coba/plugins/toastr/toastr.min.css')}}">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('coba/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('coba/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('coba/plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('coba/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('coba/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('coba/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('coba/plugins/summernote/summernote-bs4.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="{{ asset('coba/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('coba/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Ngarot </b>Lelea</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Register</p>

      <form action="{{url('')}}/register" method="post">
      @csrf
      @if ($errors->any())
      @foreach ($errors->all() as $error)
          <div class="alert alert-warning ml-3">
              <div class="container">
              <div class="alert-icon">
                  <i class="material-icons">warning</i>
              </div>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true"><i class="fa fa-times"></i></span>
              </button>
              
              {{ $error }}
              
              </div>
          </div>
      @endforeach
      @endif
      <div class="form-group">
        <label for="">Nama Lengkap</label> 
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        </div>
        <div class="form-group">
        <label for="">E-mail</label> 
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        </div>
        <div class="form-group">
        <label for="">Password</label> 
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        </div>
        <div class="form-group">
        <label for="">Confirm Password</label> 
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        </div>
        <div class="form-group">
        <label for="">Tanggal Lahir</label> 
        <div class="input-group mb-3">
          <input type="date" class="form-control" name="ttl" placeholder="Tanggal Lahir">
        </div>
        </div>
        <div class="form-group">
        <label for="">Jenis Kelamin</label> 
        <div class="input-group mb-3">
            <select class="custom-select form-control-border" name="jk" id="exampleSelectBorder">
              <option>pilih Jenis Kelamin</option>
              <option value="Laki-Laki">Laki - Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          
        </div>
        </div>
        <div class="form-group">
        <label for="">Nomor Hp</label> 
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="nohp" placeholder="Nomor Hp">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-mobile"></span>
            </div>
          </div>
        </div>
        </div>
        <div class="form-group">
        <label for="">Alamat</label> 
        <div class="input-group mb-3">
          <textarea name="alamat" id="" class="form-control" cols="10" rows="5" placeholder="alamat"></textarea>
        </div>
        </div>


        <div class="row">
          <div class="col-8">
            
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="{{url('login')}}">
          sudah punya akun ?
        </a>
      </div>
      
      <!-- /.social-auth-links -->

      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('coba/plugins/jquery/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('coba/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
        
        </script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('coba/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- ChartJS -->
    <script src="{{asset('coba/plugins/chart.js/Chart.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{asset('coba/plugins/sparklines/sparkline.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('coba/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('coba/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset('coba/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{asset('coba/plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('coba/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{asset('coba/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <!-- Summernote -->
    <script src="{{asset('coba/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset('coba/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('coba/dist/js/adminlte.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('coba/dist/js/pages/dashboard.js')}}"></script>
    <!-- SweetAlert2 -->
    <script src="{{asset('coba/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
    <!-- Toastr -->
    <script src="{{asset('coba/plugins/toastr/toastr.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('coba/dist/js/demo.js')}}"></script>
    <script src="{{asset('coba/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('coba/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('coba/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('coba/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
</body>
</html>
