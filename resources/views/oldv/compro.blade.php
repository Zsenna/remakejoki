<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="globals-compro.css" />
    <link rel="stylesheet" href="styleguide-compro.css" />
    <link rel="stylesheet" href="style-compro.css" />
    <link rel="stylesheet" href="navbar.css" />
</head>

<body>
    <div class="company">
        <div class="div">
            <div class="overlap">
                <div class="section">
                    <div class="div-header-slider">
                        <div class="div-header-slider-2"></div>
                        <div class="div-card-container">
                            <div class="list">
                                <div class="item-margin">
                                    <div class="item"></div>
                                </div>
                                <div class="item-margin">
                                    <div class="item-2"></div>
                                </div>
                                <div class="item-margin">
                                    <div class="item-2"></div>
                                </div>
                                <div class="item-margin">
                                    <div class="item-2"></div>
                                </div>
                                <div class="item-margin">
                                    <div class="item-2"></div>
                                </div>
                                <div class="item-2"></div>
                            </div>
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
                    <div class="text-wrapper-3">Company Profile</div>
                </div>
                <div class="div-fab-bar">
                    <div class="button">
                        <img class="SVG" src="img/svg.svg" />
                        <div class="div-has-update"></div>
                    </div>
                    <img class="img" src="img/button.svg" />
                </div>
            </div>
            <div class="section-2">
                <div class="div-row">
                    <div class="div-half-width">
                        <div class="text-wrapper-4">Industrial Automation</div>
                        <div class="link">
                            <div class="div-image-text">
                                <div class="div-image-text-2"></div>
                                <div class="div-image-text-3">
                                    <div class="p-image-text-teaser">
                                        <div class="text-wrapper-5">PAPSO Brochure</div>
                                    </div>
                                    <div class="p-copytext-margin">
                                        <div class="p-copytext">
                                            <p class="text-wrapper-6">Automation systems from a single source</p>
                                        </div>
                                    </div>
                                    <div class="span-text-link">
                                        <div class="text-wrapper-7">Find out more</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="div-image-text-wrapper">
                            <div class="div-image-text">
                                <div class="div-image-text-4"></div>
                                <div class="div-image-text-3">
                                    <div class="p-image-text-teaser-2">
                                        <div class="text-wrapper-8">SP2020</div>
                                    </div>
                                    <div class="p-copytext-margin">
                                        <div class="p-copytext-2">
                                            <p class="text-wrapper-6">Products for everyday automation needs</p>
                                        </div>
                                    </div>
                                    <div class="span-text-link">
                                        <div class="text-wrapper-7">Find out more</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="link-wrapper">
                        <div class="link-2">
                            <div class="festo-official"></div>
                            <div class="div-half-width-image">
                                <div class="p-image-teaser-main">
                                    <div class="text-wrapper-5">Sales Partners</div>
                                </div>
                                <div class="p-copytext-3">
                                    <p class="text-wrapper-6">Close to you, close to Festo</p>
                                </div>
                                <button class="button-2">
                                    <div class="text-wrapper-9">Find your local Distributor</div>
                                </button>
                            </div>
                        </div>
                    </div>
                    @foreach ($mainbox as $main)
                        <p class="docker-is-a-tool-for">{{ $main['compt'] }}</p>
                    @endforeach
                    <div class="text-wrapper-10">Competition</div>
                </div>
                <div class="div-application">
                    <div class="overlap-group">
                        @foreach ($mainbox as $main)
                            <div class="div-row-2">
                                <div class="div-col-xs">
                                    <div class="text-wrapper-11">{{ $main['itemText'] }}</div>
                                    <div class="docker-is-a-tool-for-wrapper">
                                        <p class="p">{{ $main['itemDesc'] }}</p>
                                    </div>
                                </div>
                                <div class="picture-key-wrapper">
                                    <img class="picture-key"
                                        src="img/picture-key-automation-products-highres-en-1-fix696x391-webp.png" />
                                </div>
                            </div>
                            <div class="text-wrapper-12">Training</div>
                        @endforeach
                    </div>
                </div>
                <div class="div-row-3">
                    <div class="div-half-width-2">
                        <div class="text-wrapper-4">Industrial Automation</div>
                        <div class="link">
                            <div class="div-image-text">
                                <div class="div-image-text-2"></div>
                                <div class="div-image-text-3">
                                    <div class="p-image-text-teaser">
                                        <div class="text-wrapper-5">PAPSO Brochure</div>
                                    </div>
                                    <div class="p-copytext-margin">
                                        <div class="p-copytext">
                                            <p class="text-wrapper-6">Automation systems from a single source</p>
                                        </div>
                                    </div>
                                    <div class="span-text-link">
                                        <div class="text-wrapper-7">Find out more</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="div-image-text-wrapper">
                            <div class="div-image-text">
                                <div class="div-image-text-4"></div>
                                <div class="div-image-text-3">
                                    <div class="p-image-text-teaser-2">
                                        <div class="text-wrapper-8">SP2020</div>
                                    </div>
                                    <div class="p-copytext-margin">
                                        <div class="p-copytext-2">
                                            <p class="text-wrapper-6">Products for everyday automation needs</p>
                                        </div>
                                    </div>
                                    <div class="span-text-link">
                                        <div class="text-wrapper-7">Find out more</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="div-half-width-3">
                        <div class="link-2">
                            <div class="festo-official"></div>
                            <div class="div-half-width-image">
                                <div class="p-image-teaser-main">
                                    <div class="text-wrapper-5">Sales Partners</div>
                                </div>
                                <div class="p-copytext-3">
                                    <p class="text-wrapper-6">Close to you, close to Festo</p>
                                </div>
                                <button class="button-2">
                                    <div class="text-wrapper-9">Find your local Distributor</div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="text-wrapper-13">WorkShop</div>
                </div>
            </div>
            <footer class="footer">
                <div class="div-footer">
                    <img class="div-footer-social" src="img/div-footer-social-wlq8h.svg" />
                    <div class="div-footer-links">
                        <div class="div-footer-links-2">
                            <div class="div-footer-links-3">
                                <div class="text-wrapper-14">Highlights</div>
                                <div class="div-2">
                                    <div class="link-3">
                                        <div class="text-wrapper-6">Core product range</div>
                                    </div>
                                    <div class="link-4">
                                        <div class="text-wrapper-6">Online Shop</div>
                                    </div>
                                    <div class="link-5">
                                        <div class="text-wrapper-6">All product categories</div>
                                    </div>
                                    <div class="link-6">
                                        <div class="text-wrapper-6">Southeast Asia Selected Products</div>
                                    </div>
                                </div>
                            </div>
                            <div class="div-footer-links-3">
                                <div class="text-wrapper-15">Contact</div>
                                <div class="div-2">
                                    <div class="link-7">
                                        <div class="text-wrapper-16">Get in touch</div>
                                    </div>
                                    <div class="link-7">
                                        <div class="text-wrapper-6">Press portal</div>
                                    </div>
                                    <div class="link-7">
                                        <div class="text-wrapper-6">Distributors</div>
                                    </div>
                                    <div class="link-8">
                                        <div class="text-wrapper-6">Help and Support</div>
                                    </div>
                                </div>
                            </div>
                            <div class="div-footer-links-4">
                                <div class="text-wrapper-14">Industry segments</div>
                                <div class="div-2">
                                    <div class="link-9">
                                        <p class="text-wrapper-6">Automotive and tier 1 supplier industry</p>
                                    </div>
                                    <div class="link-10">
                                        <div class="text-wrapper-6">Electronics industry</div>
                                    </div>
                                    <div class="link-11">
                                        <div class="text-wrapper-6">Food processing and packaging</div>
                                    </div>
                                    <div class="link-12">
                                        <p class="text-wrapper-6">Biotech, pharmaceutical and cosmetics industries</p>
                                    </div>
                                    <div class="link-13">
                                        <div class="text-wrapper-6">Chemical industry</div>
                                    </div>
                                    <div class="link-14">
                                        <div class="text-wrapper-6">Water technology</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="div-footer-legal-DP">
                        <div class="div-left-column">
                            <p class="text-wrapper-17">© 2023 PT. Festo All rights reserved</p>
                        </div>
                        <div class="overlap-group-wrapper">
                            <div class="overlap-group-2">
                                <div class="link-imprint-wrapper">
                                    <div class="text-wrapper-18">Imprint</div>
                                </div>
                                <div class="link-data-protection-wrapper">
                                    <div class="text-wrapper-18">Data protection</div>
                                </div>
                                <div class="link-terms-and-wrapper">
                                    <div class="text-wrapper-18">Terms and conditions</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
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
