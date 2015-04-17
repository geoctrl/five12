<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        The Five 12 Foundation
    </title>
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="lib/main.css?v0.0.1">
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
            <button class="menu-btn" onclick="scrollById('progress')">
                Progress
            </button>
            <button class="menu-btn" onclick="scrollById('participate')">
                Participate
            </button>
            <button class="menu-btn" onclick="scrollById('about')">
                About Us
            </button>
            <a class="menu-btn">
                International
            </a>
        </div>
        
        <div class="nav pull-right">
            <button class="menu-btn menu-btn-hamburger">
                <i class="glyphicon glyphicon-menu-hamburger"></i>
            </button>
            <!--        <div class="nav pull-right">-->
            <!--            <button class="menu-btn menu-btn-hamburger">-->
            <!--                <i class="glyphicon glyphicon-menu-hamburger"></i>-->
            <!--            </button>-->
            <!--        </div>-->

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

<section class="section section-purpose" id="purpose">
    <div class="container">
        
        <div class="section-icon">
            <img src="img/section-purpose.png" alt="">
        </div>
        <div class="section-lead">
            <span>OUR PURPOSE</span><br>
            Purpose Statement of weekend backpacks: one sentence.
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="purpose-box purpose-box-orange">
                    <div class="purpose-percentage">100%</div>
                    <div class="purpose-text">
                        Explanatory text regarding the number of kids who need help and how donations work.
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="purpose-box purpose-box-blue">
                    <div class="purpose-percentage">60%</div>
                    <div class="purpose-text">
                        Explanatory text regarding the number of kids who need help and how donations work.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section-process" id="process">
    <div class="container">
        <div class="section-icon">
            <img src="img/section-process.png" alt="">
        </div>
        <div class="section-lead">
            <span>THE PROCESS</span><br>
            Something about the process - one sentence
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="process-box">
                    <div class="process-image">
                        <img src="img/process-purchase.png" alt="">
                    </div>
                    <div class="process-text">
                        Volunteers purchase the food
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="process-box">
                    <div class="process-image">
                        <img src="img/process-pack.png" alt="">
                    </div>
                    <div class="process-text">
                        Volunteers pack the weekend backpacks
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="process-box">
                    <div class="process-image">
                        <img src="img/process-deliver.png" alt="">
                    </div>
                    <div class="process-text">
                        Volunteers deliver the food
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="process-box">
                    <div class="process-image">
                        <img src="img/process-distribute.png" alt="">
                    </div>
                    <div class="process-text">
                        Teachers and Counselors distribute the food
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section-progress" id="progress">
    <div class="container">
        <div class="section-progress-contain">
            <div class="section-icon">
                <img src="img/section-progress.png" alt="">
            </div>
            <div class="section-lead">
                <span>OUR PROGRESS</span><br>
                Something about progress - one sentence
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="progress-box">
                        <div class="progress-number">
                            4800
                        </div>
                        <div class="progress-text">
                            Weekend backpacks delivered this school year.
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="progress-box">
                        <div class="progress-number">
                            400
                        </div>
                        <div class="progress-text">
                            Weekend backpacks delivered each weekend.
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="progress-box">
                        <div class="progress-number">
                            12
                        </div>
                        <div class="progress-text">
                            Participating schools
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-participate" id="participate">
    <div class="container">
        <div class="section-icon">
            <img src="img/section-participate.png" alt="">
        </div>
        <div class="section-lead">
            <span>PARTICIPATE</span><br>
            Something about people participating - one sentence
        </div>
        
        <div class="section-participate-contain">
            <div class="row">
                <div class="col-sm-6">
                    <div class="section-participate-box">
                        <div class="section-participate-box-title">
                            DONATE
                        </div>
                        <div class="section-participate-box-content">
                            <span>$5.12</span> will feed a child for an entire weekend.
                            <br/>
                            <span>$20.48</span> will feed a child for a month.
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="section-participate-box">
                        <div class="section-participate-box-title">
                            SIGN-UP
                        </div>
                        <div>
                            sign your school up for the weekend backpack program and help save lives.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section" id="about">
    <div class="container">
        <h1 class="text-center">
            About Five12
        </h1>
    </div>
</section>

<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/velocity/velocity.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/main.js"></script>
</body>
</html>