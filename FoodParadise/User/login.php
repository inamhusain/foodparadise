<?php 
error_reporting(0);
session_destroy();
session_start();
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <?php 
    include '../Admin/links.php';
    ?>
    <link rel="stylesheet" href="css/login-1.css">
</head>
<body>
    <div id="login">
        <form method="POST">
                <div class="container" in="main">
                    <div class="row justify-content-center inner">
                        
                        <div class="col-md-5 inner2">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h1>LOGIN</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <p>Email</p>
                                    <input class="input" type="text" name="email" required>
                                    <p>Password</p>
                                    <input class="input" type="password" name="pass" required>
                                    <input class="btn" type="submit" name="SubmitForLogin" value="LOGIN">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <a href="main.php">Create Account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                
                if(isset($_POST['SubmitForLogin']))
                {
                $email_text = $_POST['email'];
                $password_text = $_POST['pass'];
               
                $select_query = "SELECT * FROM `user` WHERE `email`='$email_text' AND `password`='$password_text'";
                $result_query = mysqli_query($con,$select_query);
                $res = mysqli_fetch_array($result_query);
                 $admin_username = $res['email'];
                 $admin_password = $res['password'];
                $count = mysqli_num_rows($result_query);
                if($admin_username=="admin" || $admin_password=="admin")
                {
                        header('location:http://localhost:8080/FoodParadise/admin/index.php');
                }
                else
                {
                    if($count > 0)
                    {
                        $_SESSION['user_email']=$email_text;
                        header("Location: home.php");
                    }
                    else
                    {
                        ?>
                            <script>
                                swal("Oppps!", "Email or Password Not Match", "error");
                            </script>
                        <?php
                    }
                }
            }
            // else{echo "Failed";}

                ?>
        </form>
    </div>
</body>
</html>