<?php  ob_start(); session_start(); require('db/config.php'); require('db/functions.php');?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Family Peace 247 - KindlyLogin </title>
    <link rel="stylesheet" type="text/css" href="css/local.css">
    
    <?php include('nav/links.php');  ?>
</head>

<body>
    <?php include('nav/nav.php'); ?>
    
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            
        </div>
    </div>
    <!-- Page Header End -->
    <div class="container">
        <div class="row">
            <div class="section-header text-center">
                <h4>Login to Family Peace 247</h4>
            </div>
        </div>
    </div>
    

    <div class="container">
        <div class="row">
            <div class="container">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title "><i class="fa fa-user"></i> Login to Family Peace 247</h3>
                    </div>
                    <div class="card-body">    
                        <form action="" method="POST">
                            
                            <?php if(isset($_POST['login'])){
                                $email = validate($_POST['email']);
                                $pass = validate($_POST['pass']);

    //check if student exists
                                if(QueryDB("SELECT COUNT(*) FROM f_users where `email`= '$email' and `pass`= '$pass' ")->fetchColumn()>0){
        //print"<script>alert('Student Exists'); window.location='form'; </script>"; //
                                 extract(get_user_details($email));
                                 $_SESSION['usercode'] = $ucode;
                                 $_SESSION['user_email']= $email;

      // QueryDB("INSERT INTO `details` VALUES('',".$_SESSION['stud_code'].", ) ")
       //echo $_SESSION['stud_code'];
                                 echo  '<div class="alert alert-success alert-dismissible col-md-12 text-center" role="alert">
                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span></button> <strong class="text-italic" style="color:black;">
                                 Logging in-Please Wait.. <i class="fa fa-spinner fa-spin"></i>
                                 </div>';
        //$head = "<script>window.history.go(-2);</script>";
                                 header('refresh:3; url=index.php'); die();

                             } else{
//               print "<script>swal({text:'Login Credentials Mismatch',type:'warning',title:'Error'},
// function(){ window.location = 'login'});</script>"; 
                              $message = '<div class="alert alert-danger alert-dismissible col-md-12 text-center" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span></button> <strong class="text-italic" style="color:black;">
                              Invalid Login Credentials.
                              </div>'; 
                          }
                      }



                      ?>
                      <div class="col-md-12"><?php echo @$message; ?></div>
                      <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                            
                            <label class="control-label" for="lastname">Enter Username:</label><span class="required"> *</span>
                            <input type="text" name="email" required="" placeholder="Enter Email" class="form-control"> 
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2 ">
                            <label class="control-label" for="othername">Enter Password </label><span class="required"> *</span>
                            <input type="password" name="pass" placeholder="Enter password" required="" class="form-control"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="login" class="form-control btn btn-info bgPink" value="Continue">
                    </div>
                    <div class="form-group"><div class="success"></div>
                    <h5>Not Registered? <a href="signup" class="btn btn-info">Signup</a></h5>
                </div>

            </form></div>


        </div>
    </div></div></div>


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

    <?php include('nav/scripts.php'); ?>
    <?php //include('modals.php'); ?>
</body>
</html>
