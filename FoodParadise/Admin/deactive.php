<?php 
    include 'conn.php';
    $ID = $_GET['pid'];
    $update_query = mysqli_query($con,"UPDATE `items_master` SET `status`= 'deactive' WHERE `id`=$ID");
    if($update_query)
    {
        Header('location:list_items.php');
    }
?>