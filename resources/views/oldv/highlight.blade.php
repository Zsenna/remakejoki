<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="globals-high.css" />
    <link rel="stylesheet" href="styleguide-high.css" />
    <link rel="stylesheet" href="style-high.css" />
    <link rel="stylesheet" href="navbar.css" />
</head>

<body>
    <div class="highlight-akm">
        <div class="div">
            <div class="overlap">
                <div class="section">
                    <div class="text-wrapper-3">Highlight AKM</div>
                    <div class="div-header-slider">
                        <div class="div-header-slider-2"></div>
                        <div class="div-card-container">
                            @foreach ($mainbox as $main)
                            <div class="div-header-slider-3">
                                <div class="div-wrapper">
                                    <div class="text-wrapper-2">{{ $main['itemText'] }}</div>
                                </div>
                                <div class="div-divider-xsvco">
                                    <div class="p-copy-text">
                                        <p class="would-you-like-easy">{{ $main['itemDesc'] }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
                <div class="div-fab-bar">
                    <div class="button">
                        <img class="SVG" src="img/svg.svg" />
                        <div class="div-has-update"></div>
                    </div>
                    <img class="img" src="img/button.svg" />
                </div>
            </div>
            <div class="overlap-group">
                <div class="section-2">
                    <div class="group">
                        <div class="div-slick-list-wrapper">
                            <div class="div-slick-list">
                                <div class="div-slick-track">
                                    <div class="link-7">
                                        <div class="div-card-image"><img class="d" src="img/d15000100116717-264x198-jpg.png" /></div>
                                        <div class="p-card-name-azoxw">
                                            <div class="text-wrapper-16">Robot</div>
                                        </div>
                                    </div>
                                    <div class="link-7">
                                        <div class="div-card-image"><img class="d" src="img/d15000100155226-264x198-jpg.png" /></div>
                                        <div class="frame-wrapper">
                                            <div class="frame">
                                                <div class="text-wrapper-16">AGV</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="link-7">
                                        <div class="div-card-image"><img class="d" src="img/d15000100144958-264x198-jpg.png" /></div>
                                        <div class="p-card-name-azoxw-2">
                                            <div class="text-wrapper-16">PLC Trainer</div>
                                        </div>
                                    </div>
                                    <div class="link-7">
                                        <div class="div-card-image"><img class="d" src="img/d15000100115633-264x198-jpg.png" /></div>
                                        <div class="p-card-name-azoxw-3">
                                            <div class="text-wrapper-17">Mec Lab Non PLC</div>
                                        </div>
                                    </div>
                                    <img class="button-SVG" src="img/button-svg-1.svg" />
                                    <img class="button-SVG-2" src="img/button-svg.svg" />
                                </div>
                            </div>
                        </div>
                        <div class="text-wrapper-18">OUR Activities</div>
                    </div>
                    <div class="div-row">
                        <div class="link">
                            <div class="div-accordion">
                                <img class="picture-energy" src="img/picture-energy-saving-services-screen-fix496x661-webp.png" />
                            </div>
                            <div class="text-wrapper-4">Energy Saving Services</div>
                        </div>
                        <div class="link-2">
                            <div class="div-accordion">
                                <img class="picture-energy" src="img/picture-energy-saving-services-screen-fix496x661-webp-2.png" />
                            </div>
                            <div class="text-wrapper-5">Digitalisation</div>
                        </div>
                        <div class="link-3">
                            <div class="link-4">
                                <div class="div-accordion">
                                    <img class="picture-energy" src="img/picture-energy-saving-services-screen-fix496x661-webp-1.png" />
                                </div>
                                <div class="text-wrapper-4">Energy Saving Services</div>
                            </div>
                            <div class="div-col-md">
                                <div class="text-wrapper-6">Digitalisation</div>
                                <div class="p-copytext">
                                    <p class="a-tailor-made-range">
                                        A tailor-made range of services to<br />identify and utilise potential
                                        compressed<br />air savings
                                        sustainably.
                                    </p>
                                </div>
                                <button class="button-2">
                                    <div class="text-wrapper-7">Find out more</div>
                                </button>
                                <div class="text-wrapper-8">Digitalisation</div>
                            </div>
                        </div>
                    </div>
                    <div class="div-row-2">
                        <div class="div-half-width">
                            <div class="text-wrapper-9">Industrial Automation</div>
                            <div class="div-image-text-wrapper">
                                <div class="div-image-text">
                                    <div class="div-image-text-2"></div>
                                    <div class="div-image-text-3">
                                        <div class="p-image-text-teaser">
                                            <div class="text-wrapper-10">PAPSO Brochure</div>
                                        </div>
                                        <div class="p-copytext-margin">
                                            <div class="p-copytext-2">
                                                <p class="text-wrapper-11">Automation systems from a single source</p>
                                            </div>
                                        </div>
                                        <div class="span-text-link">
                                            <div class="text-wrapper-12">Find out more</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="link-5">
                                <div class="div-image-text">
                                    <div class="div-image-text-4"></div>
                                    <div class="div-image-text-3">
                                        <div class="p-image-text-teaser-2">
                                            <div class="text-wrapper-13">SP2020</div>
                                        </div>
                                        <div class="p-copytext-margin">
                                            <div class="p-copytext-3">
                                                <p class="text-wrapper-11">Products for everyday automation needs</p>
                                            </div>
                                        </div>
                                        <div class="span-text-link">
                                            <div class="text-wrapper-12">Find out more</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="div-half-width-2">
                            <div class="text-wrapper-14">Distributors</div>
                            <div class="link-6">
                                <div class="festo-official"></div>
                                <div class="div-half-width-image">
                                    <div class="p-image-teaser-main">
                                        <div class="text-wrapper-10">Sales Partners</div>
                                    </div>
                                    <div class="p-copytext-4">
                                        <p class="text-wrapper-11">Close to you, close to Festo</p>
                                    </div>
                                    <button class="button-3">
                                        <div class="text-wrapper-15">Find your local Distributor</div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="div-footer">
                    <img class="div-footer-social" src="img/div-footer-social-wlq8h.svg" />
                    <div class="div-footer-links">
                        <div class="div-footer-links-2">
                            <div class="div-footer-links-3">
                                <div class="text-wrapper-19">Highlights</div>
                                <div class="div-2">
                                    <div class="link-8">
                                        <div class="text-wrapper-11">Core product range</div>
                                    </div>
                                    <div class="link-9">
                                        <div class="text-wrapper-11">Online Shop</div>
                                    </div>
                                    <div class="link-10">
                                        <div class="text-wrapper-11">All product categories</div>
                                    </div>
                                    <div class="link-11">
                                        <div class="text-wrapper-11">Southeast Asia Selected Products</div>
                                    </div>
                                </div>
                            </div>
                            <div class="div-footer-links-3">
                                <div class="text-wrapper-20">Contact</div>
                                <div class="div-2">
                                    <div class="link-12">
                                        <div class="text-wrapper-21">Get in touch</div>
                                    </div>
                                    <div class="link-12">
                                        <div class="text-wrapper-11">Press portal</div>
                                    </div>
                                    <div class="link-12">
                                        <div class="text-wrapper-11">Distributors</div>
                                    </div>
                                    <div class="link-13">
                                        <div class="text-wrapper-11">Help and Support</div>
                                    </div>
                                </div>
                            </div>
                            <div class="div-footer-links-4">
                                <div class="text-wrapper-19">Industry segments</div>
                                <div class="div-2">
                                    <div class="link-14">
                                        <p class="text-wrapper-11">Automotive and tier 1 supplier industry</p>
                                    </div>
                                    <div class="link-15">
                                        <div class="text-wrapper-11">Electronics industry</div>
                                    </div>
                                    <div class="link-16">
                                        <div class="text-wrapper-11">Food processing and packaging</div>
                                    </div>
                                    <div class="link-17">
                                        <p class="text-wrapper-11">Biotech, pharmaceutical and cosmetics industries</p>
                                    </div>
                                    <div class="link-18">
                                        <div class="text-wrapper-11">Chemical industry</div>
                                    </div>
                                    <div class="link-19">
                                        <div class="text-wrapper-11">Water technology</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="div-footer-legal-DP">
                        <div class="div-left-column">
                            <p class="p">© 2023 PT. Festo All rights reserved</p>
                        </div>
                        <div class="list">
                            <div class="overlap-group-2">
                                <div class="item">
                                    <div class="text-wrapper-22">Imprint</div>
                                </div>
                                <div class="link-data-protection-wrapper">
                                    <div class="text-wrapper-22">Data protection</div>
                                </div>
                                <div class="link-terms-and-wrapper">
                                    <div class="text-wrapper-22">Terms and conditions</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <header class="header">
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
                <div class="div-search-field"></div>
            </header>
        </div>
    </div>
</body>

</html>