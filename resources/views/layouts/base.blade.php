<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{config('app.name', 'Website')}}</title>
</head>


<body>
    <!-- Header Fixed On Top-->
    <nav id="navbar_floating" class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top"
        style="background-color: #33339b !important;">
        <a class="navbar-brand" href="#">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/LaravelLogo.png/800px-LaravelLogo.png"
                style="object-fit: contain; width: 3em;" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Stories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Careers</a>
                    </li>
                </ul>
            </ul>
            <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-search"
                        aria-hidden="true"></i></button>
            </form> -->
        </div>
    </nav>
    <!-- Header Fixed On Top-->

    <div class="container">
        <!-- Header On Container-->
        <div class="col-md-12 mt-2 mb-3">
            <div class="row">
                <div class="col-md-12">
                    <!-- Icon -->
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/LaravelLogo.png/800px-LaravelLogo.png" style="object-fit: contain; width: 10em;" alt="">
                    <!-- Icon -->
                </div>
            </div>
            <div class="row bg-dark text-white mt-2 pt-2 pb-2" style="border-radius: 0.3em;">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Stories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Careers</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Header On Container-->
        
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="page-footer font-small bg-dark text-light pt-4">
        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">
            <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->
                <div class="col-md-1 mt-md-0 mt-3">
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 mt-md-0 mt-3">
                    <!-- Content -->
                    <h5 class="text-uppercase">About Us</h5>
                    <ul class="list-unstyled">
                        <li>
                            School Name
                        </li>
                        <li>
                            <i class="fa fa-map-marker" aria-hidden="true" style="width: 1.3em;"></i> Jl. XXXX, Company,
                            City, Province-XXXXXX Country
                        </li>
                        <li>
                            <i class="fa fa-phone" aria-hidden="true" style="width: 1.3em;"></i> +62-21.xxxx.xxxx
                        </li>
                        <li>
                            <i class="fa fa-fax" aria-hidden="true" style="width: 1.3em;"></i> +62-21.xxxx.xxxx
                        </li>
                        <li>
                            <i class="fa fa-envelope" aria-hidden="true" style="width: 1.3em;"></i> email@school.ac.id
                        </li>
                    </ul>
                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">
                    <!-- Links -->
                    <h5 class="text-uppercase">Social Media</h5>
                    <ul class="list-unstyled">
                        <li style="margin-bottom: 0.4em;">
                            <a class="btn btn-sm text-light" style="background-color: #4267B2 !important;"
                                href="#!"><b><i class="fa fa-facebook-square" aria-hidden="true"></i></b>&nbsp; Like Our
                                Facebook Page</a>
                        </li>
                        <li style="margin-bottom: 0.4em;">
                            <a class="btn btn-sm text-light" style="background-color: #C13584 !important;"
                                href="#!"><b><i class="fa fa-instagram" aria-hidden="true"></i></b>&nbsp; Follow Our
                                Instagram</a>
                        </li>
                        <li style="margin-bottom: 0.4em;">
                            <a class="btn btn-sm text-light" style="background-color: #1DA1F2 !important;"
                                href="#!"><b><i class="fa fa fa-twitter" aria-hidden="true"></i></b>&nbsp; Follow Our
                                Twitter</a>
                        </li>
                    </ul>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">
                    <!-- Links -->
                    <h5 class="text-uppercase">Pages</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a class="text-light" href="#!">Home</a>
                        </li>
                        <li>
                            <a class="text-light" href="#!">Stories</a>
                        </li>
                        <li>
                            <a class="text-light" href="#!">Article</a>
                        </li>
                        <li>
                            <a class="text-light" href="#!">Events</a>
                        </li>
                        <li>
                            <a class="text-light" href="#!">About Us</a>
                        </li>
                        <li>
                            <a class="text-light" href="#!">Careers</a>
                        </li>
                    </ul>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <!-- Scroll To Top Button -->
    <a id="btn-back-to-top" href="#" class="btn btn-lg text-light" style="background-color: #33339b !important; position: fixed; bottom: 25px; right: 25px;" role="button">
        <i class="fa fa-chevron-up" aria-hidden="true"></i>
    </a>
    <!-- Scroll To Top Button -->

    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        $(document).ready(function () {
            // Fixed Header and Back To Top Button
            $('#navbar_floating').hide();
            $('#btn-back-to-top').hide();

            $(window).scroll(function () {
                // set distance user needs to scroll before we start fadeIn
                if ($(this).scrollTop() > 100) {
                    $('#navbar_floating').fadeIn();
                    $('#btn-back-to-top').fadeIn();
                } else {
                    $('#navbar_floating').fadeOut();
                    $('#btn-back-to-top').fadeOut();
                }
            });

            //Handling Back to top button funciton
            $('#btn-back-to-top').click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 400);
                return false;
            });
        });
    </script>
</body>


</html>