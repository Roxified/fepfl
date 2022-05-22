<?php  ob_start(); session_start(); require('db/config.php'); require('db/functions.php');
if(isset($_SESSION['code'])){ $code = $_SESSION['code']; } else{}
$link = 4; ; ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>About Us - Get to know more about FEPFL</title>
        <?php include('nav/links.php'); ?>
    </head>

    <body>
        <?php include('nav/nav.php'); ?>

        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>About Us</h2>
                    </div>
                    <div class="col-12">
                        <a href="index">Home</a>
                        <a href="about">About Us</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="img img-fluid about-img" data-parallax="scroll" data-image-src="img/logo2.png">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header">
                            <p>Learn About Us</p>
                            <h3>Foundation for Enhancement and Promotion of Family Life</h3>
                        </div>
                        <div class="about-tab">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#tab-content-1">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-2">Mission</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-3">Vision</a>
                                </li>
                            </ul>

                            <!--  <div class="tab-content">
                            <div id="tab-content-1" class="container tab-pane active">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae pellentesque turpis. Donec in hendrerit dui, vel blandit massa. Ut vestibulum suscipit cursus. Cras quis porta nulla, ut placerat risus. Aliquam nec magna eget velit luctus dictum. Phasellus et felis sed purus tristique dignissim. Morbi sit amet leo at purus accumsan pellentesque. Vivamus fermentum nisi vel dapibus blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </div>
                            <div id="tab-content-2" class="container tab-pane fade">
                                Sed tincidunt, magna ut vehicula volutpat, turpis diam condimentum justo, posuere congue turpis massa in mi. Proin ornare at massa at fermentum. Nunc aliquet sed nisi iaculis ornare. Nam semper tortor eget est egestas, eu sagittis nunc sodales. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent bibendum sapien sed purus molestie malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </div>
                            <div id="tab-content-3" class="container tab-pane fade">
                                Aliquam dolor odio, mollis sed feugiat sit amet, feugiat ut sapien. Nunc eu dignissim lorem. Suspendisse at hendrerit enim. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed condimentum semper turpis vel facilisis. Nunc vel faucibus orci. Mauris ut mauris rhoncus, efficitur nisi at, venenatis quam. Praesent egestas pretium enim sit amet finibus. Curabitur at erat molestie, tincidunt lorem eget, consequat ligula.
                            </div>
                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <!-- <p>What we Do</p> -->
                    <h2>What We Do</h2>
                </div>
                <div class="col-md-12">
                    <ol>
                        <li>To empower the youth and young persons for a safe future by avoiding drugs, crimes and
                            violence</li>
                        <li>To empower couples and parents to live and love in a peaceful family environment for the
                            child moral development. </li>
                        <li>To engage the youth and young persons to acts as kings and queens to rule and reign in their
                            generation</li>
                        <li>To raise a generation of youth and young persons that will add values to the world</li>
                        <li>To engage the youth and young individuals through self-discovery for success. </li>
                        <li>To engage the youth and young persons in taking responsibility for a positive change through
                            self-esteem and respecting the future as a set goal to achieve in personal and social peace
                        </li>
                        <li>To raise a generation of youth and young persons empowered with the skills of self-policing
                            through human moral conscience activation.</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <p>About Us</p>
                    <h2>Overview of FEPFL</h2>
                </div>
                <div class="row">
                    <div class="col-md-12" style="text-align: justify; line-height:35px;">
                        <p>
                            The pride of Africa is the family system and the ritual accorded marriage processing.
                            Research has shown that we have lost the beauty of the African family systems and the
                            sacraments of marriage that gave African homes and community peace that reigns out of human
                            morals values. “Foundation for enhancement and Promotion of Family Life” designed family
                            Peace service twenty four hours and seven days a week (FAPS 247); as the human fundamental
                            Peace Service with the comprehensive peace programmes; that think of peace from child’s
                            emotional peace which develops from the ideal marriage processing and solemnization, to the
                            childbirth in a peaceful marriage or family environment, parental skills, adolescence and
                            youthful age in homes and families, with the young adults.</p>
                        <p>The young adult starts another circle of peace process through a new marriage. The Human
                            marriage is the foundation of every individual emotional person in the communities. While
                            that of social peace is rooted on Human Moral Justice, Equity, Equal Rights, Moral
                            transparency and Moral accountability, Eco system Respects and good Governance. That is why
                            the English congress or assembly passed a law in the year 1535, whose aim is to appoint an
                            overseer family to take care off the neglected children. It is pathetic to note that the
                            Children have turned into cult groups since marriage and family systems have failed them;
                            these cult activities are existing in Primary Schools, Streets and Estates as you could see
                            children of ages six and above of different cults groups confronting each other’s and
                            inflicting injuries and some are killed in the fight, while others turn out drugs addicts.
                        </p>
                        <p> FAPS 247 was designed as a respond to presidential Directive to Civil Society Organizations
                            to contribute and participates in Countering Crimes, Violence, Religious-extremism,
                            Radicalization and Terrorism through the National Counter Terrorism Strategy (NACTEST 2016).
                            The ideal and complete marriage processing result to peaceful marriage home and from that
                            peaceful marriage the human morals are developed and it is out of the human moralities; we
                            can talk of personal and social peace. “The major reason why certain young people refrain
                            from crime is not because they fear the consequences; it’s that their morality simply
                            prevents them from even seeing crime as a possible course of action in the first place”
                            (Christopher Boehm). It is equally proven that when the quality of human moralities
                            decreases crimes and anarchies increase in the society. United Nations (UN) recognized that
                            the war that ravage the peace in the world starts from the individuals’ minds and defending
                            it must start from the mind of the child. Any Nation that spends money to build human moral
                            of her citizens through well-funded social welfare department, such Nation will often spend
                            less on social securities. The citizens that are with developed human moral values are often
                            with activated human consciences, they are on self-policing, as everybody is doing the right
                            things without physical presence of police.</p>
                        <p> FAPS 247 is designed to achieve all the Sustainable Development Goals (SDG) achieving
                            personal peace as the foundation of the World peace.</p>
                        <h4>FEPFL Marriage Academy Account Number</h4>
                        <h5>Account Name: FEPFL Marriage Academy <br>
                            Account Number: 1024653058 <br>Bank Name: UBA Plc </h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
        <?php include('team.php'); ?>

        <?php include('nav/footer.php'); include('nav/scripts.php') ?>
    </body>

</html>