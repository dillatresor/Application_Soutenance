<!DOCTYPE html>
<html lang="en">

<head>
@include('layouts.style')
</head>

<body>

  <!-- ======= Header ======= -->
@include('require.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
@include('require.sidebar')
 <!-- End Sidebar-->

  <main id="main" class="main">
@yield('contenu')
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
@include('require.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
@include('layouts.script')

</body>

</html>
