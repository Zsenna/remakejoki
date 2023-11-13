<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home1.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Online Training</title>
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
    <h1 class="headline-text">AKM Training Center</h1>
    <div id="gap" class="container-fluid"></div>
    <?php

    use Illuminate\Support\Facades\DB;

    $training = DB::select('SELECT itemImg, itemText, itemDesc, headImg FROM mainbox WHERE itemTo = "training"');
    ?>
    <div id="homecon" class="container-fluid">
        @foreach ($training as $trai)
        <div class="container-fluid-1">
            <img src="{{$trai->headImg}}" class="img-fluid" alt="Image Error" style="filter: brightness(50%);">
        </div>
        @endforeach
    </div>
    <div class="container highlight-content">
        <div class="row justify-content-md-center">
            <div class="col-4 highlight-content-1">
                <div class="container" style="height: auto;">
                    <div class="row" style="margin: 1em;">
                        <div class="col" style="height: 100%;"></div>
                        <div class="col"></div>
                    </div>
                    <div class="row" style="margin: 1em;">
                        <div class="col"></div>
                        <div class="col" style="height: 100%;"></div>
                    </div>
                    <div class="row" style="margin: 1em;">
                        <div class="col" style="height: 100%;"></div>
                        <div class="col"></div>
                    </div>
                    <div class="row" style="margin: 1em;">
                        <div class="col"></div>
                        <div class="col" style="height: 100%;"></div>
                    </div>
                </div>

            </div>
            <div class="col highlight-content-2">
                <p><img alt="" src="https://cdn.eraspace.com/pub/media/mageplaza/blog/post/t/e/technology-and-us-scaled.jpg" style="float:left; height:50%; margin:10px; width:50%" /></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras malesuada sapien neque, iaculis vestibulum leo scelerisque in. Praesent a felis varius, laoreet sapien sit amet, accumsan neque. Quisque tempor vehicula pellentesque. Vestibulum ligula ipsum, facilisis ac neque et, tincidunt vulputate augue. Mauris ut lorem pellentesque, tincidunt dolor eu, porttitor ante. Donec interdum vitae metus sed cursus. Nunc gravida ut tortor eget accumsan. Ut tincidunt mi id justo condimentum, ut bibendum nulla elementum. Pellentesque interdum convallis enim, id efficitur risus tincidunt eget. Nulla lorem lorem, faucibus et ullamcorper non, volutpat id est. Nam sem eros, rhoncus in enim in, hendrerit efficitur nisi. Aliquam ac auctor velit, egestas porttitor lorem. Maecenas tristique pellentesque aliquam. Nulla lobortis nulla in elit scelerisque, eget maximus purus venenatis.</p>
                <p>Donec ac diam sit amet velit pharetra accumsan. Etiam condimentum accumsan felis, at ullamcorper tellus ornare quis. Fusce ullamcorper tristique quam, et mollis eros lobortis ut. Nulla lacinia pretium ipsum, in viverra quam ullamcorper eget. Integer sagittis tortor vel ultricies consectetur. Aenean diam nulla, elementum ut elit et, lacinia porttitor nulla. Pellentesque eu lectus et nibh condimentum euismod non a neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer dictum dapibus risus vel vehicula. Nullam mollis interdum malesuada. Nunc feugiat sem in nisl cursus, quis malesuada augue consequat. Mauris ut orci non risus accumsan aliquam ac porttitor quam. Aenean vulputate eleifend nibh, et varius felis tristique nec. Fusce eget eros id nisi convallis congue. Integer nisi odio, sodales sit amet orci id, eleifend tempor neque.</p>
                <p>Nam consectetur, lorem a lobortis feugiat, nulla sem pellentesque lectus, sed molestie ipsum erat id enim. Praesent felis est, tempor in pellentesque quis, consectetur at nisl. Aliquam sagittis erat lacinia erat cursus porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam posuere ante orci, at efficitur elit aliquet vel. Cras nunc neque, imperdiet eget posuere quis, aliquet a lectus. Morbi tristique, ex ut interdum iaculis, massa lectus euismod justo, eu tristique ipsum ex sit amet nibh.</p>

            </div>
        </div>
    </div>

    <div id="homecon3" class="container-fluid" style="margin-top: 4em;">
        <a href="/higlight" class="container-fluid-con">
            <img src="img\picture-energy-saving-services-screen-fix496x661-webp-2.png" class="img-fluid" alt="Image Error">
            <div class="container-fluid-4">
                <p></p>
            </div>
        </a>
        <a href="/higlight" class="container-fluid-con">
            <img src="img\picture-energy-saving-services-screen-fix496x661-webp.png" class="img-fluid" alt="Image Error">
            <div class="container-fluid-4">
                <p></p>
            </div>
        </a>
        <a href="/higlight" class="container-fluid-con">
            <img src="img\picture-energy-saving-services-screen-fix496x661-webp-1.png" class="img-fluid" alt="Image Error">
            <div class="container-fluid-4">
                <p></p>
            </div>
        </a>
        <a href="/higlight" class="container-fluid-con">
            <img src="img\picture-energy-saving-services-screen-fix496x661-webp.png" class="img-fluid" alt="Image Error">
            <div class="container-fluid-4">
                <p></p>
            </div>
        </a>
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
                <a>© 2023</a>
                <a>Imprint</a>
                <a>Data protection</a>
                <a>Terms and conditions</a>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>