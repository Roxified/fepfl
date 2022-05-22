<?php  ob_start(); session_start(); require('db/config.php'); require('db/functions.php');  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Contact Us - Get More Information about FEPFL</title>
    <?php include('nav/links.php');  ?>
</head>

<body>
    <?php include('nav/nav.php'); ?>

    <!-- Page Header Start -->
    <div class="page-header">
            <!-- <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Contact Us</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Contact</a>
                    </div>
                </div>
            </div> -->
        </div>
        <!-- Page Header End -->
        
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <p>Get In Touch</p>
                    <h2>Contact Us for any query</h2>
                </div>
                <div class="section-header text-center">
                    <div class="row">
                        <div class="col-md-4">
                            <i class="fa fa-home"></i><h3>Address:</h3>
                            <h4><i class="fa fa-map-marker-alt"></i> Plot 1, Block 5. Zion Community by CBN Bank, Zone 8, Lokoja Kogi State.</h4>

                        </div>
                        <div class="col-md-4">
                            <i class="fa fa-phone-alt"></i><h3>Phone Number:</h3>
                            <h4><a href="tel:+234 806 565 9796">+234 806 565 9796</a></h4>

                        </div>
                        <div class="col-md-4">
                            <i class="fa fa-envelope"></i><h3>Address:</h3>
                            <h4>info@familypeace247.org</h4>


                        </div>
                    </div>  
                </div>
                <div class="contact-img">
                    <img src="img/contact.jpg" alt="Image">
                </div>
                <div class="contact-form">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-custom" type="submit" id="sendMessageButton">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <?php include('nav/footer.php'); include('nav/scripts.php'); ?>
    </body>
    </html>
