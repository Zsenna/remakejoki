<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</body>

</html>