<?php 
// error_reporting(0);
session_start();
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to FOOD PARADISE</title>
    <?php include '../Admin/links.php'; ?>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login-1.css">
</head>
<body>
<script>
        $(document).ready(function(){
        // Add smooth scrolling to all links
        $("a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){
        
                // Add hash (#) to URL when done scrolling (default click behavior)
                // window.location.hash = hash;
            });
            } // End if
        });
        });
    </script>
    <div class="container-fluid" id="banner">
        <div class="row title-row">
            <div class="col-lg-12 text-center">
                <!-- <h1>Food Paradise</h1> -->
            </div>
        </div>
        <div id="buttons">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="animation-h2">Order Your Meal at home</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                        <a class="button-a" href="login.php">Login</a>
                        <a class="button-a" href="#CreateAccount">Create Account</a>
                        <a class="button-a" href="loginAsGuest.php">guest</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ====================================================================== -->
    <!--  crt ac -->
    <!-- ========================================================================= -->
    <section id="CreateAccount">
    <form method="POST">
                <div class="container" in="main">
                    <div class="row justify-content-center inner">
                    
                        <div class="col-md-5 inner2">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h1>CREATE ACCOUNT</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <p>Username</p>
                                    <input class="input" type="text" name="username" required>
                                    <p>Email</p>
                                    <input class="input" type="text" name="email" required>
                                    <p>Password</p>
                                    <input class="input" type="password" name="password" required>
                                    <p>Address</p>
                                    <input class="input" type="text" name="address" required>
                                    <p>Mobile no</p>
                                    <input class="input" type="text" name="mobileno" onkeyup="if(/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="10" required>
                                    <input class="btn" type="submit" name="SubmitForAcCreation" value="Create Account">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <a href="login.php">L O G I N</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <?php 
        include 'conn.php';
        if(isset($_POST['SubmitForAcCreation']))
        {
            // $email = mysqli_real_escape_string($con, $_POST['email']) ;
            $email = $_POST['email'];
            $email_ver_query = "SELECT * FROM `user` WHERE `email`='$email' ";
            $result = mysqli_query($con,$email_ver_query);
            $email_count = mysqli_num_rows($result);
            if($email_count > 0)
            {
                ?>
                <script>
                swal("Oppps!", "Email already exist", "error");
                </script>
                <?php
            }
            else
            {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $address = $_POST['address'];
                $mobileno = $_POST['mobileno'];

                $insert = "INSERT INTO `user`(`user_name`, `email`, `password`, `address`, `mobile`) VALUES ('$username','$email','$password','$address','$mobileno')";
                $insert_query = mysqli_query($con,$insert);
                if($insert_query)
                {
                    ?>
                    <script>
                         swal("Good job!", "Account create successful", "success");
                    </script>
                    <?php
                }
            }
        }
        ?>
        </form>
    </section>
</body>
</html>