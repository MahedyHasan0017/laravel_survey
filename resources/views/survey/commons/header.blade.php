<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dishari Survey Co. Pvt. Ltd.</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/common.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/heading.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/footer.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">


    <style>

    </style>


</head>

<body>


    <!-- <header class="container"> -->
    <!-- navbar top -->
    <div class="container">
        <div class="row navbar__top">
            <div class="col-md-7 logo__and__brand">
                <div class="logo__main">
                    <a href="{{route('home_view')}}">
                        <img src="{{asset('/assets/assets/logo-icon/logo.png')}}" alt="logo">
                    </a>
                </div>
                <h1 class="brand__name">
                    <a href="/">
                        Dishari Survey Co. Pvt. Ltd.
                    </a>
                </h1>
            </div>
            <div class="col-md-5">
                <div class="social__and__contact">
                    <div class="social__icons">
                        <ul>
                            <li class="social__single__item facebook__color">
                                <a href="https://www.facebook.com/dssurvey/"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li class="social__single__item twitter__color">
                                <a href="https://twitter.com/disharisurvey?s=08"><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li class="social__single__item instragram__color">
                                <a href="https://www.instagram.com/dishari_survey/"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                            <li class="social__single__item youtube__color">
                                <a href="https://www.youtube.com/channel/UCpiQH25Iatged_aY1_Kk6aA?app=desktop"><i class="fa-brands fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="contact__info__main">
                        <div class="social__single__item contact__color">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="contact__info">
                            <div>Call Us</div>
                            <div>
                                +8801737328266
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- navbar top end-->

    <!-- navbar start -->
    <div class="stickey__menu">
        <div class="containerr">
            <nav class="navbar navbar-expand-lg navbar__main">
                <div class="container">
                    <button class="navbar-toggler mobile__menu" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    About Dishari
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{route('mission_and_vision_view')}}">Mission & Vision</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="{{route('management_view')}}">Management</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('our_products_view')}}">Our Product</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('enlisted_bank_view')}}">Enlisted Bank</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('team_member_view')}}">Team Member</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('director_panel_view')}}">Director Panel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('gallery_view')}}">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('contact_us_view')}}">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('location_view')}}">Location</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Achievement
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{route('company_achievement_view')}}">Company
                                            Achievement</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="{{route('individual_achievement_view')}}">Individual
                                            Achievement</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="{{route('admin_login_view')}}">login
                                        </a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="{{route('admin_register_view')}}">register
                                        </a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

    </div>
    <!-- navbar end -->