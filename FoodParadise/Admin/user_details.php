<?php 
include 'conn.php';
include 'links.php';

$select = "SELECT * FROM `user` WHERE `id`!= 3";
$select_query=mysqli_query($con,$select);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A | UserDetails</title>
    <link rel="stylesheet" href="css/userdetails.css">
</head>
<body>
<?php  
include 'menu.php';
?>
    <div class="container">
        <div class="row justify-content-center mainofheader">
            <div class="col-md-2 text-center headerfortable">User Name</div>
            <div class="col-md-2 text-center headerfortable">Email Id</div>
            <div class="col-md-2 text-center headerfortable">Password</div>
            <div class="col-md-2 text-center headerfortable">Address</div>
            <div class="col-md-2 text-center headerfortable">Mobile No</div>
        </div>
        <?php 
        while($res = mysqli_fetch_array($select_query))
        {
            ?>
                <div class="row justify-content-center rowofrow">
                    <div class="col-md-2 text-center rowoftable"><?php echo $res['user_name']?></div>
                    <div class="col-md-2 text-center rowoftable"><?php echo $res['email']?></div>
                    <div class="col-md-2 text-center rowoftable"><?php $len = strlen($res['password']); for($i=0;$i<$len;$i++){echo "*";} ?></div>
                    <div class="col-md-2 text-center rowoftable"><?php echo $res['address']?></div>
                    <div class="col-md-2 text-center rowoftable"><?php echo $res['mobile']?></div>
                </div>
            <?php
        }
        ?>
    </div>
</body>
</html>