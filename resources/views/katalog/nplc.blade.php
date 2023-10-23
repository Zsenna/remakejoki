<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="styleguide.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="navbar.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/katalog.css">
    <title>Mec Lab Non PLC</title>
</head>

<body>
    <div class="main-page">
        <div class="nav">
            <div class="div-navigation-aside">
                <img class="link-logo-blue-svg" src="img/link-logo-blue-svg.png" />
            </div>
            <div class="div-jsx-main">
                <div class="item-margin-wrapper">
                    <div class="item-wrapper">
                        <div class="list-wrapper">
                            <div class="list-2">
                                <div class="item-link">
                                    <div class="text-wrapper-19">Corporate</div>
                                    <!-- Submenu for Corporate -->
                                    <div class="submenu">
                                        <div class="subitem-link">
                                            <div class="text-wrapper-19">Experience</div>
                                            <!-- Grandchildren under "Experience" -->
                                            <div class="grandmenu">
                                                <div class="granditem-link" id="btn_highlight_akm">
                                                    <a class="text-wrapper-19" href="/highlight">Highlight
                                                        AKM</a>
                                                </div>
                                                <div class="granditem-link" id="btn_track_record">
                                                    <a class="text-wrapper-19" href="/trackRecord">Track
                                                        Record</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="subitem-link">
                                            <div class="text-wrapper-19">About AKM</div>
                                            <!-- Grandchildren under "About KKM" -->
                                            <div class="grandmenu">
                                                <div class="granditem-link" id="btn_company_profile">
                                                    <a class="text-wrapper-19" href="/compro">Company
                                                        Profile</a>
                                                </div>
                                                <div class="granditem-link" id="btn_contact">
                                                    <a class="text-wrapper-19" href="/contact">Contact</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-link">
                        <div class="text-wrapper-19">Education</div>
                        <!-- Submenu for Highlight AKM -->
                        <div class="submenu">
                            <div class="subitem-link">
                                <div class="text-wrapper-19">Training</div>
                                <!-- Grandchildren under "Highlight AKM" -->
                                <div class="grandmenu">
                                    <div class="granditem-link" id="btn_training_center">
                                        <a class="text-wrapper-19" href="/training">Training Center</a>
                                    </div>
                                    <div class="granditem-link" id="btn_onsite_training">
                                        <a class="text-wrapper-19" href="/training#">Onsite Training</a>
                                    </div>
                                    <div class="granditem-link" id="btn_online_training">
                                        <a class="text-wrapper-19" href="/training#">Online Training</a>
                                    </div>
                                </div>
                            </div>
                            <div class="subitem-link">
                                <div class="text-wrapper-19">Competition</div>
                                <!-- Grandchildren under "Track Record" -->
                                <div class="grandmenu">
                                    <div class="granditem-link" id="">
                                        <a class="text-wrapper-19" href="/competition">Foto dan Penjelasan
                                            Singkat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="subitem-link">
                                <div class="text-wrapper-19">WORKSHOP & SEMINAR</div>
                                <!-- Grandchildren under "Track Record" -->
                                <div class="grandmenu">
                                    <div class="granditem-link" id="">
                                        <a class="text-wrapper-19" href="/worksem">Foto dan Penjelasan
                                            Singkat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="subitem-link">
                                <div class="text-wrapper-19">PRODUCTS</div>
                                <!-- Grandchildren under "PRODUCTS" -->
                                <div class="grandmenu">
                                    <div class="granditem-link">
                                        <div class="text-wrapper-19">ROBOT</div>
                                        <!-- Great-grandchildren under "ROBOT" -->
                                        <div class="greatgrandmenu">
                                            <div class="granditem-link" id="btn_katalog_1">
                                                <a class="text-wrapper-19" href="/robot">Katalog</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="granditem-link">
                                        <div class="text-wrapper-19">AGV</div>
                                        <div class="greatgrandmenu">
                                            <div class="granditem-link" id="btn_katalog_2">
                                                <a class="text-wrapper-19" href="/agv">Katalog</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="granditem-link">
                                        <div class="text-wrapper-19">PLC TRAINER</div>
                                        <div class="greatgrandmenu">
                                            <div class="granditem-link" id="btn_katalog_3">
                                                <a class="text-wrapper-19" href="/plc">Katalog</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="granditem-link">
                                        <div class="text-wrapper-19">MECLAB NON PLC</div>
                                        <div class="greatgrandmenu">
                                            <div class="granditem-link" id="btn_katalog_4">
                                                <a class="text-wrapper-19" href="/nplc">Katalog</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="item-link">
                        <div class="text-wrapper-19">Industrial</div>
                        <div class="submenu">
                            <div class="subitem-link">
                                <div class="text-wrapper-19" id="btn_si">SI</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="outcon" class="container-fluid">
        <div class="box">
            <img src="img/op4.png" alt="logo">
            <p>Mec Lab Non PLC</p>
            @foreach ($ourproduct as $our)
                <a>{{ $our['itemDesc'] }}</a>
            @endforeach
        </div>
    </div>
</body>

</html>
