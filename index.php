<?php ob_start();
session_start();
require('db/config.php');
require('db/functions.php');
if (isset($_SESSION['usercode']) & isset($_SESSION['user_email'])) {
    $users = extract(get_user_details($_SESSION['user_email']));
} else {
}
$link = 1;; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FEPFL - Foundation For Enhancement And Promotion Of Family Life's</title>
    <?php include('nav/links.php');  ?>
</head>

<body>
    <?php include('nav/nav.php'); ?>

    <!-- Carousel Start -->
    <div class="carousel">
        <div class="container-fluid">
            <div class="owl-carousel">
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="img/jjj/fepel academy.jpg" alt="Image" width="100%">
                    </div>
                    <div class="carousel-text">
                        <h1>FEPFL Marriage Academy</h1>
                        <p>
                            Foundation for Enhancement and Promotion of Family Life (FEPFL) is established to Provide solutions to negative issues and scenarios in the societies that create dangerous forms of crimes, corruption, drug addiction, Human trafficking, gender-based violence, ritual killing, cultism, arm-robbery, and prostitution, etc. which are rooted in the failures of teaching human moral education in child parenting, at the right times in the peaceful marriage environments.
                        </p>
                        <div class="carousel-btn">
                            <a class="btn btn-custom" data-toggle="modal" data-target="#form">Register Now</a>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="img/jjj/family.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>Our Vision</h1>
                        <p>
                            A World with total Family Liberty and Justice for Societal Peace.
                        </p>
                        <div class="carousel-btn">
                            <a class="btn btn-custom" href="">View More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="img/jjj/community.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>Bringing Smiles to Millions</h1>
                        <p>
                            Building Communities of Peaceful people through Human moral coaching in reduce Crisis,
                            Crimes and Violence.

                        </p>
                        <div class="carousel-btn">
                            <a class="btn btn-custom" href="contact">Support Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img" data-parallax="scroll" data-image-src="img/logo2.png"></div>
                    <!-- <img src="img/logo.png"> -->
                </div>
                <div class="col-lg-6">
                    <div class="section-header">
                        <p>Get to know us better</p>
                        <h2>A World with Total family Liberty and Justice for Societal Peace</h2>
                    </div>
                    <div class="about-tab">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#tab-content-1">About FEPFL</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#tab-content-2">Mission Statement</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#tab-content-3">Thematic Area</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="tab-content-1" class="container tab-pane active">
                                <b>Foundation for Enhancement and Promotion of Family Life</b> is a Non Governmental
                                Organization. It was first registered with the Kogi State Government on the November
                                1st 2004, and June 4th 2009, the Organization registered with the Cooperates Affair
                                Commission (CAC) of Nigeria, as “Foundation for Enhancement and Promotion of Family
                                Life” (FEPFL).
                            </div>
                            <div id="tab-content-2" class="container tab-pane fade">
                                To build a Society of Peaceful People in the stable Marriages and Families, through
                                Emotional Peace, Social Peace, Health, Education and Ecological Peace programmes, by
                                enhancing attitudes of Peace in Individuals, Groups and Institutions, alongside
                                Collaborative works, Research and Applying System Strengthening, Referral Mechanisms
                                and Replication of Relationship Peace Innovations in the Family lives, for the
                                overall societal peace.
                            </div>
                            <div id="tab-content-3" class="container tab-pane fade">
                                FEPFL Thematic Area: Emotional Peace, Social Peace, Health, Education and Ecological
                                Peace.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header text-center">
                <p>What We Do?</p>
                <h4 align="justify">We engage the individuals and personalities to start the world peace project
                    with the willpower to control the human emotions, as peace the world needs come from every human
                    being on earth. This peace is an essential commodity to the human beings and it is only being
                    generated and distributed by human entities, that equally enjoys it and by it fulfill destiny.
                </h4>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-graduation-cap"></i>
                        </div>
                        <div class="service-text">
                            <h3>FEPFL School</h3>
                            <p>FEPFL Marriage Academy is a product of “Family Peace Service 247” (FAPS 247), as a
                                “World Peace Project” through FEPFL Marriage Academy. We build the capacities of
                                couples in managing human emotions in marriage and family.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-book"></i>
                        </div>
                        <div class="service-text">
                            <h3>Publications</h3>
                            <p>Books, Report, Research and Articles etc. (Knowing why you feel, the way you feel,
                                Marital Foundation, Easy home, Emotions and Marriage, Authentic Success)</p>
                        </div>
                    </div>
                </div>
                <!-- 
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-education"></i>
                        </div>
                        <div class="service-text">
                            <h3>Social Media</h3>
                            <p>Facebook, Instagram, WhatsApp, Twitter, YouTube etc.</p>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-home"></i>
                        </div>
                        <div class="service-text">
                            <h3>Partnership</h3>
                            <p>Partnership as forum: “Web for Human Moral Advancement” (WHMA) is a network of Civil
                                Societies, as means of collaborative works to make every child a peace ambassador.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-social-care"></i>
                            </div>
                            <div class="service-text">
                                <h3>Social Care</h3>
                                <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                            </div>
                        </div>
                    </div> -->
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header text-center">
                <p>FEPFL Marriage Academy Objectives</p>
                <h3>Knowledge Empowerment to Enhance Human Emotions, Personal
                    Peace, human morals, and Couple Parenting Skills to Avert Children In Crimes And
                    Increase Social Peace Mentors.</h3>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-home"></i>
                        </div>
                        <div class="service-text">
                            <h3>FEPFL School</h3>
                            <p>FEPFL Marriage Academy is a product of “Family Peace Service 247” (FAPS 247), as a
                                “World Peace Project” through FEPFL Marriage Academy. We build the capacities of
                                couples in managing human emotions in marriage and family.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="far fa-file-alt"></i>
                        </div>
                        <div class="service-text">
                            <h3>Application Now Open</h3>
                            <p>Ready to Enroll? Kindly <a class="btn btn-custom" href="onlineacademy.familypeace247.org/register" download>Apply</a> and
                                Register to be a part of our marriage academy
                                .</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header text-center">
                <p>Courses Offered</p>
                <h3>FEPFL MARRIAGE ACADEMY COURSE CODE; MARRIAGE AND CAREER PEACE SERVICES (MCPS).</h3>
            </div>
            <div class="row">
                <div class="table text-center">
                    <table class="table  ">

                        <thead>
                            <tr>
                                <th colspan="3">
                                    <h5><img src="img/fepfl.jpg" alt="FEPFL Marriage Academy Logo" width="100px"><br> FEPFL <span style="color: red;">MARRIAGE</span>
                                        ACADEMY IS A REGISTERED
                                        TERTIARY
                                        INSTITUTION. </h5>
                                    <p>Plot 5, Zion community, Zone 8, Lokoja Kogi State, Nigeria.
                                        www.familypeace247.org</p>
                                </th>
                            </tr>
                        </thead>
                    </table>
                    <div class="service">
                        <div class="container">
                            <h4>FEPFL MARRIAGE ACADEMY, “As A Tertiary Institution” Awards
                                Certificates As Follows:</h4>
                            <div class="row">
                                <div class="col-lg-4 col-md-4" style="box-shadow: 5px 0px 5px 0px #dfdfdf; border-radius: 10px; ">
                                    <div class="service-item" style="margin:10px">
                                        <div class="service-icon">
                                            <i class="flaticon-education"></i>
                                        </div>
                                        <div class="service-text">
                                            <h3>Certificate of Attendance:</h3>
                                            <p>In human emotions, personal peace and Human
                                                morals.</p>
                                            <p><b>Certify:</b> Marriage counsellor, Child parenting, human Morals
                                                and
                                                Social
                                                Peace
                                                Peer
                                                Educator.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4" style="box-shadow: 5px 0px 5px 0px #dfdfdf; border-radius: 10px; ">
                                    <div class="service-item" style="margin:10px">
                                        <div class="service-icon">
                                            <i class="flaticon-education"></i>
                                        </div>
                                        <div class="service-text">
                                            <h3>Certificate of Attendance:</h3>
                                            <p>In Young Mind Modeling for Success and human morals coach.</p>
                                            <p><b>Certify:</b> Youth Success and Social Peace Peer Educator. </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4" style="box-shadow: 5px 0px 5px 0px #dfdfdf; border-radius: 10px; ">
                                    <div class="service-item" style="margin:10px">
                                        <div class="service-icon">
                                            <i class="flaticon-education"></i>
                                        </div>
                                        <div class="service-text">
                                            <h3>Diploma Certificate</h3>
                                            <p>In Know why you feel the way you feel, Human Personality Identity and
                                                winging.</p>
                                            <p><b>Certify:</b> Career counsellor, Success mentor and Peace Peer
                                                Educator
                                                plus. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div>
                            <p>We Teach Knowledge That Generates Personal Peace And Transform It Into Marital Peace.
                            <p> <a href="https://www.familypeace247.org"> www.familypeace247.org</a>, <a href="mailto:info@familypeace247.org">info@familypeace247.org</a>, <a href="tel:+2348065659796">
                                    +234 8065 659 796, <a href="tel:++2349015442888">+234 9015 4428 88</a>,<a href="tel:++2348061316231"> +234 8061 316231</a>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Facts Start -->
    <div class="facts" data-parallax="scroll" data-image-src="img/facts.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="flaticon-home"></i>
                        <div class="facts-text">
                            <h3 class="facts-plus" data-toggle="counter-up">5</h3>
                            <p>Countries</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="flaticon-charity"></i>
                        <div class="facts-text">
                            <h3 class="facts-plus" data-toggle="counter-up">400</h3>
                            <p>Volunteers</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="flaticon-kindness"></i>
                        <div class="facts-text">
                            <h3 class="facts-naira" data-toggle="counter-up">100</h3>
                            <p>Our Goal</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="flaticon-donation"></i>
                        <div class="facts-text">
                            <h3 class="facts-dollar" data-toggle="counter-up">5000</h3>
                            <p>Raised</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Causes Start -->
    <div class="causes">
        <div class="container">
            <div class="section-header text-center">
                <p>Books & Publications</p>
                <h2>Get relevant books, articles and research documents from FEPFL</h2>
            </div>
            <div class="owl-carousel causes-carousel">
                <?php foreach (get_all_books() as $rows) {
                    extract($rows); ?>
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="master/<?php echo $book_img; ?>" alt="Image">
                        </div>
                        <div class="causes-progress">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    <span style="color: white">50% Discount</span>
                                </div>
                            </div>
                            <div class="progress-text">
                                <p><strong>Formal:</strong><del>N</del> <?php echo $book_price * 2; ?></p>
                                <p><strong>New Price:</strong><del>N</del> <?php echo $book_price; ?></p>
                            </div>
                        </div>
                        <div class="causes-text">
                            <h3><?php echo $book_name; ?></h3>
                            <p><?php echo htmlspecialchars_decode(substr($book_desc, 0, 250)); ?></p>
                        </div>
                        <div class="causes-btn">
                            <a class="btn btn-custom" href="buy_book/<?php echo $book_id; ?>/<?php echo date('Y', $book_date); ?>/<?php echo strtolower(str_replace(' ', '-', $book_name)); ?>" class="btn btn-primary">Read More</a>
                            <a class="btn btn-custom" href="buy_book/<?php echo $book_id; ?>/<?php echo date('Y', $book_date); ?>/<?php echo strtolower(str_replace(' ', '-', $book_name)); ?>" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div> <?php } ?>
            </div>
        </div>
    </div>
    <!-- Causes End -->


    <!-- Donate Start -->
    <div class="donate" data-parallax="scroll" data-image-src="img/donate.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="donate-content">
                        <div class="section-header">
                            <p>Support FEPL</p>
                            <h2>Join the network of spreading peace to the families in the world</h2>
                        </div>
                        <div class="donate-text">
                            <p>
                                "Your little contribution to making the world a better place counts"
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="donate-form">
                        <form action="donate">
                            <div class="control-group">
                                <input type="text" class="form-control" placeholder="Name" required="required" />
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" placeholder="Email" required="required" />
                            </div>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-custom active">
                                    <input type="radio" name="options" checked> USSD
                                </label>
                                <label class="btn btn-custom">
                                    <input type="radio" name="options"> Debit Card
                                </label>
                                <label class="btn btn-custom">
                                    <input type="radio" name="options"> Interswitch
                                </label>
                            </div>
                            <div>
                                <button class="btn btn-custom" type="submit">Support Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Donate End -->


    <!-- Event Start -->
    <div class="event">
        <div class="container">
            <div class="section-header text-center">
                <p>Upcoming Events</p>
                <h2>Be ready for our upcoming FEPFL events</h2>
            </div>
            <div class="row">
                <?php foreach (QueryDB("SELECT * FROM events where status = 0 ORDER BY RAND() LIMIT 4 ") as $rows) {
                    extract($rows); ?>
                    <div class="col-lg-6">
                        <div class="event-item">
                            <img src="master/<?php echo $img; ?>" alt="Image">
                            <div class="event-content">
                                <div class="event-text">
                                    <div class="event-meta">
                                        <p><i class="fa fa-calendar-alt"></i><?php echo date('d', strtotime($startDate)); ?>-<?php echo date('d M Y', strtotime($endDate)); ?>
                                        </p>
                                        <p><i class="far fa-clock"></i><?php echo date('h:i A', strtotime($startTime)); ?>
                                            - <?php echo date('h:i A', strtotime($endTime)); ?></p>
                                    </div>
                                    <p><i class="fa fa-map-marker-alt"></i> <?php echo $location; ?></p>

                                    <h3><?php echo $event_name; ?></h3>
                                    <p>
                                        <?php echo htmlspecialchars_decode($event_desc); ?>
                                    </p>
                                    <a class="btn btn-custom" href="post/<?php echo $event_id; ?>/<?php echo strtolower(str_replace(' ', '-', $event_name)); ?>">View
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div> <?php  }  ?>
            </div>
        </div>
    </div>
    <!-- Event End -->


    <?php include('team.php'); ?>


    <!-- Volunteer Start -->
    <div class="volunteer" data-parallax="scroll" data-image-src="img/volunteer.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="volunteer-form">
                        <form>
                            <div class="control-group">
                                <input type="text" class="form-control" placeholder="Name" required="required" />
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" placeholder="Email" required="required" />
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" placeholder="Why you want to become a volunteer?" required="required"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-custom" type="submit">Become a volunteer</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="volunteer-content">
                        <div class="section-header">
                            <p>Become A Volunteer</p>
                            <h2>Let’s make a difference in the lives of others</h2>
                        </div>
                        <div class="volunteer-text">
                            <p>Join the FEPFL Team and lets raise the world into becoming a better place, one family
                                at a time.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Volunteer End -->



    <!-- Blog Start -->
    <div class="blog">
        <div class="container">
            <div class="section-header text-center">
                <p>Our Blog</p>
                <h2>Latest news & articles directly from our FEPFL</h2>
            </div>
            <div class="row">
                <?php foreach (QueryDB("SELECT * FROM posts where post_status=1 ORDER BY RAND() LIMIT 6 ") as $rows) {
                    extract($rows); ?>

                    <div class="col-lg-4">
                        <div class="blog-item">

                            <div class="blog-img">
                                <a href="post/<?php echo $post_id; ?>/<?php echo date('Y', $post_date); ?>/<?php echo strtolower(str_replace(' ', '-', $post_title)); ?>"><img src="master/<?php echo $post_img; ?>" alt="Image"></a>
                            </div>
                            <div class="blog-text">
                                <h3><a href="post/<?php echo $post_id; ?>/<?php echo date('Y', $post_date); ?>/<?php echo strtolower(str_replace(' ', '-', $post_title)); ?>"><?php echo $post_title; ?></a>
                                </h3>
                                <p>
                                    <?php echo substr(htmlspecialchars_decode($post_content), 0, 150);  ?>
                                </p><a href="post/<?php echo $post_id; ?>/<?php echo date('Y', $post_date); ?>/<?php echo strtolower(str_replace(' ', '-', $post_title)); ?>" class="btn btn-danger">Read More</a>
                            </div>
                            <div class="blog-meta">
                                <p><i class="fa fa-user"></i><?php echo get_time_ago($post_date); ?></p>
                                <p><i class="fa fa-link"></i><?php echo get_cat_by_code($post_cat); ?></p>
                            </div>
                        </div>
                    </div>

                <?php  } ?>

            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Causes Start -->
    <div class="blog">
        <div class="container">
            <div class="section-header text-center">
                <p>FEPFL SPONSORS & PARTNERS</p>
                <h2>Get to know more about our Sponsors and Partners</h2>
            </div>
            <div class="sponsor row ">
                <style type="text/css">
                    .sponsor img {
                        margin: 10px;
                    }
                </style>

                <div class="col-md-12 col-sm-12 col-12 text-center">
                    <img src="img/cedpa.jpg" alt="Image" width="100px">
                    <img src="img/undp.jpg" alt="Image" width="100px">
                    <img src="img/usaid.png" alt="Image" width="100px">
                    <img src="img/unicef.jpg" alt="Image" width="100px">
                    <img src="img/kogi logo.png" alt="Image" width="100px">
                    <img src="img/Population_Council_Logo.png" alt="Image" width="100px">
                </div>
            </div>
        </div>

    </div>
    </div>
    <!-- Causes End -->

    <?php include('nav/footer.php');
    include('nav/scripts.php'); ?>
</body>

</html>