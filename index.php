<!doctype html>
<html>
<head>
    <title>
        The Five 12 Foundation
    </title>
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="lib/main.css">
</head>
<body>

<header>
    <div class="container">
        <img class="logo" src="img/logo.png" alt="">
        <div class="nav pull-left">
            <button class="menu-btn" onclick="scrollById('purpose')">
                Purpose
            </button>
            <button class="menu-btn" onclick="scrollById('process')">
                Process
            </button>
            <button class="menu-btn" onclick="scrollById('stats')">
                Stats
            </button>
            <button class="menu-btn">
                Take Action
            </button>
            <button class="menu-btn">
                About
            </button>
        </div>
        <div class="nav pull-right">
            <button class="menu-btn menu-btn-donate">
                Donate
            </button>
            <button class="menu-btn menu-btn-hamburger">
                <i class="glyphicon glyphicon-menu-hamburger"></i>
            </button>
        </div>
    </div>
</header>



<div id="hero-unit" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#hero-unit" data-slide-to="0" class="active"></li>
        <li data-target="#hero-unit" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item item-slide-1 active">
            <div class="carousel-caption">
                hey hey hey
            </div>
        </div>
        <div class="item item-slide-2">
            <div class="carousel-caption">
                ...
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#hero-unit" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#hero-unit" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<section class="section" id="purpose">
    <div class="container">
        <div class="lead text-center">
            Purpose Statement of weekend backpacks: one sentence.
        </div>
    </div>
</section>
<section class="section" id="process">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h1 class="text-center">
                    60%
                </h1>
            </div>
            <div class="col-sm-4">
                Explanatory text regarding the number of kids who need help and how donations work.
            </div>
            <div class="col-sm-4">
                <h1 class="text-center">
                    100%
                </h1>
            </div>
        </div>
    </div>
</section>
<section class="section" id="stats">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                Volunteers purchase the food
            </div>
            <div class="col-sm-3">
                Volunteers pack the weekend backpacks
            </div>
            <div class="col-sm-3">
                Volunteers deliver the food
            </div>
            <div class="col-sm-3">
                Teachers and Counselors distribute the food
            </div>
        </div>
    </div>
</section>

<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/velocity/velocity.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/main.js"></script>
</body>
</html>