<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
<title>UPUCANADA DASHBOARD</title>
  <link rel="stylesheet" href="{{ asset('build/assets/app-DaBYqt0m.css') }}">

<!-- JS -->
<script src="{{ asset('build/assets/app-DaBYqt0m.js') }}" defer></script>
    <link href="{{asset('backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
    <!-- Custom styles for this template-->
    <link href="{{asset('backend/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <script src="{{ asset('backend/vendor/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- jQuery Easing -->
<script src="{{ asset('backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- SB Admin 2 custom scripts -->
<script src="{{ asset('backend/js/sb-admin-2.min.js') }}"></script>
    @stack('styles')
  
</head>