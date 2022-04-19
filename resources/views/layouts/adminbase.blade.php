<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assetsForAdmin//vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assetsForAdmin//vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assetsForAdmin//css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assetsForAdmin//images/favicon.ico" />
</head>
<body>
@include('admin.header')

@section('sidebar')
    @include('admin.sidebar')
@show



@include('home.footer')
@yield('foot')




</body>



</html>
</html>
