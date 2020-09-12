<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin</title>
  <link href="{{asset('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="{{ asset('admin/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">
  <div id="wrapper">
    @include('layout.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">

        @include('layout.header')

        <div class="container-fluid">
          @yield('content')
        </div>

      </div>
      @include('layout.footer')
    </div>
  </div>
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="{{ asset('admin/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{ asset('admin/js/sb-admin-2.min.js')}}"></script>
  <script src="{{ asset('admin/vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{ asset('admin/js/demo/chart-area-demo.js')}}"></script>
  <script src="{{ asset('admin/js/demo/chart-pie-demo.js')}}"></script>

</body>

</html>
