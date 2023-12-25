<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/content.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Content</title>
</head>

<body>
    <style>
        /* navbar */
        .navbar .navbar-brand {
            margin-left: 3em;
            margin-right: 6em;
        }

        .navbar .navbar-nav {
            gap: 1.5em;
        }

        .navbar a {
            text-align: left;
            font-family: "Trebuchet MS";
            font-size: 18px;
            font-style: normal;
            font-weight: 400;
        }

        .dropdown-menu li {
            position: relative;
        }

        .dropdown-menu .submenu {
            display: none;
            position: absolute;
            left: 100%;
            top: -6px;
        }

        .dropdown-menu>li:hover>.submenu {
            display: block;
        }

        #gap {
            background-color: #0091dc;
            width: 100%;
            height: 2.5em;
        }

        /* footer */
        #footer {
            padding: 0% 14.5%;
            margin-top: 2em;
            flex-direction: column;
            display: flex;
            align-items: center;
            background-color: #f2f3f5;
            width: 100%;
            height: 100%;
        }

        #footer .container-fluid-sos {
            display: flex;
            justify-content: center;
            margin-bottom: 2em;
            width: 100%;
        }

        #footer .container-fluid-mid {
            flex-direction: row;
            display: flex;
            justify-content: center;
            margin-bottom: 2em;
            width: 100%;
        }

        #footer .container-fluid-mid .container-fluid {
            text-align: left;
        }

        #footer .container-fluid-bot {
            flex-direction: column;
            display: flex;
            justify-content: center;
            text-align: left;
            margin-bottom: 2em;
            width: 100%;
        }

        #footer a {
            color: rgba(0, 0, 0, 0.29);
            text-align: center;
            font-family: "Trebuchet MS";
            font-size: 11px;
            font-style: normal;
            font-weight: 400;
            padding-right: 2em;
        }

        @media (max-width: 1000px) {

            /* navbar */
            .navbar .navbar-brand {
                margin-left: 0em;
            }

            .navbar a {
                text-align: center;
                font-family: "Trebuchet MS";
                font-size: 13px;
                font-style: normal;
                font-weight: 400;
            }

            #gap {
                height: 1em;
            }

            /* footer */
            #footer {
                padding: 0% 5%;
                margin-top: 1em;
                flex-direction: column;
                display: flex;
                align-items: center;
                background-color: #f2f3f5;
                width: 100%;
                height: 100%;
            }

            #footer .container-fluid-sos {
                display: flex;
                justify-content: center;
                margin-bottom: 2em;
                width: 200%;
            }

            #footer .container-fluid-mid {
                flex-direction: row;
                display: flex;
                justify-content: center;
                margin-bottom: 2em;
                width: 100%;
            }

            #footer .container-fluid-mid .container-fluid {
                text-align: left;
            }

            #footer h4 {
                font-family: "Trebuchet MS";
                font-size: 17px;
                font-style: normal;
                font-weight: 700;
            }

            #footer p {
                font-family: "Trebuchet MS";
                font-size: 13px;
                font-style: normal;
                font-weight: 400;
            }

            #footer .container-fluid-bot {
                display: flex;
                justify-content: center;
                margin-bottom: 2em;
                width: 100%;
            }

            #footer a {
                color: rgba(0, 0, 0, 0.29);
                text-align: center;
                font-family: "Trebuchet MS";
                font-size: 11px;
                font-style: normal;
                font-weight: 400;
                padding-right: 1em;
            }
        }
    </style>
    <!-- Navbar -->
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
    <div id="gap" class="container-fluid" style="background-color: #0091dc; width: 100%; height: 2.5em;"></div>
    <!-- Body -->
    <?php

    use Illuminate\Support\Facades\DB;

    $highlight =
        DB::select('SELECT itemImg, itemText, itemDesc, headImg, mainbox_id FROM mainbox WHERE itemTo = "highl"');
    ?>
    <div id="content" class="container-fluid">
        @foreach ($highlight as $high)
        <div class="row" style="padding-left: 5em; padding-top: 2em;">
            <img class="img-fluid" alt="" src="{{$high->itemImg}}" style="width: 30%; height :30%" />
            <p style="padding-top: 1em; padding-left: 0.8em;">{{Strip_tags($high->itemDesc)}}</p>
        </div>
        @endforeach
    </div>

    <!-- Footer -->
    </div>

    <div id="footer" class="container-fluid" style=" padding: 0% 14.5%; margin-top: 2em; flex-direction: column; display: flex; align-items: center; background-color: #f2f3f5; width: 100%; height: 100%;">
        <div class="container-fluid-sos" style="display: flex; justify-content: center; margin-bottom: 2em; width: 100%;">
            <div class="row">
                <!-- <img src="img/div-footer-social-wlq8h.svg" class="img-fluid" alt="Image Error"> -->
            </div>
        </div>
        <div class="container-fluid-mid" style="flex-direction: row; display: flex; justify-content: center; margin-bottom: 2em; width: 100%;">
            <div class="container-fluid" style="text-align: left;">
                <h4>Highlight</h4>
                <p>Core product range</p>
                <p>Online shop</p>
                <p>All product categories</p>
                <p>Southeast Asia Selected Products</p>
            </div>
            <div class="container-fluid" style="text-align: left;">
                <h4>Contact</h4>
                <p>Get in touch</p>
                <p>Press portal</p>
                <p>Distributors</p>
                <p>Help and Support</p>
            </div>
            <div class="container-fluid" style="text-align: left;">
                <h4>Industry segments</h4>
                <p>Automotive and tier 1 supplier industry</p>
                <p>Electronics Industry</p>
                <p>Food processing and packaging</p>
                <p>Biotech, pharmaceutical and cosmetics industries</p>
                <p>Chemical industry</p>
                <p>Water technology</p>
            </div>
        </div>
        <div class="container-fluid-bot" style=" flex-direction: column; display: flex; justify-content: center; text-align: left; margin-bottom: 2em; width: 100%;">
            <div class="container-fluid">
                <a>© 2023</a>
                <a>Imprint</a>
                <a>Data protection</a>
                <a>Terms and conditions</a>
            </div>
        </div>
    </div>
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>