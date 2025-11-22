 {{-- This project is started at 2:44pm date : 21/11/2025 --}}
<!DOCTYPE html>
<html lang="en" class="group" data-sidebar-size="lg" data-card-style="square">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>LMS</title>
  <meta name="robots" content="noindex, follow">
  <meta name="description" content="web development agency">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
  <!-- Style CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/output.css')}}">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body class="bg-body-light dark:bg-dark-body group-data-[theme-width=box]:container group-data-[theme-width=box]:max-w-screen-3xl xl:group-data-[theme-width=box]:px-4">
    <div id="loader" class="w-screen h-screen flex-center bg-white dark:bg-dark-card fixed inset-0 z-[9999]">
        <img src="{{asset('assets/images/loader.gif')}}" alt="loader">
    </div>
{{-- header --}}
@include('dashboard.layouts.header')
{{-- side nav --}}
@include('dashboard.layouts.sideNav')
{{-- main content --}}
@yield('content')

{{-- Javascript Links --}}
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor/jquery.min.js"></script>
<script src="{{asset('assets/js/vendor/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/flowbite.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/smooth-scrollbar/smooth-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/js/pages/dashboard-admin-lms.js')}}"></script>
<script src="{{asset('assets/js/component/app-menu-bar.js')}}"></script>
<script src="{{asset('assets/js/switcher.js')}}"></script>
<script src="{{asset('assets/js/layout.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"b31fb7a3bbfb4b34a60444ccfef7f11e","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from template.codexshaper.com/admin/lms-hub/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Nov 2025 05:44:04 GMT -->
</html>