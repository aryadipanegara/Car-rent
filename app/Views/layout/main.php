<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rental Mobil</title>
    <!-- Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Landing page template for creative dashboard">
    <meta name="keywords" content="Landing page template">
    <!-- Favicon icon -->
    <link rel="icon" href="<?= base_url() ?>/assets/logos/rentallogo.png" type="image/png" sizes="16x16">
    <!-- Bootstrap -->
    <link href="<?= base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,700,600" rel="stylesheet" type="text/css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/animate.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/owl.theme.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/magnific-popup.css">
    <!-- Full Page Animation -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/animsition.min.css">
    <!-- Ionic Icons -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/ionicons.min.css">
    <!-- Main Style css -->
    <link href="<?= base_url() ?>/assets/css/style.css" rel="stylesheet" type="text/css" media="all">
</head>



<body>
    <div class="wrapper animsition" data-animsition-in-class="fade-in" data-animsition-in-duration="1000"
        data-animsition-out-class="fade-out" data-animsition-out-duration="1000">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <a class="navbar-brand page-scroll" href="/"><img
                            src="<?= base_url() ?>/assets/logos/rentallogo.png" alt="adminity Logo" height="65px"
                            width="65px"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                        </ul>
                        <ul class="navbar-nav my-2 my-lg-0">
                            <li class="nav-item">
                                <a class="nav-link page-scroll" href="<?= base_url('home'); ?>"><svg
                                        stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 1024 1024" height="20px" width="20px"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M946.5 505L560.1 118.8l-25.9-25.9a31.5 31.5 0 0 0-44.4 0L77.5 505a63.9 63.9 0 0 0-18.8 46c.4 35.2 29.7 63.3 64.9 63.3h42.5V940h691.8V614.3h43.4c17.1 0 33.2-6.7 45.3-18.8a63.6 63.6 0 0 0 18.7-45.3c0-17-6.7-33.1-18.8-45.2zM568 868H456V664h112v204zm217.9-325.7V868H632V640c0-22.1-17.9-40-40-40H432c-22.1 0-40 17.9-40 40v228H238.1V542.3h-96l370-369.7 23.1 23.1L882 542.3h-96.1z">
                                        </path>
                                    </svg></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link page-scroll" href="<?= base_url('product'); ?>"><svg
                                        stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 256"
                                        height="20px" width="20px" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M140,128v40a12,12,0,0,1-24,0V128a12,12,0,0,1,24,0ZM243.82,98.64,230,202.64A20.06,20.06,0,0,1,210.13,220H45.87A20.07,20.07,0,0,1,26,202.65l-13.86-104A20,20,0,0,1,32,76H66.55L119,16.1a12,12,0,0,1,18.06,0L189.45,76H224a20,20,0,0,1,19.81,22.64ZM98.45,76h59.11L128,42.22Zm121,24H36.57l12.8,96H206.63Zm-51.37,26.81-4,40a12,12,0,0,0,10.75,13.13c.4,0,.81.06,1.21.06a12,12,0,0,0,11.92-10.81l4-40a12,12,0,1,0-23.88-2.38Zm-80.12,0a12,12,0,0,0-23.88,2.38l4,40A12,12,0,0,0,80,180c.39,0,.8,0,1.2-.06a12,12,0,0,0,10.75-13.13Z">
                                        </path>
                                    </svg></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('login'); ?>"><svg stroke="currentColor"
                                        fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="20px"
                                        padding="0" width="20px" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path
                                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.35 18.5C8.66 17.56 10.26 17 12 17s3.34.56 4.65 1.5c-1.31.94-2.91 1.5-4.65 1.5s-3.34-.56-4.65-1.5zm10.79-1.38a9.947 9.947 0 00-12.28 0A7.957 7.957 0 014 12c0-4.42 3.58-8 8-8s8 3.58 8 8c0 1.95-.7 3.73-1.86 5.12z">
                                        </path>
                                        <path
                                            d="M12 6c-1.93 0-3.5 1.57-3.5 3.5S10.07 13 12 13s3.5-1.57 3.5-3.5S13.93 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z">
                                        </path>
                                    </svg></a>

                            <li class="nav-item">
                                <a class="nav-link" href="<?= site_url('layout'); ?>"><svg stroke="currentColor"
                                        fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="20px"
                                        padding="0" width="20px" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 14V22H4C4 17.5817 7.58172 14 12 14ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM21 17H22V22H14V17H15V16C15 14.3431 16.3431 13 18 13C19.6569 13 21 14.3431 21 16V17ZM19 17V16C19 15.4477 18.5523 15 18 15C17.4477 15 17 15.4477 17 16V17H19Z">
                                        </path>
                                    </svg></a>

                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);" onclick="showConfirmation()">
                                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                        stroke-linecap="round" stroke-linejoin="round" height="20px" padding="0"
                                        width="20px" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2">
                                        </path>
                                        <path d="M9 12h12l-3 -3"></path>
                                        <path d="M18 15l3 -3"></path>
                                    </svg>
                                </a>
                            </li>


                            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                            <script>
                            function showConfirmation() {
                                Swal.fire({
                                    title: 'Are you sure?',
                                    text: "Are you sure you want to log out?",
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonColor: '#3085d6',
                                    cancelButtonColor: '#d33',
                                    confirmButtonText: 'Yes, log out'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        Swal.fire(
                                            'Logged Out',
                                            'You have been logged out.',
                                            'success'
                                        ).then(() => {
                                            // Kode logout di sini
                                            window.location.href = "<?= base_url('logout'); ?>";
                                        });
                                    }
                                });
                            }
                            </script>


                            </script>



                        </ul>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="main" id="main">
            <!-- Main Section-->

            <?php $this->rendersection('content'); ?>

            <!-- Footer Section -->
            <div class="footer">
                <div class="container">
                    <div class="col-md-12 text-center">
                        <img src="<?= base_url() ?>/assets/logos/rentallogo.png" alt="logo Mobil" height="80px"
                            width="80px">
                        <ul class="footer-menu">
                            <li><a href="/">Home</a></li>
                            <li><a href="/Product">Product</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                        <div class="footer-text">
                            <p>
                                Copyright © 2023
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Scroll To Top -->
            <a id="back-top" class="back-to-top page-scroll" href="#main">
                <i class="ion-ios-arrow-thin-up"></i>
            </a>
            <!-- Scroll To Top Ends-->
        </div>
        <!-- Main Section -->
    </div>
    <!-- Wrapper-->

    <!-- Jquery and Js Plugins -->
    <script type="text/javascript" src="<?= base_url() ?>/assets/js/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>/assets/js/plugins.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>/assets/js/menu.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>/assets/js/custom.js"></script>
</body>

</html>