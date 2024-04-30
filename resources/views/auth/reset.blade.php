<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Reset Password</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('public/admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('public/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Reset Password</h5>
                                        <p class="text-center small">Enter your password</p>
                                        @if (Session::has('error'))
                                            <p style="text-align: center;color: red;font-weight: 700;">
                                                {{ Session::get('error') }}</p>
                                        @endif
                                    </div>

                                    <form class="row g-3 needs-validation" method="POST"
                                        action="" novalidate>
                                        @csrf
                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control"
                                                id="yourPassword" required="">
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>
                                        <div class="col-12">
                                            <label for="cyourPassword" class="form-label">Confrim Password</label>
                                            <input type="cpassword" name="cpassword" class="form-control"
                                                id="cyourPassword" required="">
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>


                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Reset</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0"> <a href="{{ url('/') }}">Go To login Page </a>
                                            </p>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <div class="credits">
                                <!-- All the links in the footer should remain intact. -->
                                <!-- You can delete the links only if you purchased the pro version. -->
                                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('public/admin/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('public/admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/admin/assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('public/admin/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('public/admin/assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('public/admin/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('public/admin/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('public/admin/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('public/admin/assets/js/main.js') }}"></script>

</body>

</html>
