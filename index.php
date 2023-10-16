<?php 
include "configurasi/koneksi.php";
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Poralia">
        <meta name="generator" content="Poralia">
        <title>Poralia - Ini Karir</title>

        <!-- Video.js base CSS -->
        <link rel="stylesheet" href="https://unpkg.com/video.js@7/dist/video-js.min.css" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;0,800;1,400;1,600;1,800&family=Poppins:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap-utilities.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
        <link rel="stylesheet" href="./assets/vendor/fullpage/jquery.fullpage.css" />
        <link rel="stylesheet" href="./assets/css/style.css" />

        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicons/inikarir 32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicons/inikarir 16x16.png">
        <link rel="manifest" href="./assets/favicons/site.webmanifest">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
    </head>

    <body class="scroller">
	
	<!-- START NAVIGASI -->
        <header id="header">
            <nav id="navbar" class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="./assets/images/logo.png" alt="Ini Karir" />
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="container d-lg-flex px-0">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Article</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div> <!-- /.collapse menu -->
                </div> <!-- /.container -->
            </nav> <!-- /.nav -->
        </header> <!-- /.header -->
	<!-- END NAVIGASI -->
	
        <main id="main">
            <div id="fullpage">
                <div class="section">
                    <section id="hero-intro" class="hero-intro min-vh-100 d-flex w-100 align-items-center">
                        <div class="container mb-5 pb-5">
                            <div class="row align-items-center">
                                <div class="col-12 col-sm-12 col-md-6">
                                    <div class="hero-intro__grid mgrid">
                                        <div class="mgrid-item">
                                            <div class="ratio ratio-4x3">
                                                <div class="bg-light rounded">
                                                    <img src="./assets/images/DSC03092 1.png" class="position-absolute h-100 w-100 top-0 start-0 bottom-0 end-0" alt="Image">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mgrid-item">
                                            <div class="ratio ratio-8x6">
                                                <div class="bg-light rounded">
                                                    <img src="./assets/images/DSC03092 1.png" class="position-absolute h-100 w-100 top-0 start-0 bottom-0 end-0" alt="Image">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mgrid-item">
                                            <div class="ratio ratio-4x3">
                                                <div class="bg-transparent">
                                                    <div class="hero-intro__grid-inner h-100 d-flex">
                                                        <div class="mgrid-item-inner bg-light px-0 rounded">
                                                            <div class="h-100 position-relative">
                                                                <img src="./assets/images/DSC03092 1.png" class="position-absolute h-100 w-100 top-0 start-0 bottom-0 end-0" alt="Image">
                                                            </div>
                                                        </div>

                                                        <div class="mgrid-item-inner bg-light px-0 rounded">
                                                            <div class="h-100 position-relative">
                                                                <img src="./assets/images/DSC03092 1.png" class="position-absolute h-100 w-100 top-0 start-0 bottom-0 end-0" alt="Image">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- /.col-6 -->

                                <div class="col-12 col-sm-12 col-md-6">
                                    <div class="hero-intro__content mt-3 mt-md-0">
                                        <h1 class="fw-bold fs-1 mb-3">
                                            Where <span class="text-site">Great Companies</span> And <span class="text-site">Great Employees</span> Meet Up
                                        </h1>

                                        <div class="text-muted">
                                            IniKarir is human resources company that has the ability to find and channel workers throughout the world by prioritizing personality, expertise and knowledge in the recruitment process.
                                        </div>

                                        <div class="custom-checkbox mt-5">
                                            <input id="status"  type="checkbox"  name="status">
                                            <label for="status">
                                                <div class="status-switch"
                                                    data-unchecked="Company"
                                                    data-checked="Job Seeker">
                                                </div>
                                            </label>
                                        </div>
                                    </div> <!-- /.content -->
                                </div> <!-- /.col-6 -->
                            </div> <!-- /.row -->
                        </div> <!-- /.container -->
                    </section> <!-- /.hero-intro -->
                </div> <!-- /.section -->

                <div class="section">
                    <section id="hero1" class="hero1 pt-5 pb-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                                    <h2 class="fw-bolder fs-2 mb-3">What you <span class="text-site">focus on</span> will <span class="text-site">grow!</span></h2>
                                    <p class="text-xs text-muted">You can focus on growing your business and well handle the recruitment process for your company.</p>

                                    <div class="mt-4 d-flex gap-3">
                                        <a href="#" class="btn btn-primary text-xs fw-bold px-3 py-2">Consult Now</a>
                                        <a href="#" class="btn btn-outline-primary text-xs fw-bold px-3 py-2">Learn More</a>
                                    </div>
                                </div> <!-- /.col-lg-5 -->
                            </div> <!-- /.row -->
                        </div> <!-- /.container -->
                    </section> <!-- /.hero1 -->
                </div> <!-- /.section -->

                <div class="section">
                    <section id="hero-video" class="hero-video min-vh-100 d-md-flex align-items-center">
                        <div id="hero-video-player" class="ratio ratio-16x9 position-relative d-flex">
                            <div class="video-play d-flex align-items-center justify-content-center position-absolute top-0 start-0 end-0 bottom-0">
                                <a id="video-play" href="javascript:void(0);" class="video-button d-flex align-items-center justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                                        <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
                                    </svg>
                                </a>
                            </div>

                            <video
                                muted
                                id="my-video"
                                class="video-js vjs-16-9"
                                preload="auto"
                                data-setup="{}"
                            >
                                <source src="./assets/videos/Siap RaihKarirImpian_ Yuk Pasti Bisa! (IniKarir Company Profile).mp4" type="video/mp4" />
                                <p class="vjs-no-js">
                                    To view this video please enable JavaScript, and consider upgrading to a web browser that
                                    <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                                </p>
                            </video>

                            <img src="./assets/images/video-overlay.png" class="w-full h-full position-absolute top-0 end-0 start-0 bottom-0 hero-video-overlay" />
                            
                            <div class="hero-video-content text-white position-absolute top-0 start-0 bottom-0 end-0 d-flex align-items-end py-5">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-lg-10 col-xl-8">
                                            <div class="fw-bold fs-3 d-block mb-2">Get-to-know IniKarir</div>
                                            <div class="d-block">With IniKarir, you collaborate directly with our highly experienced executive search and leadership consulting experts. Our dedicated teams are well-connected, reliable, and attentive, ensuring you access the finest talent seamlessly.</div>
                                            <div class="d-block mt-3">
                                                <a href="#" class="video-cta btn btn-primary text-xs fw-bold px-3 position-relative">Download PDF</a>
                                            </div>
                                        </div> <!-- /.col -->
                                    </div> <!-- /.row -->
                                </div> <!-- /.container -->
                            </div> <!-- /.absolute -->
                        </div> <!-- /.ratio -->
                    </section> <!-- /.hero-video -->
                </div> <!-- /.section -->

                <div class="section">
                    <section id="hero-ahead" class="hero-ahead min-vh-100 d-md-flex align-items-center">
                        <div class="container">
                            <div class="row d-flex align-items-center">
                                <div class="col-12 col-sm-12 col-md-6">
                                    <div class="hero-ahead__content pe-lg-2 mb-md-2 pb-md-2">
                                        <h3 class="fw-bold fs-1 mb-4">Stay ahead with professional <span class="text-site">insights</span> article</h3>
                                        <p class="text-muted">Your Source for Timely and Informative Professional News and Updates. Stay Ahead with the Latest Trends, Tips, and Industry Insights to Enhance Your Career Growth and Success.</p>
                                    </div>
                                </div> <!-- /.col -->

                                <div class="col-12 col-sm-12 col-md-6">
                                    <div class="hero-ahead__card ps-lg-5">
                                        <div class="row">
                                            <div class="col-6 mb-4">
                                                <div class="ratio ratio-1x1">
                                                    <div class="card p-3 border-0 rounded-3 d-flex flex-column h-100 w-full justify-content-end">
                                                        <div class="fw-semibold fs-5 lh-sm">Professional <br /> Training</div>
                                                    </div>
                                                </div>
                                            </div> <!-- /.col-6 -->

                                            <div class="col-6 mb-4">
                                                <div class="ratio ratio-1x1">
                                                    <div class="card p-3 border-0 rounded-3 d-flex flex-column h-100 w-full justify-content-end">
                                                        <div class="fw-semibold fs-5 lh-sm">Recruitment and <br /> Headhunter</div>
                                                    </div>
                                                </div>
                                            </div> <!-- /.col-6 -->

                                            <div class="col-6 mb-4">
                                                <div class="ratio ratio-1x1">
                                                    <div class="card p-3 border-0 rounded-3 d-flex flex-column h-100 w-full justify-content-end">
                                                        <div class="fw-semibold fs-5 lh-sm">Overseas Job <br /> Placement</div>
                                                    </div>
                                                </div>
                                            </div> <!-- /.col-6 -->

                                            <div class="col-6 mb-4">
                                                <div class="ratio ratio-1x1">
                                                    <div class="card p-3 border-0 rounded-3 d-flex flex-column h-100 w-full justify-content-end">
                                                        <div class="fw-semibold fs-5 lh-sm">Career <br /> Development</div>
                                                    </div>
                                                </div>
                                            </div> <!-- /.col-6 -->
                                        </div> <!-- /.row -->
                                    </div> <!-- /.card -->
                                </div> <!-- /.col -->
                            </div> <!-- /.row -->
                        </div> <!-- /.container -->
                    </section> <!-- /.hero ahead-->
                </div> <!-- /.section -->

                <div class="section">
                    <section id="hero-authentic" class="hero-authentic min-vh-100 d-md-flex align-items-center">
                        <div class="container-fluid ps-md-0">
                            <div class="d-flex align-items-stretch">
                                <div class="d-none d-md-block position-relative">
                                    <div class="hero-authentic__image">
                                        <img class="position-absolute top-0 start-0 end-0 bottom-0 w-100 h-100" src="./assets/images/lanyard web 1.png" alt="Some image" />
                                    </div>
                                </div> <!-- /.image -->

                                <div class="d-block w-100 ps-md-4 ps-lg-5">
                                    <div class="row mb-4">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-8">
                                            <div class="hero-authentic__title">
                                                <h3 class="fw-bold fs-1 mb-3"><span class="text-site">Authentic</span> human resource services</h3>
                                                <p class="text-muted">IniKarir deliver fast result, innovative solutions, unleashing and maximizing the human potentials</p>
                                            </div>
                                        </div> <!-- /.col-7 -->
                                    </div> <!-- /.row -->

                                    <div class="row row-gap-4">
                                        <div class="col-12 col-sm-6 col-md-4">
                                            <div class="hero-authentic__item">
                                                <div class="fs-4 mb-3 fw-semibold text-site">01.</div>
                                                <div class="fs-5 fw-bold mb-2 lh-sm">Professional Team</div>
                                                <p class="text-muted text-xs">We have special recruiters who are experienced and professional in finding high-quality candidates.</p>
                                            </div> <!-- /.item -->
                                        </div> <!-- /.col-4 -->

                                        <div class="col-12 col-sm-6 col-md-4">
                                            <div class="hero-authentic__item">
                                                <div class="fs-4 mb-3 fw-semibold text-site">02.</div>
                                                <div class="fs-5 fw-bold mb-2 lh-sm">Extensive Listings</div>
                                                <p class="text-muted text-xs">We have a large and constantly updated database of job listings from top employers across a range of industries.</p>
                                            </div> <!-- /.item -->
                                        </div> <!-- /.col-4 -->

                                        <div class="col-12 col-sm-6 col-md-4">
                                            <div class="hero-authentic__item">
                                                <div class="fs-4 mb-3 fw-semibold text-site">03.</div>
                                                <div class="fs-5 fw-bold mb-2 lh-sm">Reliable IT system</div>
                                                <p class="text-muted text-xs">We have technology that is always up-to-date and integrated IT system so that it can speed up the recruitment process.</p>
                                            </div> <!-- /.item -->
                                        </div> <!-- /.col-4 -->

                                        <div class="col-12 col-sm-6 col-md-4">
                                            <div class="hero-authentic__item">
                                                <div class="fs-4 mb-3 fw-semibold text-site">04.</div>
                                                <div class="fs-5 fw-bold mb-2 lh-sm">Database Security</div>
                                                <p class="text-muted text-xs">Our database security system is reliable to ensure the confidentiality of clients and candidates.</p>
                                            </div> <!-- /.item -->
                                        </div> <!-- /.col-4 -->

                                        <div class="col-12 col-sm-6 col-md-4">
                                            <div class="hero-authentic__item">
                                                <div class="fs-4 mb-3 fw-semibold text-site">05.</div>
                                                <div class="fs-5 fw-bold mb-2 lh-sm">Customer Support</div>
                                                <p class="text-muted text-xs">Our dedicated customer support team is always available to help you with any questions or concerns you may have.</p>
                                            </div> <!-- /.item -->
                                        </div> <!-- /.col-4 -->

                                        <div class="col-12 col-sm-6 col-md-4">
                                            <div class="hero-authentic__item">
                                                <div class="fs-4 mb-3 fw-semibold text-site">06.</div>
                                                <div class="fs-5 fw-bold mb-2 lh-sm">Job Recommendation</div>
                                                <p class="text-muted text-xs">We use advanced algorithms to analyze users job search activity and provide personalized job recommendations.</p>
                                            </div> <!-- /.item -->
                                        </div> <!-- /.col-4 -->
                                    </div> <!-- /.row -->
                                </div> <!-- /.col-9 -->
                            </div> <!-- /.row -->
                        </div> <!-- /.container -->
                    </section> <!-- /.hero-authentic -->
                </div> <!-- /.section -->

                <div class="section">
                    <section id="hero-howto" class="hero-howto">
                        <div class="container">
                            <h2 class="fw-bold fs-1 text-center mb-3 mb-md-3 mb-lg-5">How <span class="text-site">IniKarir</span> works</h2>
                            <div class="hero-howto__list d-sm-flex flex-wrap justify-content-center justify-content-lg-between">
                                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2">
                                    <div class="hero-howto__item text-center p-3 position-relative">
                                        <div class="hero-howto__item-number text-site text-center mx-auto fw-semibold mb-3 fs-5 d-flex align-items-center justify-content-center rounded-2">1</div>
                                        <div class="hero-howto__item-title fw-bold fs-5 mb-1">Brief</div>
                                        <div class="hero-howto__item-summary text-xs text-muted">the job descriptions and requirements</div>
                                    </div>
                                </div> <!-- /.col-6 -->

                                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2">
                                    <div class="hero-howto__item text-center p-3 position-relative">
                                        <div class="hero-howto__item-number text-site text-center mx-auto fw-semibold mb-3 fs-5 d-flex align-items-center justify-content-center rounded-2">2</div>
                                        <div class="hero-howto__item-title fw-bold fs-5 mb-1">Contract</div>
                                        <div class="hero-howto__item-summary text-xs text-muted">signing partnership contract</div>
                                    </div>
                                </div> <!-- /.col-6 -->

                                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2">
                                    <div class="hero-howto__item text-center p-3 position-relative">
                                        <div class="hero-howto__item-number text-site text-center mx-auto fw-semibold mb-3 fs-5 d-flex align-items-center justify-content-center rounded-2">3</div>
                                        <div class="hero-howto__item-title fw-bold fs-5 mb-1">Headhunting</div>
                                        <div class="hero-howto__item-summary text-xs text-muted">identifying, screening, interviewing</div>
                                    </div>
                                </div> <!-- /.col-6 -->

                                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2">
                                    <div class="hero-howto__item text-center p-3 position-relative">
                                        <div class="hero-howto__item-number text-site text-center mx-auto fw-semibold mb-3 fs-5 d-flex align-items-center justify-content-center rounded-2">4</div>
                                        <div class="hero-howto__item-title fw-bold fs-5 mb-1">Hiring</div>
                                        <div class="hero-howto__item-summary text-xs text-muted">retain high-quality employees</div>
                                    </div>
                                </div> <!-- /.col-6 -->

                                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2">
                                    <div class="hero-howto__item text-center p-3 position-relative">
                                        <div class="hero-howto__item-number text-site text-center mx-auto fw-semibold mb-3 fs-5 d-flex align-items-center justify-content-center rounded-2">5</div>
                                        <div class="hero-howto__item-title fw-bold fs-5 mb-1">Onboarding</div>
                                        <div class="hero-howto__item-summary text-xs text-muted">understanding structure, culture, vision, mission, and values</div>
                                    </div>
                                </div> <!-- /.col-6 -->
                            </div> <!-- /.row -->
                        </div> <!-- /.container -->
                    </section> <!-- /.hero howto -->
                </div> <!-- /.section -->

                <div class="section">
                    <section id="hero-partner" class="hero-partner">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-12 col-lg-4">
                                    <div class="block hero-partner__heading text-left">
                                        <h3 class="fs-4 fw-bold">Partners and clients</h3>
                                        <p>Grow your business and simplify the hiring process with IniKarir</p>
                                        <div class="d-flex justify-content-center justify-content-lg-start gap-3 mt-4">
                                            <a href="#" class="btn btn-primary text-xs fw-bold px-3">Collaboration</a>
                                            <a href="#" class="btn btn-outline-primary text-xs fw-bold px-3">Learn More</a>
                                        </div>
                                    </div>
                                </div> <!-- /.col-4 -->

                                <div class="col-12 col-md-12 col-lg-8">
                                    <div class="block hero-partner__slider d-flex">
                                        <div class="hero-partner__navigation-prev d-flex align-items-center justify-content-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                                            </svg>
                                        </div>

                                        <!-- Slider main container -->
                                        <div class="swiper hero-partner__slider-swiper">
                                            <!-- Additional required wrapper -->
                                            <div class="swiper-wrapper">
                                                <!-- Slides -->
                                                <div class="swiper-slide d-flex align-items-center justify-content-center">
                                                    <div class="hero-partner__item">
                                                        <img src="./assets/images/Logo Ayo Trampil polos 1.png" alt="Logo" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide d-flex align-items-center justify-content-center">
                                                    <div class="hero-partner__item">
                                                        <img src="./assets/images/Gambar WhatsApp 2023-04-14 pukul 05.28 1.png" alt="Logo" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide d-flex align-items-center justify-content-center">
                                                    <div class="hero-partner__item">
                                                        <img src="./assets/images/image 3.png" alt="Logo" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide d-flex align-items-center justify-content-center">
                                                    <div class="hero-partner__item">
                                                        <img src="./assets/images/logo umht png 1.png" alt="Logo" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide d-flex align-items-center justify-content-center">
                                                    <div class="hero-partner__item">
                                                        <img src="./assets/images/image 3.png" alt="Logo" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide d-flex align-items-center justify-content-center">
                                                    <div class="hero-partner__item">
                                                        <img src="./assets/images/logo umht png 1.png" alt="Logo" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hero-partner__navigation-next d-flex align-items-center justify-content-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                            </svg>
                                        </div>
                                    </div> <!-- /.slider -->
                                </div> <!-- /.col-8 -->
                            </div> <!-- /.row -->
                        </div> <!-- /.container -->
                    </section> <!-- /.hero partner -->
                </div> <!-- /.section -->

                <div class="section">
                    <section id="hero-testimony" class="hero-testimony min-vh-100">
                        <div class="container">
                            <div class="hero-testimony__heading text-center mb-5">
                                <div class="fw-bold text-site">Testimonials</div>
                                <div class="fw-bold fs-3 mb-1">What they say</div>
                                <div class="text-sm">The story of them partnering and working with</div>
                            </div> <!-- /.heading -->

                            <div class="row justify-content-center">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-11 col-xl-9">
                                    <div class="hero-testimony__slider d-flex">
                                        <div class="hero-testimony__swiper-prev swiper-circle__navigation-prev d-flex align-items-center justify-content-center">
                                            <div class="d-flex align-items-center justify-content-center rounded-circle shadow-sm bg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                                                </svg>
                                            </div>
                                        </div>

                                        <div class="swiper hero-testimony__slider-swiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="hero-testimony__item d-block d-md-flex shadow-sm m-3">
                                                        <div class="hero-testimony__media relative d-flex align-items-center">
                                                            <div class="ratio" style="--bs-aspect-ratio: 86%;">
                                                                <div>
                                                                    <video
                                                                        muted
                                                                        id="hero-testimony__video-1"
                                                                        class="video-js"
                                                                        preload="auto"
                                                                        data-setup="{}"
                                                                    >
                                                                        <source src="./assets/videos/Testimoni Keberangkatan SPCC Arab Saudi - Pak Alfian.mp4" type="video/mp4" />
                                                                        <p class="vjs-no-js">
                                                                            To view this video please enable JavaScript, and consider upgrading to a web browser that
                                                                            <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                                                                        </p>
                                                                    </video>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="hero-testimony__content bg-white relative d-flex justify-content-center align-items-center flex-grow-1">
                                                            <div class="p-3 p-lg-5">
                                                                <div class="d-block mb-3 hero-testimony__content-image">
                                                                    <img src="./assets/images/image 3.png" class="w-50" alt="Logo" />
                                                                </div>

                                                                <div class="d-block mb-3">
                                                                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam, quis nostrud"
                                                                </div>

                                                                <div class="d-flex hero-testimony__user align-items-center mt-3">
                                                                    <div class="hero-testimony__user-avatar">
                                                                        <img src="./assets/images/image 9.png" class="rounded-circle" alt="Avatar" />
                                                                    </div>

                                                                    <div class="block ps-3">
                                                                        <div class="fw-bold">Prof. Sulaiman Al Majed</div>
                                                                        <div class="text-muted text-xs">SVP Medical Affair</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="swiper-slide">
                                                    <div class="hero-testimony__item d-block d-md-flex shadow-sm m-3">
                                                        <div class="hero-testimony__media relative d-flex align-items-center">
                                                            <div class="ratio" style="--bs-aspect-ratio: 86%;">
                                                                <div>
                                                                    <video
                                                                        muted
                                                                        id="hero-testimony__video-2"
                                                                        class="video-js"
                                                                        preload="auto"
                                                                        data-setup="{}"
                                                                    >
                                                                        <source src="./assets/videos/sample-5s.mp4" type="video/mp4" />
                                                                        <p class="vjs-no-js">
                                                                            To view this video please enable JavaScript, and consider upgrading to a web browser that
                                                                            <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                                                                        </p>
                                                                    </video>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="hero-testimony__content bg-white relative d-flex justify-content-center align-items-center flex-grow-1">
                                                            <div class="p-3 p-lg-5">
                                                                <div class="d-block mb-3 hero-testimony__content-image">
                                                                    <img src="./assets/images/image 3.png" class="w-50" alt="Logo" />
                                                                </div>

                                                                <div class="d-block mb-3">
                                                                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam, quis nostrud"
                                                                </div>

                                                                <div class="d-flex hero-testimony__user align-items-center mt-3">
                                                                    <div class="hero-testimony__user-avatar">
                                                                        <img src="./assets/images/image 9.png" class="rounded-circle" alt="Avatar" />
                                                                    </div>

                                                                    <div class="block ps-3">
                                                                        <div class="fw-bold">Prof. Sulaiman Al Majed</div>
                                                                        <div class="text-muted text-xs">SVP Medical Affair</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hero-testimony__swiper-next swiper-circle__navigation-next d-flex align-items-center justify-content-center">
                                            <div class="d-flex align-items-center justify-content-center rounded-circle shadow-sm bg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div> <!-- /.slider -->
                                </div> <!-- ./col -->
                            </div> <!-- ./row -->
                        </div> <!-- /.container -->
                    </section> <!-- /.hero testimony -->
                </div> <!-- /.section -->

                <div class="section">
                    <section id="hero-teamwork" class="hero-teamwork min-vh-100 d-md-flex align-items-center">
                        <div class="container">
                            <div class="hero-teamwork__heading">
                                <div class="fw-bold text-site mb-1">Our Team</div>
                                <h3 class="fw-bold fs-3">Teamwork Makes The Dream Work</h3>
                                <p class="text-muted">Great things in business are never done by one person</p>
                            </div> <!-- /.heading -->

                            <div class="row justify-content-center mt-5">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <div class="hero-teamwork__slider d-flex">
                                        <div class="hero-teamwork__swiper-prev swiper-circle__navigation-prev d-flex align-items-center justify-content-center">
                                            <div class="d-flex align-items-center justify-content-center rounded-circle shadow-sm bg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                                                </svg>
                                            </div>
                                        </div>
                                        
                                        <div class="mx-2 mx-lg-5 swiper hero-teamwork__slider-swiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide p-2">
                                                    <div class="position-relative hero-teamwork__item shadow-sm">
                                                        <div class="ratio">
                                                            <div>
                                                                <div class="h-100 w-100 position-relative">
                                                                    <img src="./assets/images/Joko Purwanto 1.png" class="w-100 h-100 rounded top-0 start-0 end-0 bottom-0" alt="Image">
                                                                </div>

                                                                <div class="hero-teamwork__item-content d-none p-3 p-lg-5 position-absolute top-0 start-0 end-0 bottom-0 d-flex justify-content-center align-items-center">
                                                                    <div class="block">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum ante, suscipit ut ultricies in, sollicitudin eu est. Etiam egestas dolor felis, et convallis arcu egestas id. Maecenas a dui nunc.</p>
                                                                        <p class="text-end">- Nathasya Fressilia</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="swiper-slide p-2">
                                                    <div class="position-relative hero-teamwork__item shadow-sm">
                                                        <div class="ratio">
                                                            <div>
                                                                <div class="h-100 w-100 position-relative">
                                                                    <img src="./assets/images/Joko Purwanto 1.png" class="w-100 h-100 rounded top-0 start-0 end-0 bottom-0" alt="Image">
                                                                </div>

                                                                <div class="hero-teamwork__item-content d-none p-3 p-lg-5 position-absolute top-0 start-0 end-0 bottom-0 d-flex justify-content-center align-items-center">
                                                                    <div class="block">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum ante, suscipit ut ultricies in, sollicitudin eu est. Etiam egestas dolor felis, et convallis arcu egestas id. Maecenas a dui nunc.</p>
                                                                        <p class="text-end">- Nathasya Fressilia</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="swiper-slide p-2">
                                                    <div class="position-relative hero-teamwork__item shadow-sm">
                                                        <div class="ratio">
                                                            <div>
                                                                <div class="h-100 w-100 position-relative">
                                                                    <img src="./assets/images/Joko Purwanto 1.png" class="w-100 h-100 rounded top-0 start-0 end-0 bottom-0" alt="Image">
                                                                </div>

                                                                <div class="hero-teamwork__item-content d-none p-3 p-lg-5 position-absolute top-0 start-0 end-0 bottom-0 d-flex justify-content-center align-items-center">
                                                                    <div class="block">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum ante, suscipit ut ultricies in, sollicitudin eu est. Etiam egestas dolor felis, et convallis arcu egestas id. Maecenas a dui nunc.</p>
                                                                        <p class="text-end">- Nathasya Fressilia</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hero-teamwork__swiper-next swiper-circle__navigation-next d-flex align-items-center justify-content-center">
                                            <div class="d-flex align-items-center justify-content-center rounded-circle shadow-sm bg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div> <!-- /.slider -->
                                </div> <!-- /.col -->
                            </div> <!-- /.row -->
                        </div> <!-- /.container -->
                    </section> <!-- /.hero teamwork -->
                </div> <!-- /.section -->

                <div class="section">
                    <section id="hero-faq" class="hero-faq min-vh-100 d-md-flex align-items-center">
                        <div class="container">
                            <div class="d-lg-flex align-items-end">
                                <div class="hero-faq__heading">
                                    <div class="fw-bold text-site mb-1">FAQs</div>
                                    <h3 class="fw-bold fs-3">Have a question ?</h3>
                                    <p class="text-muted">IniKarir answers frequently asked questions</p>
                                </div> <!-- /.heading -->

                                <div class="ms-auto mb-2">
                                    <ul id="faq-tabs" class="nav justify-content-end" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link text-muted active" href="#" data-bs-toggle="tab" data-bs-target="#faq1">General</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-muted" href="#" data-bs-toggle="tab" data-bs-target="#faq2">Collaboration</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-muted" href="#" data-bs-toggle="tab" data-bs-target="#faq3">Services</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-muted" href="#" data-bs-toggle="tab" data-bs-target="#faq4">Training</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-muted" href="#" data-bs-toggle="tab" data-bs-target="#faq5">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div> <!-- /.flex -->

                            <div class="hero-faq__accordtion mt-4 tab-content">
                                <div id="faq1" class="tab-pane fade show active">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6">
                                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                            Lorem ipsum dolor sit amet?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum ante, suscipit ut ultricies in, sollicitudin eu est. Etiam egestas dolor felis</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum ante?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                            Lorem ipsum dolor sit amet, consectetur ?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                                    </div>
                                                </div>
                                            </div> <!-- /.accordion item -->
                                        </div> <!-- /.col -->

                                        <div class="col-12 col-sm-12 col-md-6">
                                            <div class="accordion accordion-flush" id="accordionFlushExamplex">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOnex" aria-expanded="false" aria-controls="flush-collapseOnex">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum ante?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseOnex" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExamplex">
                                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwox" aria-expanded="false" aria-controls="flush-collapseTwox">
                                                            Consectetur adipiscing elit?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseTwox" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExamplex">
                                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThreex" aria-expanded="false" aria-controls="flush-collapseThreex">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum ante?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseThreex" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExamplex">
                                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                                    </div>
                                                </div>
                                            </div> <!-- /.accordion item -->
                                        </div> <!-- /.col -->
                                    </div> <!-- /.row -->
                                </div> <!-- /.faq 1 -->

                                <div id="faq2" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6">
                                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                            Lorem ipsum dolor sit amet?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum ante, suscipit ut ultricies in, sollicitudin eu est. Etiam egestas dolor felis</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum ante?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                            Lorem ipsum dolor sit amet, consectetur ?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                                    </div>
                                                </div>
                                            </div> <!-- /.accordion item -->
                                        </div> <!-- /.col -->

                                        <div class="col-12 col-sm-12 col-md-6">
                                            <div class="accordion accordion-flush" id="accordionFlushExamplex">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOnex" aria-expanded="false" aria-controls="flush-collapseOnex">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum ante?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseOnex" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExamplex">
                                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwox" aria-expanded="false" aria-controls="flush-collapseTwox">
                                                            Consectetur adipiscing elit?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseTwox" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExamplex">
                                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThreex" aria-expanded="false" aria-controls="flush-collapseThreex">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum ante?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseThreex" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExamplex">
                                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                                    </div>
                                                </div>
                                            </div> <!-- /.accordion item -->
                                        </div> <!-- /.col -->
                                    </div> <!-- /.row -->
                                </div> <!-- /.faq 2 -->

                                <div id="faq3" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6">
                                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                            Lorem ipsum dolor sit amet?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum ante, suscipit ut ultricies in, sollicitudin eu est. Etiam egestas dolor felis</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum ante?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                            Lorem ipsum dolor sit amet, consectetur ?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                                    </div>
                                                </div>
                                            </div> <!-- /.accordion item -->
                                        </div> <!-- /.col -->

                                        <div class="col-12 col-sm-12 col-md-6">
                                            <div class="accordion accordion-flush" id="accordionFlushExamplex">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOnex" aria-expanded="false" aria-controls="flush-collapseOnex">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum ante?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseOnex" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExamplex">
                                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwox" aria-expanded="false" aria-controls="flush-collapseTwox">
                                                            Consectetur adipiscing elit?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseTwox" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExamplex">
                                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThreex" aria-expanded="false" aria-controls="flush-collapseThreex">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum ante?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseThreex" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExamplex">
                                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                                    </div>
                                                </div>
                                            </div> <!-- /.accordion item -->
                                        </div> <!-- /.col -->
                                    </div> <!-- /.row -->
                                </div> <!-- /.faq 3 -->

                                <div id="faq4" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6">
                                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                            Lorem ipsum dolor sit amet?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum ante, suscipit ut ultricies in, sollicitudin eu est. Etiam egestas dolor felis</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum ante?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                            Lorem ipsum dolor sit amet, consectetur ?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                                    </div>
                                                </div>
                                            </div> <!-- /.accordion item -->
                                        </div> <!-- /.col -->

                                        <div class="col-12 col-sm-12 col-md-6">
                                            <div class="accordion accordion-flush" id="accordionFlushExamplex">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOnex" aria-expanded="false" aria-controls="flush-collapseOnex">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum ante?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseOnex" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExamplex">
                                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwox" aria-expanded="false" aria-controls="flush-collapseTwox">
                                                            Consectetur adipiscing elit?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseTwox" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExamplex">
                                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThreex" aria-expanded="false" aria-controls="flush-collapseThreex">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum ante?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseThreex" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExamplex">
                                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                                    </div>
                                                </div>
                                            </div> <!-- /.accordion item -->
                                        </div> <!-- /.col -->
                                    </div> <!-- /.row -->
                                </div> <!-- /.faq 4 -->

                                <div id="faq5" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6">
                                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                            Lorem ipsum dolor sit amet?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum ante, suscipit ut ultricies in, sollicitudin eu est. Etiam egestas dolor felis</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum ante?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                            Lorem ipsum dolor sit amet, consectetur ?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                                    </div>
                                                </div>
                                            </div> <!-- /.accordion item -->
                                        </div> <!-- /.col -->

                                        <div class="col-12 col-sm-12 col-md-6">
                                            <div class="accordion accordion-flush" id="accordionFlushExamplex">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOnex" aria-expanded="false" aria-controls="flush-collapseOnex">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum ante?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseOnex" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExamplex">
                                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwox" aria-expanded="false" aria-controls="flush-collapseTwox">
                                                            Consectetur adipiscing elit?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseTwox" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExamplex">
                                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThreex" aria-expanded="false" aria-controls="flush-collapseThreex">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum ante?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseThreex" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExamplex">
                                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                                    </div>
                                                </div>
                                            </div> <!-- /.accordion item -->
                                        </div> <!-- /.col -->
                                    </div> <!-- /.row -->
                                </div> <!-- /.faq 5 -->
                            </div> <!-- /.accordion -->
                        </div> <!-- /.container -->
                    </section> <!-- /.hero-faq -->
                </div> <!-- /.section -->

                <div class="section">
                    <section id="hero-article" class="hero-article min-vh-100 d-md-flex align-items-center">
                        <div class="container">
                            <div class="hero-article__heading d-flex w-100 position-relative mb-4">
                                <h3 class="fw-bold fs-5">Now Trending</h3>
                                <div class="hero-article__navigation d-flex gap-2 ms-auto">
                                    <div class="prev hero-article__large-prev d-flex align-items-center justify-content-center rounded-circle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                                        </svg>
                                    </div>

                                    <div class="next hero-article__large-next d-flex align-items-center justify-content-center rounded-circle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                        </svg>
                                    </div>
                                </div>

                                <div class="hero-article__pagination hero-article__pagination-large position-absolute start-0 bottom-0"></div>
                            </div> <!-- /.heading -->

                            <div class="swiper hero-article__swiper-large">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="hero-article__item">
                                            <div class="hero-article__item-image ratio ratio-4x3 position-relative">
                                                <div>
                                                    <img src="./assets/images/DSC03092 1.png" class="w-100 h-100 position-absolute start-0 top-0 bottom-0 end-0" alt="Image">
                                                </div>
                                            </div>

                                            <div class="hero-article__item-date text-xs d-flex gap-2 mt-3">
                                                <span>Head Hunter</span>
                                                <span>&bull;</span>
                                                <span>1 Month Ago</span>
                                            </div>

                                            <h4 class="fw-bold fs-6 mt-2">Peran strategis headhunter dalam rekrutmen karyawan berkualitas</h4>
                                            <div class="text-xs text-muted mt-3">
                                                <p>lit. Phasellus aliquet nibh id iaculis pharetra. Maecenas eleifend sed ex. Donec quis magna sed felis elementum blandit nec quis sem. Maecen.</p>
                                            </div>
                                            <div class="mt-2 d-flex text-xs">
                                                <div class="text-muted">12 Min Read</div>
                                                <div class="ms-auto fw-semibold">
                                                    <a href="#" class="text-dark text-decoration-none">Read Full &rarr;</a>
                                                </div>
                                            </div>
                                        </div> <!-- /.article item -->
                                    </div> <!-- /.slide item -->

                                    <div class="swiper-slide">
                                        <div class="hero-article__item">
                                            <div class="hero-article__item-image ratio ratio-4x3 position-relative">
                                                <div>
                                                    <img src="./assets/images/DSC03092 1.png" class="w-100 h-100 position-absolute start-0 top-0 bottom-0 end-0" alt="Image">
                                                </div>
                                            </div>

                                            <div class="hero-article__item-date text-xs d-flex gap-2 mt-3">
                                                <span>Head Hunter</span>
                                                <span>&bull;</span>
                                                <span>1 Month Ago</span>
                                            </div>

                                            <h4 class="fw-bold fs-6 mt-2">Peran strategis headhunter dalam rekrutmen karyawan berkualitas</h4>
                                            <div class="text-xs text-muted mt-3">
                                                <p>lit. Phasellus aliquet nibh id iaculis pharetra. Maecenas eleifend sed ex. Donec quis magna sed felis elementum blandit nec quis sem. Maecen.</p>
                                            </div>
                                            <div class="mt-2 d-flex text-xs">
                                                <div class="text-muted">12 Min Read</div>
                                                <div class="ms-auto fw-semibold">
                                                    <a href="#" class="text-dark text-decoration-none">Read Full &rarr;</a>
                                                </div>
                                            </div>
                                        </div> <!-- /.article item -->
                                    </div> <!-- /.slide item -->

                                    <div class="swiper-slide">
                                        <div class="hero-article__item">
                                            <div class="hero-article__item-image ratio ratio-4x3 position-relative">
                                                <div>
                                                    <img src="./assets/images/DSC03092 1.png" class="w-100 h-100 position-absolute start-0 top-0 bottom-0 end-0" alt="Image">
                                                </div>
                                            </div>

                                            <div class="hero-article__item-date text-xs d-flex gap-2 mt-3">
                                                <span>Head Hunter</span>
                                                <span>&bull;</span>
                                                <span>1 Month Ago</span>
                                            </div>

                                            <h4 class="fw-bold fs-6 mt-2">Peran strategis headhunter dalam rekrutmen karyawan berkualitas</h4>
                                            <div class="text-xs text-muted mt-3">
                                                <p>lit. Phasellus aliquet nibh id iaculis pharetra. Maecenas eleifend sed ex. Donec quis magna sed felis elementum blandit nec quis sem. Maecen.</p>
                                            </div>
                                            <div class="mt-2 d-flex text-xs">
                                                <div class="text-muted">12 Min Read</div>
                                                <div class="ms-auto fw-semibold">
                                                    <a href="#" class="text-dark text-decoration-none">Read Full &rarr;</a>
                                                </div>
                                            </div>
                                        </div> <!-- /.article item -->
                                    </div> <!-- /.slide item -->

                                    <div class="swiper-slide">
                                        <div class="hero-article__item">
                                            <div class="hero-article__item-image ratio ratio-4x3 position-relative">
                                                <div>
                                                    <img src="./assets/images/DSC03092 1.png" class="w-100 h-100 position-absolute start-0 top-0 bottom-0 end-0" alt="Image">
                                                </div>
                                            </div>

                                            <div class="hero-article__item-date text-xs d-flex gap-2 mt-3">
                                                <span>Head Hunter</span>
                                                <span>&bull;</span>
                                                <span>1 Month Ago</span>
                                            </div>

                                            <h4 class="fw-bold fs-6 mt-2">Peran strategis headhunter dalam rekrutmen karyawan berkualitas</h4>
                                            <div class="text-xs text-muted mt-3">
                                                <p>lit. Phasellus aliquet nibh id iaculis pharetra. Maecenas eleifend sed ex. Donec quis magna sed felis elementum blandit nec quis sem. Maecen.</p>
                                            </div>
                                            <div class="mt-2 d-flex text-xs">
                                                <div class="text-muted">12 Min Read</div>
                                                <div class="ms-auto fw-semibold">
                                                    <a href="#" class="text-dark text-decoration-none">Read Full &rarr;</a>
                                                </div>
                                            </div>
                                        </div> <!-- /.article item -->
                                    </div> <!-- /.slide item -->
                                </div> <!-- /.swiper wrapper -->
                            </div> <!-- /.swiper -->
                        </div> <!-- /.container -->
                    </section> <!-- /.hero article -->
                </div> <!-- /.section -->

                <div class="section">
                    <section id="hero-article" class="hero-article hero-article-small pt-1">
                        <div class="container">
                            <div class="hero-article__heading d-flex w-100 position-relative mb-4">
                                <h3 class="fw-bold fs-5">Short Reads</h3>
                                <div class="hero-article__navigation d-flex gap-2 ms-auto">
                                    <div class="prev hero-article__small-prev d-flex align-items-center justify-content-center rounded-circle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                                        </svg>
                                    </div>

                                    <div class="next hero-article__small-next d-flex align-items-center justify-content-center rounded-circle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                        </svg>
                                    </div>
                                </div>

                                <div class="hero-article__pagination hero-article__pagination-small position-absolute start-0 bottom-0"></div>
                            </div> <!-- /.heading -->

                            <div class="swiper hero-article__swiper-small">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="hero-article__item">
                                            <div class="d-flex">
                                                <div class="hero-article__item-image ratio ratio-16x9 position-relative">
                                                    <div>
                                                        <img src="./assets/images/DSC03092 1.png" class="rounded w-100 h-100 position-absolute start-0 top-0 bottom-0 end-0" alt="Image">
                                                    </div>
                                                </div>
                                            
                                                <div class="hero-article__item-content ps-3">
                                                    <h4 class="fs-6 mb-1 fw-semibold">Effective HR Management</h4>
                                                    <p class="m-0 text-xs text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                </div>
                                            </div> <!-- /.flex -->
                                        </div> <!-- /.article item -->
                                    </div> <!-- /.slide item -->

                                    <div class="swiper-slide">
                                        <div class="hero-article__item">
                                            <div class="d-flex">
                                                <div class="hero-article__item-image ratio ratio-16x9 position-relative">
                                                    <div>
                                                        <img src="./assets/images/DSC03092 1.png" class="rounded w-100 h-100 position-absolute start-0 top-0 bottom-0 end-0" alt="Image">
                                                    </div>
                                                </div>
                                            
                                                <div class="hero-article__item-content ps-3">
                                                    <h4 class="fs-6 mb-1 fw-semibold">Best Practices for Success</h4>
                                                    <p class="m-0 text-xs text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                </div>
                                            </div> <!-- /.flex -->
                                        </div> <!-- /.article item -->
                                    </div> <!-- /.slide item -->

                                    <div class="swiper-slide">
                                        <div class="hero-article__item">
                                            <div class="d-flex">
                                                <div class="hero-article__item-image ratio ratio-16x9 position-relative">
                                                    <div>
                                                        <img src="./assets/images/DSC03092 1.png" class="rounded w-100 h-100 position-absolute start-0 top-0 bottom-0 end-0" alt="Image">
                                                    </div>
                                                </div>
                                            
                                                <div class="hero-article__item-content ps-3">
                                                    <h4 class="fs-6 mb-1 fw-semibold">Insights from HR Experts</h4>
                                                    <p class="m-0 text-xs text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                </div>
                                            </div> <!-- /.flex -->
                                        </div> <!-- /.article item -->
                                    </div> <!-- /.slide item -->

                                    <div class="swiper-slide">
                                        <div class="hero-article__item">
                                            <div class="d-flex">
                                                <div class="hero-article__item-image ratio ratio-16x9 position-relative">
                                                    <div>
                                                        <img src="./assets/images/DSC03092 1.png" class="rounded w-100 h-100 position-absolute start-0 top-0 bottom-0 end-0" alt="Image">
                                                    </div>
                                                </div>
                                            
                                                <div class="hero-article__item-content ps-3">
                                                    <h4 class="fs-6 mb-1 fw-semibold">Insights from HR Experts</h4>
                                                    <p class="m-0 text-xs text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                </div>
                                            </div> <!-- /.flex -->
                                        </div> <!-- /.article item -->
                                    </div> <!-- /.slide item -->

                                    <div class="swiper-slide">
                                        <div class="hero-article__item">
                                            <div class="d-flex">
                                                <div class="hero-article__item-image ratio ratio-16x9 position-relative">
                                                    <div>
                                                        <img src="./assets/images/DSC03092 1.png" class="rounded w-100 h-100 position-absolute start-0 top-0 bottom-0 end-0" alt="Image">
                                                    </div>
                                                </div>
                                            
                                                <div class="hero-article__item-content ps-3">
                                                    <h4 class="fs-6 mb-1">Insights from HR Experts</h4>
                                                    <p class="m-0 text-xs text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                </div>
                                            </div> <!-- /.flex -->
                                        </div> <!-- /.article item -->
                                    </div> <!-- /.slide item -->
                                </div> <!-- /.swiper wrapper -->
                            </div> <!-- /.swiper -->
                        </div> <!-- /.container -->
                    </section> <!-- /.hero article -->
                </div> <!-- /.section -->
            </div>
        </main> <!-- /.main -->

        <footer id="footer" class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="pe-lg-5">
                            <div class="footer-menu-block">
                                <h3 class="fw-bold mb-3 fs-2">Stay Connected</h3>
                                <p class="text-muted">Stay up-to-date with the latest information and career development tips from our newsletter.</p>
                            
                                <form id="newsletter-form" class="newsletter-form">
                                    <div class="position-relative">
                                        <input type="email" class="form-control" placeholder="Enter Email Address ..">
                                        <button type="button" class="btn btn-primary fw-bold position-absolute text-sm">Connect</button>
                                    </div> <!-- /.relative position -->
                                </form> <!-- /.newsletter form -->
                            </div> <!-- /.footer-menu-block -->

                            <div class="footer-menu-block mt-4 mt-lg-5 mb-4 mb-lg-0">
                                <div class="d-flex align-items-center">
                                    <div class="block">
                                        <a href="#" class="block footer-logo">
                                            <img src="./assets/images/logo.png" alt="IniKarir Logo">
                                        </a>
                                    </div>

                                    <div class="block text-xs ps-3">
                                        <p class="text-muted mb-1">Address :</p>
                                        <p class="text-muted mb-0">
                                            Perkantoran Mutiara Bekasi Center
                                            Jl. Jendral Ahmad Yani Kav A No. 16 Kayuringin Jaya,
                                            Bekasi Selatan, 17144, Indonesia
                                        </p>
                                    </div>
                                </div> <!-- /.d-flex -->
                            </div> <!-- /.footer-menu-block -->
                        </div>
                    </div> <!-- /.col-6 -->

                    <div class="col-12 col-lg-6">
                        <div class="row">
                            <div class="col-6 col-lg-4">
                                <div class="footer-menu-block">
                                    <h3 class="fw-bold fs-4 mb-2">Loker</h3>
                                    <ul class="list-unstyled">
                                        <li><a href="#">IT Development</a></li>
                                        <li><a href="#">Finance</a></li>
                                        <li><a href="#">Healthcare</a></li>
                                        <li><a href="#">Sales & Marketing</a></li>
                                        <li><a href="#">Pendidikan</a></li>
                                        <li><a href="#">Design</a></li>
                                        <li><a href="#">Research</a></li>
                                        <li><a href="#">Human Resources</a></li>
                                        <li><a href="#">Freelance</a></li>
                                        <li><a href="#">Loker Lainnya</a></li>
                                    </ul>
                                </div> <!-- /.footer menu block -->
                            </div> <!-- /.col-4 -->

                            <div class="col-6 col-lg-4">
                                <div class="footer-menu-block">
                                    <h3 class="fw-bold fs-4 mb-2">About</h3>
                                    <ul class="list-unstyled">
                                        <li><a href="#">About IniKarir</a></li>
                                        <li><a href="#">History</a></li>
                                        <li><a href="#">IniKarir Team</a></li>
                                        <li><a href="#">Testimonials</a></li>
                                    </ul>
                                </div> <!-- /.footer menu block -->

                                <div class="footer-menu-block">
                                    <h3 class="fw-bold fs-4 mb-2">Article</h3>
                                    <ul class="list-unstyled">
                                        <li><a href="#">News</a></li>
                                        <li><a href="#">Tips</a></li>
                                        <li><a href="#">Events</a></li>
                                    </ul>
                                </div> <!-- /.footer menu block -->
                            </div> <!-- /.col-4 -->

                            <div class="col-6 col-lg-4">
                                <div class="footer-menu-block">
                                    <h3 class="fw-bold fs-4 mb-2">Services</h3>
                                    <ul class="list-unstyled">
                                        <li><a href="#">Employee</a></li>
                                        <li><a href="#">Employer</a></li>
                                        <li><a href="#">Support</a></li>
                                    </ul>
                                </div> <!-- /.footer menu block -->

                                <div class="footer-menu-block">
                                    <h3 class="fw-bold fs-4 mb-2">Contact</h3>
                                    <ul class="list-unstyled">
                                        <li>
                                            <div class="block">Phone | WhatsApp :</div>
                                            <div class="block text-xs">+62-21-2928-5970</div>
                                            <div class="block text-xs">+62-811-3000-232</div>
                                        </li>
                                        <li class="mt-3">
                                            <div class="block">Email :</div>
                                            <div class="block text-xs">info@inikarir.com</div>
                                        </li>
                                    </ul>
                                </div> <!-- /.footer menu block -->
                            </div> <!-- /.col-4 -->
                        </div> <!-- /.row -->
                    </div> <!-- /.col-6 -->
                </div> <!-- /.row -->

                <div class="footer-social d-flex justify-content-md-end mt-4">
                    <ul class="list-unstyled d-flex gap-2 gap-lg-3 align-items-center mb-0">
                        <li class="text-xs">Follow IniKarir</li>
                        <li>
                            <a href="#"><img src="./assets/images/Twitter Icon.png" alt="Twiter Icon"></a>
                        </li>
                        <li>
                            <a href="#"><img src="./assets/images/Instagram Icon.png" alt="Instagram Icon"></a>
                        </li>
                        <li>
                            <a href="#"><img src="./assets/images/Facebook Icon.png" alt="Facebook Icon"></a>
                        </li>
                        <li>
                            <a href="#"><img src="./assets/images/LinkedIn Icon.png" alt="LinkedIn Icon"></a>
                        </li>
                        <li>
                            <a href="#"><img src="./assets/images/Tiktok.png" alt="Tiktok Icon"></a>
                        </li>
                        <li>
                            <a href="#"><img src="./assets/images/Youtube.png" alt="Youtube Icon"></a>
                        </li>
                    </ul>
                </div> <!-- /.tooter social -->

                <div class="footer-copyright mt-5 pt-4 d-flex align-items-center text-muted text-xs">
                    <div>Copyright © 2023 by IniKarir. All rights reserved.</div>
                    <div class="ms-auto">Privacy Policy. Terms & Condition.</div>
                </div> <!-- /.footer copyright -->
            </div> <!-- /.container -->
        </footer> <!-- /.footer -->

        <!-- Video.js -->
        <script src="https://vjs.zencdn.net/8.5.2/video.min.js"></script>
        
        <!-- JavaScripts -->
        <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        <script src="https://unpkg.com/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"></script>
        <script src="./assets/vendor/fullpage/fullpage.min.js"></script>
        <script src="./assets/js/functions.js"></script>
    </body>
</html>
