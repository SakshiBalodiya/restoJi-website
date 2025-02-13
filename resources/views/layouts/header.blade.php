<?php

function page_url()
{
    return sprintf('%s://%s%s', isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http', $_SERVER['SERVER_NAME'], $_SERVER['REQUEST_URI']);
}
?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ asset('images/faviconmaj.png') }}" type="image/png" />
    <!--plugins-->
    {{-- <link href="{{ asset('plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" /> --}}
    {{-- <link href="{{asset('plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" /> --}}
    {{-- <link href="{{asset('plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" /> --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">

    <link href="{{ asset('plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{ asset('css/pace.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/pace.min.js') }}"></script>
    {{-- <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js') }}"></script> --}}
    <script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js') }}"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/colors/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-extended.css') }}" rel="stylesheet">
    <script src="{{ asset('plugins/chartjs/js/chart.js') }}"></script>
    <link href="{{ asset('css2?family=Roboto:wght@400;500&display=swap') }}" rel="stylesheet">
    <link href="{{ asset('css/icons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <!-- Bootstrap JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>RestoJi</title>

</head>
    <body class="front">
        <header>
            <div class="header-container">
                <nav class="navbar navbar-expand-lg rounded">
                    <div class="container-fluid phone-nav">
                        <div class="header_logo">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <img src="{{ asset('images\logo.png') }} " alt="logo">
                            </a>
                        </div>
                        <!-- <div class="d-sm-none hosting_btn">
                                <button>Hosting</button>
                        </div> -->
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent4" aria-controls="navbarSupportedContent4" aria-expanded="false" aria-label="Toggle navigation">
                            <span>Go to... </span>
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse nav_margin" id="navbarSupportedContent4" style="justify-content: space-around">
                           
    
                            <ul class="navbar-nav nav_title" style="border-bottom:0px;">

                                <li class="nav-item <?php if (page_url() == url('/') || page_url() == url('/')) {
                                                        echo 'active';
                                                    } ?>">
                                    <a class="nav-link nav_headings" href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav_headings" href="#features-section">Features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav_headings" href="#pricing-section">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav_headings"  href="#white-labelapp">White-Label App</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav_headings"  href="#contact_section">Contact Us</a>
                                </li>
    
                               
                                
                               
                            </ul>
                            <div>
                                <ul class="navbar-nav ms-auto border-dark">
                                    <li class="nav-item">
                                        <a class="nav-link nav_headings" href="#contact_section">Book A Demo</a>
                                    </li>
                                </ul>
                            </div>
    
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!--end switcher-->
        <!-- Bootstrap JS -->
        <!--plugins-->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <!--plugins-->
        <!--  <script src="{{ asset('plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script> -->
        <script src="{{ asset('plugins/simplebar/js/simplebar.min.js') }}"></script>
        <script src="{{ asset('plugins/metismenu/js/metisMenu.min.js') }}"></script>
        <script src="{{ asset('plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
        <script src="{{ asset('js/widgets.js') }}"></script>
        <!--app JS-->
        <script src="{{ asset('plugins/fullcalendar/js/main.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>