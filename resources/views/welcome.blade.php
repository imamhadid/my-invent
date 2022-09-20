<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Invent</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
    <!-- style css -->
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    <!-- Responsive-->
    <link rel="stylesheet" href={{ asset('css/responsive.css') }}>
    <!-- fevicon -->
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href={{ asset('css/jquery.mCustomScrollbar.min.css') }}>
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{ asset('img/logo.png') }}" alt="#" /></div>
    </div>
    <!-- end loader -->
    <div class="wrapper">
        <!-- end loader -->
        <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div id="dismiss">
                    <i class="fa fa-arrow-left"></i>
                </div>
                <ul class="list-unstyled components">
                    <li class="active"> <a href="#">Home</a> </li>
                    <li><a href="#about">About </a> </li>
                    <li><a href="#work">Work</a> </li>
                    <li><a href="#contact">Contact </a> </li>
                </ul>
            </nav>
        </div>
        <div id="content">
            <!-- header -->
            <header>
                <!-- header inner -->
                <div class="header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                                <div class="full">
                                    <div class="center-desk">
                                        <div class="logo">
                                            <a href="/"><img width="80" src="{{ asset('img/logo.png') }}" alt="#" />My Invent</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                                @if (Route::has('login'))
                                    <ul class="btn">
                                        @auth
                                            <li class="down_btn"><a href="{{ url('/home') }}">Dashboard</a></li>
                                        @else
                                            <li class="down_btn"><a href="{{ route('login') }}">Login</a></li>
                                            <li><a href="{{ route('register') }}">Sign Up</a></li>
                                        @endauth
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- end header inner -->
            <!-- end header -->
            <!-- banner -->
            <div id="myCarousel" class="carousel slide banner_main" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container-fluid">
                            <div class="carousel-caption">
                                <div class="row">
                                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                                        <div class="text-bg">
                                            <h1>Get<br> Thinking A <br>long time</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                enim ad minim veniam, quis </p>
                                            <a class="read_more" href="#">Read more</a>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                                        <div class="images_box">
                                            <figure><img src="{{ asset('img/logo.png') }}"></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container-fluid ">
                            <div class="carousel-caption">
                                <div class="row">
                                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                                        <div class="text-bg">
                                            <h1>Get<br> Thinking A <br>long time</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                enim ad minim veniam, quis </p>
                                            <a class="read_more" href="#">Read more</a>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                                        <div class="images_box">
                                            <figure><img src="{{ asset('img/logo.png') }}"></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container-fluid">
                            <div class="carousel-caption ">
                                <div class="row">
                                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                                        <div class="text-bg">
                                            <h1>Get<br> Thinking A <br>long time</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                enim ad minim veniam, quis </p>
                                            <a class="read_more" href="#">Read more</a>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                                        <div class="images_box">
                                            <figure><img src="{{ asset('img/logo.png') }}"></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
            <!-- end banner -->
            <!-- about -->
            <div id="about" class="about">
                <div class="container-fluid">
                    <div class="row d_flex">
                        <div class="col-md-5">
                            <div class="about_img">
                                <figure><img src="{{ asset('img/logo.png') }}" alt="#" /></figure>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="titlepage">
                                <h2>About <span class="blu">Software</span></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit </p>
                                <a class="read_more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end about -->
            <!-- work -->
            <div id="work" class="work">
                <div class="container-fluid">
                    <div class="row d_flex">
                        <div class="col-md-7">
                            <div class="titlepage">
                                <h2>How To <span class="blu">Works it</span></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit </p>
                                <a class="read_more">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="work_img">
                                <figure><img style="-webkit-transform: scaleX(-1);transform: scaleX(-1);" src="{{ asset('img/logo.png') }}" alt="#" /></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end work -->
            <!--  footer -->
            <footer>
                <div class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                <div class="row">
                                    <div class="col-md-8 col-sm-6">
                                        <div class="address">
                                            <h3>Address </h3>
                                        </div>
                                        <ul class="location_icon">
                                            <li>It is a long established fact that a reader will be distracted
                                                by the readable content of a page when looking at its layout.
                                                The point of using Lorem Ipsum is that it has a more-or-less
                                                normal distribution of letters, </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="address">
                                            <h3>Links</h3>
                                            <ul class="Menu_footer">
                                                <li class="active"> <a href="/">Home</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                <div class="row">
                                    <div class="col-md-5 col-sm-8">
                                        <div class="address">
                                            <h3>Follow Us</h3>
                                        </div>
                                        <ul class="social_icon">
                                            <li><a href="https://www.facebook.com/Ahogaru/">Facebook <i class="fa fa-facebook"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="https://www.linkedin.com/in/hadit1297/"> Linkedin<i class="fa fa-linkedin-square"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="https://www.youtube.com/channel/UCQCaglQ8GO5F6rh1STMpL9w"> Youtube<i class="fa fa-youtube-play"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="https://www.instagram.com/adit_vanh/"> Instagram<i class="fa fa-instagram"
                                                        aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end footer -->
        </div>
        <div class="overlay"></div>
        <!-- Javascript files-->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
        <!-- sidebar -->
        <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#dismiss, .overlay').on('click', function() {
                    $('#sidebar').removeClass('active');
                    $('.overlay').removeClass('active');
                });

                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar').addClass('active');
                    $('.overlay').addClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                $(".fancybox").fancybox({
                    openEffect: "none",
                    closeEffect: "none"
                });

                $(".zoom").hover(function() {

                    $(this).addClass('transition');
                }, function() {

                    $(this).removeClass('transition');
                });
            });
        </script>
</body>

</html>
