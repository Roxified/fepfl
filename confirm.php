<?php ob_start(); session_start(); require('db/config.php'); require('db/functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Email Confirmation</title>
<?php include('links.php');  ?>
    </head>

    <body>
        <?php include('nav.php'); ?>
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                
                </div>
            </div>
        </div>
        <!-- Page Header End -->
    <?php  if(isset($_POST['reg'])){
        $uname = validate($_POST['uname']);
        $ucode = validate($_POST['ucode']);
        $email = validate($_POST['email']);
        $pass = validate($_POST['pass']);
        if(validate($_POST['cpass']) === $_POST['pass']){
            $cpass = validate($_POST['cpass']);




            
        } else {
            $message = '<div class="alert alert-danger alert-dismissible col-md-12 text-center" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span></button> <strong class="text-italic" style="color:black;">
Invalid Login Credentials.
       </div>';
        }


    }



     ?>
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    
                    <h2>Confirm Email for Registration</h2>
                    <p>Kindly check your email for the confirmation code for completing your registration...</p>
                </div>
             
                
            </div>
        </div>
        <!-- Contact End -->

<?php include('nav/footer.php'); ?><?php include('nav/scripts.php'); ?>
    </body>
</html>
