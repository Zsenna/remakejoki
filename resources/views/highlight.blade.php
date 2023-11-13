<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home1.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Highlight</title>
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
    <h1 class="headline-text">Highlight</h1>
    <div id="gap" class="container-fluid"></div>
    <?php

    use Illuminate\Support\Facades\DB;

    $highlight = DB::select('SELECT headImg, itemImg, itemText, mainbox_id FROM mainbox WHERE itemTo = "highl"');
    ?>
    <div id="homecon" class="container-fluid">
        @foreach ($highlight as $high)
        <div class="container-fluid-1">
            <img src="{{$high->headImg}}" class="img-fluid" alt="" style="filter: brightness(50%);">
        </div>
        @endforeach
    </div>
    <div class="container-fluid-c">

    </div>
    <div id="outcon" class="container-fluid">
        <div class="container">
            @foreach ($highlight as $high)
            <a href="{{url('contenthigh/' .$high->mainbox_id)}}" class="box">
                <img src="{{$high->itemImg}}" class="img-fluid" alt="Image Error">
                <p>{{Strip_tags($high->itemText)}}</p>
            </a>
            @endforeach
        </div>
    </div>
    <a href="/center" style="text-decoration: none; color: black;"></a>
    <div id="homecon2" class="container-fluid">
        <?php

        $training = DB::select('SELECT itemImg, itemText, itemDesc FROM mainbox WHERE itemTo = "training"');
        ?>

        <h2 class="tittle">Training</h2>
        <a href="/artikel#compro" class="container" style="width: 100%;">
            @foreach ($training as $trai)
            <div class="row">
                <div class="col">
                    <img src="{{$trai->itemImg}}" class="img-fluid" alt="Image Error">
                </div>
                <div class="col" style="text-align: left;">
                    <h4>{{$trai->itemText}}</h4>
                    <p>{{Strip_tags($trai->itemDesc)}}</p>
                </div>
            </div>
            @endforeach
        </a>
    </div>
    </a>
    <a href="/competition" style="text-decoration: none; color: black;"></a>
    <div id="homecon4" class="container-fluid">
        <div class="container-fluid-title">
            <h2 class="tittle">Competition</h2>
        </div>
        <div class="container-fluid-5">
            <div class="container-fluid-5b">
                <div class="container-fluid-51b">
                    <img src="img\bannerslider-sp2020-1800x600-fix444x250-webp.png" class="img-fluid" alt="Image Error">
                    <div class="container-fluid">
                        <h4>lorem ipsum</h4>
                        <p>lorem ipsum</p>
                    </div>
                </div>
                <div class="container-fluid-51b">
                    <img src="img\brochure-2022-papso-en-high-1-fix444x250-webp.png" class="img-fluid" alt="Image Error">
                    <div class="container-fluid">
                        <h4>lorem ipsum</h4>
                        <p>lorem ipsum</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid-5a">
                <img src="img\festo-official-partner-16917c-1-fix952x235-webp.png" class="img-fluid" alt="Image Error">
                <div class="container-fluid-51a">
                    <h4>lorem ipsum</h4>
                    <p>lorem ipsum</p>
                    <!-- <div class="container-fluid-btn">
                        <a class="btn btn-primary" href="#" role="button">Find Your Local Distributor</a>
                    </div> -->

                </div>
            </div>
        </div>
    </div>
    </a>
    <div id="homecon4" class="container-fluid">
        <?php

        $workshop =
            DB::select('SELECT itemImg, itemText, itemDesc FROM mainbox WHERE itemTo = "workshop"');
        ?>
        <a href="/worksem" style="text-decoration: none; color: black;">
            <div class="container-fluid-title">
                <h2 class="tittle">WORKSHOP</h2>
            </div>
            <div class="container-fluid-5">
                @foreach($workshop as $work)
                <div class="container-fluid-5b">
                    <div class="container-fluid-51b">
                        <img src="{{$work->itemImg}}" class="img-fluid" alt="Image Error">
                        <div class="container-fluid">
                            <h4>{{$work->itemText}}</h4>
                            <p>{{Strip_tags($work->itemDesc)}}</p>
                        </div>
                    </div>
                    <div class="container-fluid-51b">
                        <img src="img\brochure-2022-papso-en-high-1-fix444x250-webp.png" class="img-fluid" alt="Image Error">
                        <div class="container-fluid">
                            <h4>lorem ipsum</h4>
                            <p>lorem ipsum</p>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="container-fluid-5a">
        </a>
        @foreach($workshop as $work)
        <img src="img\festo-official-partner-16917c-1-fix952x235-webp.png" class="img-fluid" alt="Image Error">
        <div class="container-fluid-51a">
            <h4>{{$work->itemText}}</h4>
            <p>{{Strip_tags($work->itemDesc)}}</p>
            <!-- <div class="container-fluid-btn">
                            <a class="btn btn-primary" href="#" role="button">Find Your Local Distributor</a>
                        </div> -->

        </div>
        @endforeach
    </div>
    </div>
    </div>
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
</body>

</html>