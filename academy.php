<?php ob_start();
session_start();
require('db/config.php');
require('db/functions.php');
$link = 2; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FEPFL Marraige Academy - Crafting Blissful Marriage and Building Human Moral as Successful lifestyles for
        the Child with the hope of the future peaceful personality. </title>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Foundation for Enhancement and Promotion of Family Life">
    <meta content="family, peace, marriage, home,  " name="description">
    <meta name="description" content="FEPFL Marraige Academy- Crafting Blissful Marriage and Building Human Moral as Successful lifestyles for the Child with the hope of the future peaceful personality. ">
    <!-- Favicon -->
    <link href="img/fepfl.jpg" rel="icon">
    <link href="img/fepfl.jpg" rel="favicon">


    <!-- Google Font -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet"> -->

    <!-- CSS Libraries -->

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/font/css2.css">
    <link href="assets/lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <script src="assets/js/sweetalert.min.js"></script>
    <script src="assets/js/vanila_del_prompt.js"></script>
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/circular-std/style.css" rel="stylesheet">

    <!-- <link rel="stylesheet" type="text/css" href="css/local.css"> -->
    <link rel="stylesheet" type="text/css" href="assets/css/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vanila_del_prompt.css">
</head>

<body>
    <?php include('nav/nav2.php'); ?>


    <!-- Carousel Start -->
    <div class="carousel">
        <div class="container-fluid">
            <div class="owl-carousel">
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="img/jjj/fepel academy.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>FEPFL <span style="color:red">Marriage</span> Academy</h1>
                        <p>
                            Knowledge Empowerment to Enhance Human Emotions, Personal Peace, human morals, and
                            Couple Parenting Skills to Avert Children In Crimes And Increase Social Peace Mentors.
                        </p>
                        <div class="carousel-btn">
                            <a class="btn btn-custom" href="https://onlineacademy.familypeace247.org/register">Register Now</a>
                            <!-- <a class="btn btn-custom" href="">Portal</a> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="img/jjj/family.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>Enroll into FEPFL <span style="color:red">Marriage</span> Academy</h1>
                        <p>
                            The greatest place for love is the marriage, love is life and loving is being alive,
                            learn to love and love to live long with success in marriage and career.
                        </p>
                        <div class="carousel-btn">
                            <a class="btn btn-custom" href="https://onlineacademy.familypeace247.org/register">Register Now</a>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="img/jjj/community.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>Bringing <span style="color:red">Smile</span> to Families</h1>
                        <p>


                        </p>
                        <div class="carousel-btn">
                            <a class="btn btn-custom" href="https://onlineacademy.familypeace247.org/register">Register Now</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->



    <!-- Service Start -->
    <!--      <div class="service">
        <div class="container">
            <div class="section-header text-center">
                <p>FEPFL Academy Objectives</p>
                <h3>Knowledge Empowerment to Enhance Human Emotions, Personal
                    Peace, human morals, and Couple Parenting Skills to Avert Children In Crimes And
                    Increase Social Peace Mentors.</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
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
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="far fa-file-alt"></i>
                        </div>
                        <div class="service-text">
                            <h3>Application forms</h3>
                            <p>Ready to Enroll? Kindly <a class="btn btn-custom"
                                    href="documents/FEPFL_marriage_academy_admission_form.pdf" download>Download</a>
                                and
                                fill out
                                the form below to register for the next session.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="far fa-file"></i>
                        </div>
                        <div class="service-text">
                            <h3>Courses Code</h3>
                            <p>Kindly <a class="btn btn-custom" href="documents/FEPFL_course_code.pdf"
                                    download>Download</a>
                                and
                                check out
                                the courses available for the academic sessions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <div class="service-text">
                            <h3>Student Session</h3>
                            <p>New student and Old Student (returning Students)? <a class="btn btn-custom"
                                    href="#">Click Here</a> to Proceed with registration.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Service Start -->
    <div class="service">

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
                        <h4 class="mb-5">FEPFL MARRIAGE ACADEMY, “As A Tertiary Institution” Awards
                            Certificates As Follows:</h4>
                        <div class="row">
                            <div class="col-lg-6 col-md-6" style="box-shadow: 5px 0px 5px 0px #dfdfdf; border-radius: 10px; ">
                                <div class="service-item" style="margin:10px">
                                    <div class="service-icon">
                                        <i class="flaticon-education"></i>
                                    </div>
                                    <div class="">
                                        <h3>First Level Certificate of Attendance:</h3>
                                        <p>In human emotions, personal peace and Human
                                            morals.</p>
                                        <p><b>Certify:</b> Marriage counsellor, Child parenting, human Morals and Social
                                            Peace
                                            Peer
                                            Educator.
                                        </p>
                                        <p><b>Form Fee:</b><del>N</del> 1,000.00 <b>Tuition Fee:</b><del>N</del> 10,000.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6" style="box-shadow: 5px 0px 5px 0px #dfdfdf; border-radius: 10px; ">
                                <div class="service-item" style="margin:10px">
                                    <div class="service-icon">
                                        <i class="flaticon-education"></i>
                                    </div>
                                    <div class="service-text">
                                        <h3>Second Level Certificate of Attendance:</h3>
                                        <p>In human emotions, personal peace and Human
                                            morals.</p>
                                        <p><b>Certify:</b> Marriage counsellor, Child parenting, human Morals
                                            and
                                            Social
                                            Peace
                                            Peer
                                            Educator.
                                        </p>
                                        <p><b>Form Fee:</b><del>N</del> 1,000.00 <b>Tuition Fee:</b><del>N</del> 15,000.00</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6" style="box-shadow: 5px 0px 5px 0px #dfdfdf; border-radius: 10px; ">
                                <div class="service-item" style="margin:10px">
                                    <div class="service-icon">
                                        <i class="flaticon-education"></i>
                                    </div>
                                    <div class="service-text">
                                        <h3>Youth Mentorship Certificate of Attendance:</h3>
                                        <p>In Young Mind Modeling for Success and human morals coach.</p>
                                        <p><b>Certify:</b> Youth Success and Social Peace Peer Educator. </p>
                                        <p><b>Form Fee:</b><del>N</del> 1,000.00 <b>Tuition Fee:</b><del>N</del> 10,000.00</p>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6" style="box-shadow: 5px 0px 5px 0px #dfdfdf; border-radius: 10px; ">
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
                                        <p><b>Form Fee:</b><del>N</del> 2,000.00 <b>Tuition Fee:</b><del>N</del> 30,000.00</p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="event">
                        <div class="container">
                            <div class="section-header text-center">
                                <p>How to Apply</p>
                                <!-- <h2>Be ready for our upcoming FEPFL events</h2> -->
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="event-item">
                                        <!-- <img src="img/jjj/fepel academy.jpg" alt="Image"> -->
                                        <div class="event-content">
                                            <div class="event-text" style="text-align:justify;">
                                                <!-- <p><i class="fa fa-map-marker-alt"></i> Lokoja</p> -->
                                                <h3>Account Creation</h3>
                                                <ul>
                                                    <li>Visit the FEPFL Marriage Academy Student Registration page to Apply <a href="onlineacademy.familypeace247.org/register" class="btn btn-sm btn-danger">Here</a></li>
                                                    <li>Enter your details with a functional email and click on Create Account</li>
                                                    <li>A verification email will be sent to your mail which will enable you verifiy your account and proceed to login </li>
                                                </ul>
                                                <!-- <a class="btn btn-custom" href="#">View Now</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="event-item">
                                        <!-- <img src="img/jjj/fepel academy.jpg" alt="Image"> -->
                                        <div class="event-content">
                                            <div class="event-text" style="text-align:justify;">
                                                <!-- <p><i class="fa fa-map-marker-alt"></i> Lokoja</p> -->
                                                <h3>Application Form</h3>
                                                <ul>
                                                    <li>After you login, click on Application from the menu list and select the level you want to apply for.</li>
                                                    <li>Click on ""Proceed to Pay"" to pay the form fee through our secure online payment platform</li>
                                                    <li>Once the payment is complete, click on the Application menu and select the level you paid for. </li>
                                                    <li>Fill in the Form and submit. </li>
                                                </ul>
                                                <!-- <a class="btn btn-custom" href="#">View Now</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="event-item">
                                        <!-- <img src="img/jjj/fepel academy.jpg" alt="Image"> -->
                                        <div class="event-content">
                                            <div class="event-text" style="text-align:justify;">
                                                <!-- <p><i class="fa fa-map-marker-alt"></i> Lokoja</p> -->
                                                <h3>Tution Fee</h3>
                                                <ul>
                                                    <li>Once the form has been filled, you can click on the payment menu.</li>
                                                    <li>Click on ""Make Payment"" for the level you have applied to pay the form fee through our secure online payment platform</li>
                                                    <li>Once the payment is complete, click on the Course and begin taking your courses. </li>

                                                </ul>
                                                <!-- <a class="btn btn-custom" href="#">View Now</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="event-item">
                                        <!-- <img src="img/jjj/fepel academy.jpg" alt="Image"> -->
                                        <div class="event-content">
                                            <div class="event-text" style="text-align:justify;">
                                                <!-- <p><i class="fa fa-map-marker-alt"></i> Lokoja</p> -->
                                                <h3>Courses</h3>
                                                <ul>
                                                    <li>Click on the course menu and select the level you applied for.</li>
                                                    <li>The courses for the level will be avaliable and you can start from the first lesson.</li>
                                                    <li>After completion of every lesson you will need to click on "Mark Complete" which will enable the take assessment button.</li>

                                                </ul>
                                                <!-- <a class="btn btn-custom" href="#">View Now</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="event-item">
                                        <!-- <img src="img/jjj/fepel academy.jpg" alt="Image"> -->
                                        <div class="event-content">
                                            <div class="event-text" style="text-align:justify;">
                                                <!-- <p><i class="fa fa-map-marker-alt"></i> Lokoja</p> -->
                                                <h3>Assessments</h3>
                                                <ul>
                                                    <li>The "Take Assessment button will take you to where you will have to complete an assessment based on all you've learnt in the lesson.</li>
                                                    <li>Once the assessment is complete with a pass mark greater than avaerage, you will be qualified to take the next course. </li>
                                                    <li>You have 3 trials for each assessment after which you will have to wait for another 24hours to retake another assessment</li>

                                                </ul>
                                                <!-- <a class="btn btn-custom" href="#">View Now</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="event-item">
                                        <!-- <img src="img/jjj/fepel academy.jpg" alt="Image"> -->
                                        <div class="event-content">
                                            <div class="event-text" style="text-align:justify;">
                                                <!-- <p><i class="fa fa-map-marker-alt"></i> Lokoja</p> -->
                                                <h3>Certificates</h3>
                                                <ul>
                                                    <li>Once all the lesson and assessment for a level is complete your certificate will be generated.</li>
                                                    <li>The certificate consist of the details of your course</li>
                                                    <li>You can download your certificate also.</li>

                                                </ul>
                                                <!-- <a class="btn btn-custom" href="#">View Now</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="event-item">
                                        <!-- <img src="img/jjj/fepel academy.jpg" alt="Image"> -->
                                        <div class="event-content">
                                            <div class="event-text" style="text-align:justify;">
                                                <!-- <p><i class="fa fa-map-marker-alt"></i> Lokoja</p> -->
                                                <h3>Duration</h3>
                                                <ul>
                                                    <li>Each student run his or her own session</li>
                                                    <li>Graduating depend on each student commitment to his or her own session.
                                                    </li>

                                                </ul>
                                                <!-- <a class="btn btn-custom" href="#">View Now</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                Remove duration, put each student run his or her own session, graduating depend on each student commitment to his or her own session.regards
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p>We Teach Knowledge That Generates Personal Peace And Transform It Into Marital Peace.
                        <p> <a href="https://www.familypeace247.org"> www.familypeace247.org</a>, <a href="mailto:info@familypeace247.org">info@familypeace247.org</a>, <a href="tel:+2348065659796">
                                +234 8065 659 796, <a href="tel:++2349015442888">+234 9015 4428 88</a>,<a href="tel:++2348061316231"> +234 8061 316231</a>

                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>

    <div class="event">
        <div class="container">
            <div class="section-header text-center">
                <p>Marriage Academy Classes</p>
                <!-- <h2>Be ready for our upcoming FEPFL events</h2> -->
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="event-item">
                        <img src="img/jjj/fepel academy.jpg" alt="Image">
                        <div class="event-content">
                            <div class="event-text">
                                <p><i class="fa fa-map-marker-alt"></i> Lokoja</p>

                                <h3>Marriage Academy Classes</h3>
                                <p>
                                    4 days Marriage academy classes for the staff of the Kogi State social welfare department in the Ministry of Women Affairs and Social Development
                                </p>
                                <!-- <a class="btn btn-custom" href="#">View Now</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="event-item">
                        <img src="img/jjj/community.jpg" alt="Image">
                        <div class="event-content">
                            <div class="event-text">
                                <p><i class="fa fa-map-marker-alt"></i> Lokoja</p>

                                <h3>Marriage Academy Classes</h3>
                                <p>
                                    FEPFL Sensitization Program at Kogi State NYSC Orientaion Camp, ASAYA, Kabba
                                </p>
                                <!-- <a class="btn btn-custom" href="#">View Now</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="event-item">
                        <img src="img/acad/1.jpg" alt="Image">
                        <div class="event-content">
                            <div class="event-text">
                                <p><i class="fa fa-map-marker-alt"></i> Lokoja</p>

                                <h3>Marriage Academy Classes</h3>
                                <p>
                                    <?php // echo htmlspecialchars_decode($event_desc); 
                                    ?>
                                </p>
                                <!-- <a class="btn btn-custom" href="#">View Now</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="event-item">
                        <img src="img/acad/2.jpg" alt="Image">
                        <div class="event-content">
                            <div class="event-text">

                                <p><i class="fa fa-map-marker-alt"></i> Lokoja</p>

                                <h3>Community Leaders in FEPFL Marraige Class</h3>
                                <p>
                                    The Community in Leaders in attendance of FEPFL Marraige Academy, as a way
                                    out
                                    to stop children enrollment in cult groups on the state
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="event-item">
                        <img src="img/acad/3.jpg" alt="Image">
                        <div class="event-content">
                            <div class="event-text">

                                <p><i class="fa fa-map-marker-alt"></i> Lokoja</p>

                                <h3>Marriage Academy Classes</h3>
                                <p>
                                    The Community men and Women in attendance of FEPFL Marraige Academy, as a
                                    way of
                                    supporting the objectives of FEPFL Marraige Academy for a better Family and
                                    society.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="event-item">
                        <img src="img/acad/4.jpg" alt="Image">
                        <div class="event-content">
                            <div class="event-text">

                                <p><i class="fa fa-map-marker-alt"></i> Lokoja</p>

                                <h3>NGO Leaders in FEPFL Marriage Academy</h3>
                                <p>
                                    The Leaders of network NGOs in Kogi State have given their support to FEPFL
                                    Marriage Academy, for the sake of children in who are often the first victim
                                    of
                                    marital crisis.

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="event-item">
                        <img src="img/acad/5.jpg" alt="Image">
                        <div class="event-content">
                            <div class="event-text">

                                <p><i class="fa fa-map-marker-alt"></i> Lokoja</p>

                                <h3>Catholic Priest in FEPFL Marriage Academy</h3>
                                <p>
                                    The Religious Leaders also joins FEPFL Marriage Academy to support the
                                    movement
                                    of a ppeaceful marriage for a peaceful society.

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="event">
        <div class="container">
            <div class="section-header text-center">
                <p>FEPFL MARRIAGE ACADEMY ANTHEM</p>
                <!-- <h2>Be ready for our upcoming FEPFL events</h2> -->
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="event-item">
                        <div class="event-content">
                            <div class="event-text">
                                <p>
                                    I am born a star to fulfill my destiny in love,<br>I am born to shine like stars
                                    with my potentials,<br>
                                    I am unique in love and peace in my emotional world.<br><br>
                                </p>
                                <p>
                                    I am born in a family to beget a family of love,<br>
                                    I am a consequence of love; I am a product of marriage,<br>
                                    I am destine for a joyful home in marriage,<br>
                                    I am predestined for a peaceful marriage in love.<br><br>
                                </p>
                                <p>
                                    I am destined to be hold my emotional peace in love,<br>
                                    I stand to learn, make and manage emotions in my marriage,<br>
                                    I promise not to disappoint my destiny in ignorance.<br><br>
                                </p>
                                <p>
                                    I call to learn morals and build moral foundation in my child,<br>
                                    I will promote morals by teaching human morality to my child,<br>
                                    I promise to promote emotional peace with good human moral education.<br><br>
                                </p>
                                <p>
                                    Oh love enrich my marriage with peace and joy,<br>
                                    Oh Love the seed of marriage envelops me with the joy of love,<br>
                                    Love, Oh love, teach me to play your games in the knowledge of my
                                    emotions.<br><br>
                                </p>
                                <p>
                                    I will build my marriage as a home of love and peace for my child,<br>
                                    I will build my marriage for the next generation love and peace,<br>
                                    I promise to protect my marriage with dignity in love for my family.<br><br>

                                    Help me oh lord, the maker of love and marriage, Amen.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Start -->
    <div class="event">
        <div class="container">
            <div class="section-header text-center">
                <p>Upcoming Events</p>
                <h2>Be ready for our upcoming FEPFL events</h2>
            </div>
            <div class="row">
                <?php foreach (QueryDB("SELECT * FROM events where status = 0 ORDER BY RAND() LIMIT 6 ") as $rows) {
                    extract($rows); ?>
                    <div class="col-lg-6">
                        <div class="event-item">
                            <img src="master/<?php echo $img; ?>" alt="Image">
                            <div class="event-content">
                                <div class="event-text">
                                    <div class="event-meta">
                                        <p><i class="fa fa-calendar-alt"></i><?php echo date('d', strtotime($startDate)); ?>
                                            - <?php echo date('d M Y', strtotime($endDate)); ?>
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

    <?php include('nav/footer.php');
    include('nav/scripts.php'); ?>
</body>

</html>