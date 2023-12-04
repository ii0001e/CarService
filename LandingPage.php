<?php
require_once ('conf.php');
global $yhendus;

?>

<head>
    <meta charset="utf-8">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/landingPageCarService.css">
    <link rel="stylesheet" type="text/css" href="css/cssForForm.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <title>Auto-service</title>
</head>


<body>



<div id="header" class="container-fluid">
    <div class="container">
        <div class="col-sm-4">
            <img id="logo" src="http://uupload.ir/files/x1gq_logo.png" alt="Logo">
        </div>
        <div class="col-sm-4"></div>
        <div class="col-sm-4 text-right">
            <div id="register" class="item">

            </div>
            <div id="contact" class="item">
                Call 352-555-4445
            </div>
        </div>
    </div>
</div>

<nav id="navbar" class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
    <div class="container">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
                <li class="active">
                    <a href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#action">Action</a>
                        </li>
                        <li>
                            <a href="#anotheraction">Another action</a>
                        </li>
                        <li>
                            <a href="#sthelsehere">Something else here</a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="#seperatedlink">Separated link</a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="#otherseperatedlink">One more separated link</a>
                        </li>
                    </ul>
                </li>
                </li>
                <li>
                    <a href="#community">Community</a>
                </li>
                <li>
                    <a href="#appointment">Appointment</a>
                </li>
                <li>
                    <a href="#aboutus">About Us</a>
                </li>
            </ul>
            <form class="navbar-form navbar-right col-sm-4">
                <input id="search-input" type="text" class="form-control" placeholder="Search">
                <button id="search-button" type="submit" class="btn btn-danger">Submit</button>
            </form>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="container">
        <div id="first-row" class="row">
            <div class="col-sm-8">
                <div id="slideshow1" class="carousel slide" data-ride="carousel" data-interval="2000">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#slideshow1" data-slide-to="0" class="active"></li>
                        <li data-target="#slideshow1" data-slide-to="1"></li>
                        <li data-target="#slideshow1" data-slide-to="2"></li>
                        <li data-target="#slideshow1" data-slide-to="3"></li>
                        <li data-target="#slideshow1" data-slide-to="4"></li>
                        <li data-target="#slideshow1" data-slide-to="5"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="http://uupload.ir/files/byqp_car-red.jpeg">
                        </div>

                        <div class="item">
                            <img src="http://uupload.ir/files/tlm_car-blue.jpeg">
                        </div>

                        <div class="item">
                            <img src="http://uupload.ir/files/cy7u_car-silver.jpeg">
                        </div>

                        <div class="item">
                            <img src="http://uupload.ir/files/p377_car-bmw-m3.jpg">
                        </div>

                        <div class="item">
                            <img src="http://uupload.ir/files/kzev_car-jaguar.jpg">
                        </div>

                        <div class="item">
                            <img src="http://uupload.ir/files/1j91_car-mercedence.jpg">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#slideshow1" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#slideshow1" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>



                    </div>
                </div>
                <div id="ring-advertise">
                    <img id="ring-advertise-img" class="border" src="http://uupload.ir/files/192o_ring.jpg">
                    <button class="btn btn-danger">Order New Rings!</button>
                </div>
            </div>


        <div class="row">
            <div class="col-sm-12">
                <div id="slideshow2" class="carousel slide well" data-ride="carousel" data-interval="2500">

                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#slideshow2" data-slide-to="0" class="active"></li>
                        <li data-target="#slideshow2" data-slide-to="1"></li>
                    </ol>

                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-sm-4">
                                    <a href="#x">
                                        <img src="http://uupload.ir/files/byqp_car-red.jpeg" alt="Image" class="img-responsive">
                                    </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="#x">
                                        <img src="http://uupload.ir/files/tlm_car-blue.jpeg" alt="Image" class="img-responsive">
                                    </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="#x">
                                        <img src="http://uupload.ir/files/cy7u_car-silver.jpeg" alt="Image" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-4">
                                    <a href="#x">
                                        <img src="http://uupload.ir/files/p377_car-bmw-m3.jpg" alt="Image" class="img-responsive">
                                    </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="#x">
                                        <img src="http://uupload.ir/files/kzev_car-jaguar.jpg" alt="Image" class="img-responsive">
                                    </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="#x">
                                        <img src="http://uupload.ir/files/1j91_car-mercedence.jpg" alt="Image" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#slideshow2" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#slideshow2" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        </div>
    </div>

<!--form to check in-->
<div class='container'>
    <div class='panel panel-primary dialog-panel'>
        <div class='panel-heading'>
            <h5>Reservation Form Example </h5>
        </div>
        <div class='panel-body'>
            <form class='form-horizontal' role='form'>
                <div class='form-group'>
                    <label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'>Accomodation</label>
                    <div class='col-md-2'>
                        <select class='form-control' id='id_accomodation'>
                            <option>RV</option>
                            <option>Tent</option>
                            <option>Cabin/Lodging</option>
                        </select>
                    </div>
                </div>
                <div class='form-group'>
                    <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Name</label>
                    <div class='col-md-8'>
                        <div class='col-md-2'>
                            <div class='form-group internal'>
                                <select class='form-control' id='id_title'>
                                    <option>Mr</option>
                                    <option>Ms</option>
                                    <option>Mrs</option>
                                    <option>Miss</option>
                                    <option>Dr</option>
                                </select>
                            </div>
                        </div>
                        <div class='col-md-3 indent-small'>
                            <div class='form-group internal'>
                                <input class='form-control' id='id_first_name' placeholder='First Name' type='text'>
                            </div>
                        </div>
                        <div class='col-md-3 indent-small'>
                            <div class='form-group internal'>
                                <input class='form-control' id='id_last_name' placeholder='Last Name' type='text'>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='form-group'>

                    <div class='col-md-8'>

                        <div class='col-md-3 indent-small'>
                            <div class='form-group internal'>

                            </div>
                        </div>
                    </div>
                </div>
                <div class='form-group'>
                    <label class='control-label col-md-2 col-md-offset-2' for='id_email'>Contact</label>
                    <div class='col-md-6'>
                        <div class='form-group'>
                            <div class='col-md-11'>
                                <input class='form-control' id='id_email' placeholder='E-mail' type='text'>
                            </div>
                        </div>
                        <div class='form-group internal'>
                            <div class='col-md-11'>
                                <input class='form-control' id='id_phone' placeholder='Phone: (xxx) - xxx xxxx' type='text'>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='form-group'>
                    <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>Checkin</label>
                    <div class='col-md-8'>
                        <div class='col-md-6'>
                            <div class='form-group internal input-group'>
                                <input class='form-control datepicker' id='id_checkin'>
                                <span class='input-group-addon'>
                    <i class='glyphicon glyphicon-calendar'></i>
                  </span>
                            </div>
                        </div>


                    </div>
                </div>
                <div class='form-group'>
                    <label class='control-label col-md-2 col-md-offset-2' for='id_equipment'>Equipment type</label>
                    <div class='col-md-8'>
                        <div class='col-md-3'>
                            <div class='form-group internal'>
                                <select class='form-control' id='id_equipment'>
                                    <option>Travel trailer</option>
                                    <option>Fifth wheel</option>
                                    <option>RV/Motorhome</option>
                                    <option>Tent trailer</option>
                                    <option>Pickup camper</option>
                                    <option>Camper van</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
                <div class='form-group'>
                    <label class='control-label col-md-2 col-md-offset-2' for='id_service'>Required Service</label>
                    <div class='col-md-8'>
                        <select class='multiselect' id='id_service' multiple='multiple'>
                            <option value='hydro'>Hydro</option>
                            <option value='water'>Water</option>
                            <option value='sewer'>Sewer</option>
                        </select>
                    </div>
                </div>
                <div class='form-group'>
                    <label class='control-label col-md-2 col-md-offset-2' for='id_pets'>Pets</label>
                    <div class='col-md-8'>
                        <div class='make-switch' data-off-label='NO' data-on-label='YES' id='id_pets_switch'>
                            <input id='id_pets' type='checkbox' value='chk_hydro'>
                        </div>
                    </div>
                </div>
                <div class='form-group'>
                    <label class='control-label col-md-2 col-md-offset-2' for='id_comments'>Comments</label>
                    <div class='col-md-6'>
                        <textarea class='form-control' id='id_comments' placeholder='Additional comments' rows='3'></textarea>
                    </div>
                </div>
                <div class='form-group'>
                    <div class='col-md-offset-4 col-md-3'>
                        <button class='btn-lg btn-primary' type='submit'>Request Reservation</button>
                    </div>
                    <div class='col-md-3'>
                        <button class='btn-lg btn-danger' style='float:right' type='submit'>Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="footer" class="container" id="aboutus">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-body text-center">
                    <p>Copyright 2018 <b>GD Auto Service.</b> Designed by
                        <a href="https://www.linkedin.com/in/nargessadeghi/" target="_blank">@Narges</a>. .Code licensed
                        <a href="https://github.com/twbs/bootstrap/blob/master/LICENSE" target="_blank" rel="license">MIT</a>.
                </div>
            </div>
        </div>
    </div>
</div>
</body>


<script src="js/landingPageCarService.js"></script>
<script src="js/ForForm.js"></script>