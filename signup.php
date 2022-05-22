<?php ob_start();
session_start();
require('db/config.php');
require('db/functions.php');  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Application Form - Kindly Fill appropriately to register to FEPFL Academy (For new students only.) </title>
    <link rel="stylesheet" type="text/css" href="css/local.css">
    <?php include('nav/links.php');  ?>
</head>

<body>
    <?php include('nav/nav.php'); ?>

    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="section-header text-center">
                <h4>Welcome to Family Peace 247. Kindly Signup to get the best of our user experience</h4>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title putborder"><i class="fa fa-user"></i> Sign Up tp FamilyPeace247.org</h3>
                </div>
                <div class="card-body">


                    <form action="" method="POST">

                        <!-- ucode
email
fname
phone
pass
dob
country
state
lga -->

                        <?php if (isset($_POST['reg'])) {
                            $ucode = validate($_POST['ucode']);
                            $email = validate($_POST['email']);
                            $fname = validate($_POST['fname']);
                            $phone = validate($_POST['phone']);
                            $dob = validate($_POST['dob']);
                            $pass = validate($_POST['pass']);
                            $country = validate($_POST['country']);
                            $state = validate($_POST['state']);
                            $lga = validate($_POST['lga']);
                            $addr = validate($_POST['addr']);


                            //check if user already exist
                            if (QueryDB("SELECT COUNT(*) FROM `f_users` where `email` ='$email' ")->fetchColumn() > 0) {
                                $mge = '<div class="alert alert-danger alert-dismissible col-md-12 text-center" role="alert">
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true">&times;</span></button> <strong class="text-italic" style="color:black;">User Email already exist. </div>';
                                //  if(QueryDB("INSERT INTO users VALUES('','$ucode','$email','', '$cpass', '$pass') ")){
                                //     print"<script>alert('Customer Inserted Successfully'); window.location=''; </script>";
                                // }
                            } elseif (QueryDB("INSERT INTO f_users VALUES('','$ucode','$email', '$fname', '$phone', '$pass', '$dob', '$country', '$state', '$lga','$addr', 0) ")) {
                                print "<script>swal({text:'Registration Successful',type:'success', title:'Successful'}, function(){ window.location = 'login'});</script>";
                            } else {
                                print "<script>swal({text:'Submission Unsuccessful',type:'warning', title:'Error'}, function(){ window.location = ''});</script>";
                            }
                        }

                        //          else {
                        //             $message = '<div class="alert alert-danger alert-dismissible col-md-12 text-center" role="alert">
                        //   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        //     <span aria-hidden="true">&times;</span></button> <strong class="text-italic" style="color:black;">
                        // Passwords do not Match.
                        //        </div>';
                        //         }

                        ?>

                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2"><?php echo @$message;  ?></div>

                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2"><?php echo @$mge;  ?></div>
                        </div>
                        <div class="row">

                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                <label class="control-label" for="firstname">Enter a valid email</label><span class="required"> *</span>
                                <input type="email" class="form-control" name="email" required="" placeholder="Enter a valid Email">
                                <input type="hidden" name="ucode" value="<?php echo get_code(); ?>">

                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                <label class="control-label" for="lastname">Full Name:</label><span class="required"> *</span>
                                <input type="text" name="fname" required="" placeholder="First Name" class="form-control">
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                <label class="control-label" for="lastname">Phone Number:</label><span class="required"> *</span>
                                <input type="text" name="phone" required placeholder="e.g +2348012345678" class="form-control">
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                <label class="control-label" for="lastname">Choose a strong password:</label><span class="required"> *</span>
                                <input type="password" name="pass" required="" placeholder="Choose password" class="form-control">
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                <label class="control-label" for="lastname">Date of Birth:</label><span class="required"> *</span>
                                <input type="date" name="dob" required="" class="form-control">
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="country">Country</label>
                                <select class="form-control " name="country" id="country" required="">
                                    <option value="">[Choose Country]</option> <?php foreach (QueryDB("SELECT * FROM countries WHERE status = 0  ") as $ct) { ?>
                                        <option value="<?php echo $ct['name']; ?>" id="<?php echo $ct['id']; ?>"><?php echo $ct['name']; ?></option> <?php  } ?>
                                </select>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                <label class="control-label" for="lastname">State:</label><span class="required"> *</span>

                                <select class="form-control " name="state" id="state" required="">
                                    <option value="">[Choose State]</option>
                                </select>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2" id="lga2">
                                <label class="control-label" id="" for="lastname">LGA: <span class="required"> *</span></label>
                                <select class="form-control " name="lga" id="lga" required="">
                                    <option value="">[Choose LGA]</option>
                                </select>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                <label class="control-label" for="lastname">Address:</label><span class="required"> *</span>
                                <input type="text" name="addr" required="" placeholder="Enter Address" class="form-control">
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                <input type="submit" name="reg" value="Register" class="form-control btn btn-danger">
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                <h6>Already Registered? <a href="login" class="btn btn-info">Login</a></h6>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>




    <!-- Contact End -->

    <!-- Footer Start -->
    <div class="footer">

        <div class="container copyright">
            <div class="row">
                <div class="col-md-6">
                    <p style="display: none">&copy; <a href="#">Your Site Name</a>, All Right Reserved.</p>
                    <p>Copyright &copy; <a href="https://www.familypeace247.org">Family Peace 247</a>, All Right Reserved.</p>
                </div>
                <div class="col-md-6">
                    <p>Designed By <a href="https://wa.me/2349024945875" target="_blank">Brainpals Resources</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to top button -->
    <a href="#" class="back-to-top"><i class="fas fa-level-up-alt" style="color: white"></i></a>

    <!-- Pre Loader -->
    <div id="loader" class="show">
        <div class="loader"></div>
    </div>


    <?php include('nav/scripts.php') ?>
    <!-- <script>
    swal({title: "Deleted!",text: "Your row has been deleted.", button: "Close",icon: "success", //built in icons: success, warning, error, info
     timer: 3000, //timeOut for auto-close
      buttons: {
        confirm: {
          text: "OK",
          value: true,
          visible: true,
          className: "",
          closeModal: true
        },
        cancel: {
          text: "Cancel",
          value: false,
          visible: true,
          className: "",
          closeModal: true,
        }
      }
     });
 </script> -->
    <script>
        $('#form').parsley();
    </script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();

        $('.swalDefaultSuccess').click(function() {
            Toast.fire({
                icon: 'success',
                title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
    </script>
    <?php //include('modals.php');
    ?>
</body>

</html>