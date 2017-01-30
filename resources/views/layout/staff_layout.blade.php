<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <!--Import Google Icon Font-->
    <link href="css/icon.css" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
    @yield('css')
    <style type="text/css">
        header, main, footer {
            padding-left: 300px;
        }

        @media only screen and (max-width : 992px) {
            header, main, footer {
                padding-left: 0;
            }
        }

        section {
            padding: 0% 2%;
        }

        .collapsible-body{
            padding: 0px ;
        }
        .bk{
        background-color: #212121;
        }
        li{
            background-color: rgba(0,0,0,0); ;
        }
        .side-nav a:hover {
         background-color: rgba(0,0,0,0.1) !important;
        }
        .side-nav  {
         background-image: url(img/black.jpg) !important;
        }
    </style>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
    <header>
        <nav>
            <div class="nav-wrapper">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="sass.html">Staff:</a></li>
                    <li><a href="badges.html">Jeson Along</a></li>
                    <li><a href="collapsible.html">Logout</a></li>

                </ul>
            </div>
        </nav>

        <ul id="slide-out" class="side-nav fixed " >

            <li>
            <div class="userView " style="padding: 32px 32px 90px">
                <img class="circle" src="img/PSU2.png">
            </div>
            </li>
            <li><div class="divider"></div></li>
            <ul class="collapsible blue-text">
                <li>
                    <div class="collapsible-header">
                        Organization Information
                    </div>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="organizeation">Information</a></li>
                            <li><a >Add Organization</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header">
                        Member Information
                    </div>
                    <div class="collapsible-body">
                        <ul>
                            <li><a>Information</a></li>
                            <li><a>Add member</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header bk">
                        An Authority's Information
                    </div>

                    <div class="collapsible-body">
                        <ul>
                            <li> 
                                <ul class="collapsible">
                                    <li>
                                        <div class="collapsible-header">
                                            Studen union
                                        </div>
                                        <div class="collapsible-body">
                                            <ul>
                                                <li><a>Information</a></li>
                                                <li><a>Add Student union</a></li>
                                            </ul>
                                        </div>
                                    </li> 
                                </ul>
                            </li>

                            <li> 
                                <ul class="collapsible">
                                    <li>
                                        <div class="collapsible-header">
                                            Student Councill
                                        </div>
                                        <div class="collapsible-body">
                                            <ul>
                                                <li><a>Information</a></li>
                                                <li><a>Add Student Councill</a></li>
                                            </ul>
                                        </div>
                                    </li> 
                                </ul>
                            </li>

                            <li> 
                                <ul class="collapsible">
                                    <li>
                                        <div class="collapsible-header  truncate">
                                            Head of student activity section
                                        </div>
                                        <div class="collapsible-body">
                                            <ul>
                                                <li><a>Information</a></li>
                                                <li><a class="truncate">Add Head of student activity section</a></li>
                                            </ul>
                                        </div>
                                    </li> 
                                </ul>
                            </li>

                            <li> 
                                <ul class="collapsible">
                                    <li>
                                        <div class="collapsible-header  truncate">
                                            Head of student affairs division
                                        </div>
                                        <div class="collapsible-body">
                                            <ul>
                                                <li><a>Information</a></li>
                                                <li><a class="truncate">Add Head of student affairs division</a></li>
                                            </ul>
                                        </div>
                                    </li> 
                                </ul>
                            </li>

                            <li> 
                                <ul class="collapsible">
                                    <li>
                                        <div class="collapsible-header truncate">
                                            Assistant to the president for student development
                                        </div>
                                        <div class="collapsible-body">
                                            <ul>
                                                <li><a>Information</a></li>
                                                <li><a class="truncate">Add Assistant to the president for student development</a></li>
                                            </ul>
                                        </div>
                                    </li> 
                                </ul>
                            </li>

                            <li> 
                                <ul class="collapsible">
                                    <li>
                                        <div class="collapsible-header  truncate">
                                            Vice President for Acdemic affairs for Phuket campus
                                        </div>
                                        <div class="collapsible-body">
                                            <ul>
                                                <li><a>Information</a></li>
                                                <li><a class="truncate">Add Vice President for Acdemic affairs for Phuket campus</a></li>
                                            </ul>
                                        </div>
                                    </li> 
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
            <li><div class="divider"></div></li>
        </ul>


    </header>
    <main>
        @yield('content') 
    </main>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script type="text/javascript">
        $(".button-collapse").sideNav();
    </script>
    @yield('js')
</body>
</html>
