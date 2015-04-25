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
            <button class="menu-btn menu-btn-hamburger" onclick="toggleMenu();">
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
            <div class="section-purpose-text">
                Elementary school students in Utah County are going home from school on Friday
                and coming back to school hungry on Monday. Five.12 provides weekend backpacks
                full of food for those students in need.
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="purpose-box purpose-box-blue">
                    <div class="purpose-percentage">43%</div>
                    <div class="purpose-text">
                        of elementary students in Utah County go hungry when they aren’t at school.
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="purpose-box purpose-box-orange">
                    <div class="purpose-percentage">100%</div>
                    <div class="purpose-text">
                        of all donated money goes to buying food for students in need. Period. No
                        overheads, no ulterior motives, no exceptions.
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
            We purchase. We pack. We deliver. Teachers and Counselors distribute.<br>
            Students enjoy and return to school physically ready to learn.
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
                We will not stop until every hungry elementary school student in Utah has food on the weekend.
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
            The more we do, the more they will be able to do.
        </div>
        
        <div class="section-participate-contain">
            <div class="row">
                <div class="col-sm-6">
                    <div class="section-participate-box" onclick="openContactForm();">
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
                    <div class="section-participate-box" onclick="openContactForm();">
                        <div class="section-participate-box-title">
                            SIGN-UP
                        </div>
                        <div>
                            We are happy to come to your school. Let us know who you are and how we can help.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section" id="about">
    <div class="container">
        <div class="section-lead">
            <span>About Five12</span><br>
            From Small Beginnings.
        </div>
        
        <div class="row">
            <div class="col-sm-6">
                <p class="about-p">Five.12 Foundation is a not for profit foundation based in Alpine, Utah committed to
                    the idea that anyone can take part in changing the lives of the people around them
                    even if they only have little. For us it started with a young girl giving all that she had,
                    $5.12, to help save the life of someone she barely knew.  That experience has given
                    us a greater perspective on our ability to make the world a better place.  We
                    consider “the worth of each soul” to be great and equal throughout the world and
                    are constantly looking for new ways to use what we have to bless the lives of others.
                </p>
            </div>
            <div class="col-sm-6">
                <div class="videoWrapper">
                    <iframe src="https://player.vimeo.com/video/52745113" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="https://vimeo.com/52745113">Five12: Small Beginnings</a> from <a href="https://vimeo.com/user14406079">Nick Greer</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="copyright">Copyrights/links to stuff/year started</div>

<div class="modal fade" id="contactFormModal">
    <div class="modal-dialog">
        <div class="modal-content modal-content-form">
            <form id="contactForm">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">
                        Contact Us
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Name<span>*</span> <span></span></label>
                                <input name="name" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email<span>*</span> <span></span></label>
                                <input name="email" class="form-control" type="email" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Institution</label>
                                <input name="institution" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Phone</label>
                                <input name="phone" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Comment</label>
                        <textarea name="comment" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                    <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
        <div class="modal-content modal-content-success">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">
                    Contact Us
                </h4>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <h2>Thank you</h2>
                    <p class="lead">
                        We'll get back to you soon.
                    </p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery-validate/jquery.validate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/velocity/velocity.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/main.js"></script>
</body>
</html>