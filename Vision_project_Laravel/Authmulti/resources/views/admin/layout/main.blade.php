<!DOCTYPE html>
<html lang="en">
<head>
<!-- Mirrored from www.bootstrapdash.com/demo/spica-free/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Mar 2023 09:55:37 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin dashboard</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{asset('backend/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('backend/images/favicon.png')}}" />     
   <title>Document</title>
</head>
<body>


@include('admin.layout.header')
 @yield('main-content')
   
@include('admin.layout.footer')



  <!-- base:js -->
  <script src="{{asset('backend/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{asset('backend/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('backend/js/jquery.cookie.js')}}" type="text/javascript"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('backend/js/off-canvas.js')}}"></script>
  <script src="{{asset('backend/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('backend/js/template.js')}}"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
    <script src="{{asset('backend/js/jquery.cookie.js')}}" type="text/javascript"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="{{asset('backend/js/dashboard.js')}}"></script>
  <!-- End custom js for this page-->
</body>
</html>