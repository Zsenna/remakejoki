<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/product.css">
    <link rel="stylesheet" href="../css/navfoot.css">
    <link rel="stylesheet" href="css/home1.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Products</title>
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
    <!-- Body 1 -->
    <?php

    use Illuminate\Support\Facades\DB;

    $nplc =
        DB::select('SELECT itemImg, itemText, itemDesc, id  FROM product WHERE itemTo = "nplc"');
    ?>
    <div id="topoutcon" class="container">
        <img src="../img/Rectangle 1.png" alt="image error" class="img-fluid">
        <div class="container-fluid-about">
            <div class="container-fluid-top">
                <h4 class="tittle">Mec Lab non PLC</h4>
                <p class="p"> Docker is a tool for running applications and services in small, light-weight "containers" which
                    do not interfere with your local machine's installed software or configuration. This means you
                    don't have to worry about configuring or setting up complicated development tools such as web
                    servers and databases on your local machine.</p>
                <p class="p"> Which do not interfere with your local machine's installed software or configuration. This means
                    you don't have to worry about configuring or setting up complicated development tools such as web
                    servers and databases on your local machine.</p>
            </div>
        </div>
    </div>
    <h1>Products</h1>
    <div id="outcon" class="container-fluid">
        <div class="container">
            @foreach ($nplc as $np)
            <a href="{{url('Product-nplc/' .$np->id)}}" class="box">
                <img src="{{$np->itemImg}}" class="img-fluid" alt="Image Error">
                <h4 class="card-title" style="color: white;">{{$np->itemText}}</h4>
                <p style="color: white;">{{Strip_tags($np->itemText)}}</p>
            </a>
            @endforeach
        </div>
    </div>

    <!-- Body 2 -->
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
                <img src="..\img\div-footer-social-wlq8h.svg" class="img-fluid" alt="Image Error">
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
                <a>© 2023</a>
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