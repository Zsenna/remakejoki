<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Artikel</title>
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
    <!-- <div id="homecon" class="container-fluid">
        <div class="container-fluid-1">
            <img src="img\picture-electric-automation-seamless-connectivity-screen-fix18.png" class="img-fluid" alt="Image Error">
            <div class="popup-card">
                <div class="updown">
                    <h5 style="padding-bottom: .2em;">About us</h4>
                        <p class="headtext">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis facilis tempore id, voluptatum dolor magnam eaque est, illo impedit doloremque ratione officia explicabo labore? Vero placeat quos hic quasi minima.</p>
                </div>
            </div>

        </div>
    </div> -->
    <div id="artikel" class="container-fluid">
        <?php

        use Illuminate\Support\Facades\DB;

        $highlight = DB::select('SELECT itemImg, itemText, itemDesc FROM mainbox WHERE itemTo = "highl"');
        $compro =
            DB::select('SELECT itemImg, itemText, itemDesc FROM mainbox WHERE itemTo = "comprofile"');
        $training = DB::select('SELECT itemImg, itemText, itemDesc FROM mainbox WHERE itemTo = "training"');
        $product =
            DB::select('SELECT itemImg, itemText, itemDesc FROM mainbox WHERE itemTo = "prod"');
        $mainpage =
            DB::select('SELECT itemImg, itemText, itemDesc FROM mainbox WHERE itemTo = "mainp"');
        $workshop =
            DB::select('SELECT itemImg, itemText, itemDesc FROM mainbox WHERE itemTo = "workshop"');
        $trackrecord = DB::select('SELECT itemImg, itemText, itemDesc FROM mainbox WHERE itemTo = "trackrecord"');
        $competition = DB::select('SELECT itemImg, itemText, itemDesc FROM mainbox WHERE itemTo = "competition"');
        ?>

        <div id="workshop" class="container-fluid">
            <h2>WORKSHOP</h2>
            @foreach ($workshop as $work)
            <div class="container" style="width: 100%;">
                <div class="row">
                    <div class="col">
                        <h4>{{$work->itemText}}</h4>
                        <img src="{{$work->itemImg}}" class="img-fluid" alt="Image Error">
                        <p>{{Strip_tags($work->itemDesc)}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div id="highlight" class="container-fluid">
            <h2>HIGHLIGHT</h2>
            @foreach ($highlight as $high)
            <div class="container" style="width: 100%;">
                <div class="row">
                    <div class="col">
                        <h4>{{$high->itemText}}</h4>
                        <img src="{{$high->itemImg}}" class="img-fluid" alt="Image Error">
                        <p>{{Strip_tags($high->itemDesc)}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div id="training" class="container-fluid">
            <h2>TRAINING</h2>
            @foreach ($training as $trai)
            <div class="container" style="width: 100%;">
                <div class="row">
                    <div class="col">
                        <h4>{{$trai->itemText}}</h4>
                        <img src="{{$trai->itemImg}}" class="img-fluid" alt="Image Error">
                        <p>{{Strip_tags($trai->itemDesc)}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div id="product" class="container-fluid">
            <h2>PRODUCT</h2>
            @foreach ($product as $prod)
            <div class="container" style="width: 100%;">
                <div class="row">
                    <div class="col">
                        <h4>{{$prod->itemText}}</h4>
                        <img src="{{$prod->itemImg}}" class="img-fluid" alt="Image Error">
                        <p>{{Strip_tags($prod->itemDesc)}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div id="compro" class="container-fluid">
            <h2>COMPANY PROFILE</h2>
            @foreach ($compro as $com)
            <div class="container" style="width: 100%;">
                <div class="row">
                    <div class="col">
                        <h4>{{$com->itemText}}</h4>
                        <img src="{{$com->itemImg}}" class="img-fluid" alt="Image Error">
                        <p>{{Strip_tags($com->itemDesc)}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div id="home" class="container-fluid">
            <h2>HOME</h2>
            @foreach ($mainpage as $mainp)
            <div class="container" style="width: 100%; ">
                <div class="row">
                    <div class="col">
                        <h4>{{$mainp->itemText}}</h4>
                        <img src="{{$mainp->itemImg}}" class="img-fluid" alt="Image Error">
                        <p>{{Strip_tags($mainp->itemDesc)}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- <div id="homecon3" class="container-fluid">
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
    <div id="homecon1" class="container-fluid">
        <h2>Our Product</h2>
        <div class="container-fluid-2">
            <div class="container-fluid">
                <a href="/robot">
                    <img src="img\op1.png" class="img-fluid" alt="Image Error">
                    <p>Robot</p>
                </a>
            </div>
            <div class="container-fluid">
                <a href="/agv">
                    <img src="img\op2.png" class="img-fluid" alt="Image Error">
                    <p>AGV</p>
                </a>
            </div>
            <div class="container-fluid">
                <a href="/plc">
                    <img src="img\op3.png" class="img-fluid" alt="Image Error">
                    <p>PLC</p>
                </a>
            </div>
            <div class="container-fluid">
                <a href="/nplc">
                    <img src="img\op4.png" class="img-fluid" alt="Image Error">
                    <p>Mec Lab non PLC</p>
                </a>
            </div>
        </div>
    </div> -->
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
    <script src="js/script.js"></script>
</body>

</html>