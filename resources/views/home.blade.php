<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home1.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="\img\link-logo-blue-svg.png" alt="Image Error" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            Corporate
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Experience</a>
                                <ul class="dropdown-menu submenu">
                                    <li><a class="dropdown-item" href="/highlight">Highlight AKM</a></li>
                                    <li><a class="dropdown-item" href="/trackrecord">Track Record</a></li>
                                </ul>
                            </li>

                            <li><a class="dropdown-item" href="#">About AKM</a>
                                <ul class="dropdown-menu submenu">
                                    <li><a class="dropdown-item" href="/compro">Company Profile</a></li>
                                    <li><a class="dropdown-item" href="/contact">Contact</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            Education
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/training">Training</a>
                                <ul class="dropdown-menu submenu">
                                    <li><a class="dropdown-item" href="/center">Training Center</a></li>
                                    <li><a class="dropdown-item" href="/onsite">Onsite Training</a></li>
                                    <li><a class="dropdown-item" href="/online">Online Training</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="/competition">competition</a>
                            </li>
                            <li><a class="dropdown-item" href="/worksem">Workshop <br>& Seminar</a>
                            </li>
                            <li><a class="dropdown-item" href="/product">Product</a>
                                <ul class="dropdown-menu submenu">
                                    <li><a class="dropdown-item" href="/robot">Robot</a>

                                    </li>
                                    <li><a class="dropdown-item" href="/agv">AGV</a>

                                    </li>
                                    <li><a class="dropdown-item" href="/plc">PLC Trainer</a>

                                    </li>
                                    <li><a class="dropdown-item" href="/nplc">Mec Lab non PLC</a>

                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            Industrial
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">SI</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="gap" class="container-fluid"></div>
    <?php

    use Illuminate\Support\Facades\DB;

    $mainbox =
        DB::select('SELECT headImg, itemImg, itemText, itemDesc, mainbox_id FROM mainbox WHERE itemTo = "mainp"');
    ?>

    <div id="homecon" class="container-fluid">
        <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="container-fluid-1">
                <!-- <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div> -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img\picture-electric-automation-seamless-connectivity-screen-fix18.png" class="img-fluid" alt="">
                        <div class="container-fluid">
                            <div class="container-fluid-top">
                                <h4>lorem ipsum</h4>
                                <p>lorem ipsum</p>
                            </div>
                        </div>
                        <!-- <div class="container-fluid-bot">
                                <a class="btn btn-primary" href="#" role="button">Find Out More</a>
                            </div> -->
                    </div>
                    @foreach($mainbox as $main)
                    <div class="carousel-item">
                        <img src="{{$main->headImg}}" class="img-fluid" alt="">
                        <div class="container-fluid">
                            <div class="container-fluid-top">
                                <h4>{{ $main->itemText}}</h4>
                                <p>{{ strip_tags($main->itemDesc)}}</p>
                            </div>
                        </div>
                        <!-- <div class="container-fluid-bot">
                                <a class="btn btn-primary" href="#" role="button">Find Out More</a>
                            </div> -->
                    </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    </div>

    <!-- <div id="homecon2" class="container-fluid">
        <h2 class="tittle">HIGHLIGHT</h2>
        <a href="/artikel#home" class="container" style="width: 100%;">
            @foreach ($mainbox as $main)
            <div class="row mb-3">
                <div class="col">
                    <img src="{{$main->itemImg}}" class="img-fluid" alt="Image Error">
                </div>
                <div class="col" style="text-align: left;">
                    <h4>{{$main->itemText}}</h4>
                    <p>{{Strip_tags($main->itemDesc)}}</p>
                </div>
            </div>
            @endforeach
        </a>
    </div> -->
    <div id="homecon3" class="container-fluid" style="margin-top: 2em;">
        <a href="/highlight" class="container-fluid-con">
            <img src="img\picture-energy-saving-services-screen-fix496x661-webp-2.png" class="img-fluid" alt="Image Error">
            <div class="container-fluid-4">
                <p></p>
            </div>
        </a>
        <a href="/highlight" class="container-fluid-con">
            <img src="img\picture-energy-saving-services-screen-fix496x661-webp.png" class="img-fluid" alt="Image Error">
            <div class="container-fluid-4">
                <p></p>
            </div>
        </a>
        <a href="/highlight" class="container-fluid-con">
            <img src="img\picture-energy-saving-services-screen-fix496x661-webp-1.png" class="img-fluid" alt="Image Error">
            <div class="container-fluid-4">
                <p></p>
            </div>
        </a>
        <a href="/highlight" class="container-fluid-con">
            <img src="img\picture-energy-saving-services-screen-fix496x661-webp.png" class="img-fluid" alt="Image Error">
            <div class="container-fluid-4">
                <p></p>
            </div>
        </a>
    </div>
    <div id="homecon4" class="container-fluid">
        <h2 class="tittle">OUR Service</h2>
        <div class="container-fluid-5">
            <div class="container-fluid-5b">
                <a href="/onsite">
                    <div class="container-fluid-51b">
                        <img src="img/bannerslider-sp2020-1800x600-fix444x250-webp.png" class="img-fluid" alt="Image Error">
                        <div class="container-fluid">
                            <h4>Onsite Training</h4>
                            <p>Read More...</p>
                        </div>
                    </div>
                </a>
                <a href="/online">
                    <div class="container-fluid-51b">
                        <img src="img\brochure-2022-papso-en-high-1-fix444x250-webp.png" class="img-fluid" alt="Image Error">
                        <div class="container-fluid">
                            <h4>Online Training</h4>
                            <p>Read More...</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="container-fluid-5a">
                <a href="/center">
                    <img src="img\festo-official-partner-16917c-1-fix952x235-webp.png" class="img-fluid" alt="Image Error">
                    <div class="container-fluid-51a">
                        <h4>Training Center</h4>
                        <p>Read More...</p>
                        <!-- <div class="container-fluid-btn">
                        <a class="btn btn-primary" href="#" role="button">Find Your Local Distributor</a>
                    </div> -->
                    </div>
                </a>
            </div>
        </div>
    </div>

    <section class="slider_container">
        <h2>Our Product</h2>
        <div class="container">
            <div class="swiper card_slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="/robot" class="img_box">
                            <img src="img\op1.png" alt="" />
                            <p>Robot</p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="/agv" class="img_box">
                            <img src="img\op2.png" alt="" />
                            <p>AGV</p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="/plc" class="img_box">
                            <img src="img\op3.png" alt="" />
                            <p>PLC</p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="/nplc" class="img_box">
                            <img src="img\op4.png" alt="" />
                            <p>Mec Lab non PLC</p>
                        </a>
                    </div>
                </div>
                <div class="swiper-button-next" style="color: black;"></div>
                <div class="swiper-button-prev" style="color: black;"></div>
            </div>
        </div>
    </section>
    <div id="footer" class="container-fluid">
        <div class="container-fluid-sos">
            <div class="row">
                <img src="img\div-footer-social-wlq8h.svg" class="img-fluid" alt="Image Error">
            </div>
        </div>
        <div class="container-fluid-mid">
            <div class="container-fluid">
                <h4>Highlight</h4>
                <p>Core product range</p>
                <p>Online shop</p>
                <p>All product categories</p>
                <p>Southeast Asia Selected Products</p>
            </div>
            <div class="container-fluid">
                <h4>Contact</h4>
                <p>Get in touch</p>
                <p>Press portal</p>
                <p>Distributors</p>
                <p>Help and Support</p>
            </div>
            <div class="container-fluid">
                <h4>Industry segments</h4>
                <p>Automotive and tier 1 supplier industry</p>
                <p>Electronics Industry</p>
                <p>Food processing and packaging</p>
                <p>Biotech, pharmaceutical and cosmetics industries</p>
                <p>Chemical industry</p>
                <p>Water technology</p>
            </div>
        </div>
        <div class="container-fluid-bot">
            <div class="container-fluid">
                <a>© 2023 </a>
                <a>Imprint</a>
                <a>Data protection</a>
                <a>Terms and conditions</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>