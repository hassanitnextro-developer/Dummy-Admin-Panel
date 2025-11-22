<!DOCTYPE html>
<html lang="en" class="group" data-sidebar-size="lg" data-card-style="square">

<!-- Mirrored from template.codexshaper.com/admin/lms-hub/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Nov 2025 05:44:16 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>LMS-Login</title>
  <meta name="robots" content="noindex, follow">
  <meta name="description" content="web development agency">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
  <!-- Style CSS -->
  <link rel="stylesheet" href="assets/css/output.css">

</head>
<body class="bg-body-light dark:bg-dark-body">
    <div id="loader" class="w-screen h-screen flex-center bg-white dark:bg-dark-card fixed inset-0 z-[9999]">
        <img src="assets/images/loader.gif" alt="loader">
    </div>

    <!-- Start Main Content -->
    <div class="main-content m-4">
        <div class="grid grid-cols-12 gap-y-7 sm:gap-7 card px-4 sm:px-10 2xl:px-[70px] py-15 lg:items-center lg:min-h-[calc(100vh_-_32px)] dk-theme-card-square">
            <!-- Start Overview Area -->
            <div class="col-span-full lg:col-span-6">
                <div class="flex flex-col items-center justify-center gap-10 text-center">
                    <div class="hidden sm:block">
                        <img src="{{asset('assets/images/loti/loti-auth.svg')}}" alt="loti" class="group-[.dark]:hidden">
                        <img src="{{asset('assets/images/loti/loti-auth-dark.svg')}}" alt="loti" class="group-[.light]:hidden">
                    </div>
                    <div>
                        <h3 class="text-xl md:text-[28px] leading-none font-semibold text-heading">
                            Welcome back!
                        </h3>
                        <p class="font-medium text-gray-500 dark:text-dark-text mt-4 px-[10%]">
                            Whether you're launching a stunning online store  optimizing your our object-oriented
                        </p>
                    </div>
                </div>
            </div>
            <!-- End Overview Area -->

            <!-- Start Form Area -->
            <div class="col-span-full lg:col-span-6 w-full lg:max-w-[600px]">
                <div class="border border-form dark:border-dark-border p-5 md:p-10 rounded-20 md:rounded-30 dk-theme-card-square">
                    <h3 class="text-xl md:text-[28px] leading-none font-semibold text-heading">
                        Sign In
                    </h3>
                    <p class="font-medium text-gray-500 dark:text-dark-text mt-4">
                        Welcome Back! Log in to your account
                    </p>
                            <!-- Error -->
                        @if (session('fail'))
                            <div class="alert alert-danger text-start" style="color: red">
                                {{ session('fail') }}
                            </div>
                        @endif
                    <form action="{{route('login.attempt')}}" class="leading-none mt-8" method="post">
                        @csrf
                        <div class="mb-2.5">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" placeholder="debra.holt@example.com" required class="form-input px-4 py-3.5 rounded-lg" name="email">
                        </div>
                        <div class="mt-5">
                            <label for="password" class="form-label">Password</label>
                            <div class="relative">
                                <input type="password" id="password" placeholder="Password" required class="form-input px-4 py-3.5 rounded-lg" name="password">
                                <label for="toggleInputType" class="size-8 rounded-md flex-center hover:bg-gray-200 dark:hover:bg-dark-icon foucs:bg-gray-200 dark:foucs:bg-dark-icon position-center left-[95%]">
                                    <input type="checkbox" id="toggleInputType" class="inputTypeToggle peer/it" hidden>
                                    <i class="ri-eye-off-line text-gray-500 dark:text-dark-text peer-checked/it:before:content-['\ecb5']"></i>
                                </label>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-3 mb-7">
                            <div class="flex items-center gap-1 select-none">
                                <input type="checkbox" name="remember-me" id="rememberMe">
                                <label for="rememberMe" class="font-spline_sans text-sm leading-none text-gray-900 dark:text-dark-text cursor-pointer">Remember Me</label>
                            </div>
                            <a href="forgot-password.html" class="text-xs leading-none text-primary-500 font-semibold">Forgot password?</a>
                        </div>
                        <!-- Submit Button -->
                        <button type="submit" class="btn b-solid btn-primary-solid w-full">Sign In</button>
                    </form>
                </div>
            </div>
            <!-- End Form Area -->
        </div>
    </div>
    <!-- End Main Content -->

    <script src="{{asset('assets/js/vendor/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/switcher.js')}}"></script>
    <script src="{{asset('assets/js/layout.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"b31fb7a3bbfb4b34a60444ccfef7f11e","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from template.codexshaper.com/admin/lms-hub/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Nov 2025 05:44:17 GMT -->
</html>