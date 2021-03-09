
<?php 
error_reporting(0);
 include 'conn.php';
 session_start();
 if(!isset($_SESSION['guest']))
 {
    if(!isset( $_SESSION['user_email']))
    {
        header('location:main.php');
    }
 }
 
?>
<!DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>- HOME -</title>
    <?php
    include '../Admin/links.php';
    ?>
    <link rel="stylesheet" href="css/home.css">
</head>
<body onload="myfunc()">
        <div id="loading" style="backdrop-filter: blur(10px);position: fixed;height: 100vh;width: 100%;background: #fff0 url(images/preloder/dish.png) no-repeat center;z-index: 99999999;background-size: 120px 120px;">
        </div>
        <script>// preloder
       
       function myfunc()
       {
            document.getElementById('loading').style.display="none"; 
       }</script>

<!-- ===================================================================================== -->
    <?php
     include 'menu.php';
    ?>
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
            }, 1800, function(){
        
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
            } // End if
        });
        });
    </script>
    <!-- preloder -->
    
    <div class="container-fluid" id="banner">
        <div class="row">
            <div class="col-md-12 text-center align-middle">
            
                <!-- <div class="sign">
                        <span class="fast-flicker">b</span>rea<span class="flicker">t</span>he
                </div> -->
                <h1 class="fast-flicker animation-text-home"><b>F <SPAN class="flicker">OO</SPAN> D P A R <span class="flicker">A</span>  D I S E</b></h1>
                <P class="animation-p">“There is no better reward for hard work than good food,<BR> Good food never fail in bringing people together.”</P>
            </div>
        </div>
    </div>
<!-- ============================================================================================ -->
<button onclick="topFunction()" id="myBtn" class="mybtn" title="Go to top">&nbsp;&nbsp; ^ &nbsp;&nbsp;</button>

    <section id="offers">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="title-h1">- O F F E R S -</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php 
                
                    $select_offers = "SELECT * FROM `items_master` WHERE `category`='Offers'";
                    $offers_query = mysqli_query($con,$select_offers);
                    // $offers_res = mysqli_fetch_array($offers_query);
                    while($offers_res = mysqli_fetch_array($offers_query))
                    {
                        ?>
                        <div class="col-md-3 text-center" id="imgs">
                            <img  src="../Admin/<?php echo $offers_res['item_photo'];?>" height="200px" width="254px">
                        </div>
                        <?php
                    }

                ?>
            </div>
        </div>
    </section>
    <!-- ===================================================================================== -->
    <section id="chinese">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="title-h1">- C H I N E S E -</h1>
                </div>
            </div>
            <div class="row justify-content-center" id="itemCont">
                
                <?php 
               
                $selq = "SELECT * FROM `items_master` WHERE `category`='Chinese'";
                $selectquery = mysqli_query($con,$selq);
                // $result = mysqli_fetch_array($selectquery);
                // $imglink = $result['item_phpto'];
                // echo $imglink;
                
                while ($res = mysqli_fetch_array($selectquery))
                {
                    // echo $res['item_photo'];
                    $productID = $res['id'];
                    ?>
                        <div class="col-lg-3" id="card" >
                                <!-- image -->
                            <div class="row justify-content-center" id="row-img">
                                <div class="col-md-12 text-center">
                                <img class="cst_img" src="../Admin/<?php echo $res['item_photo'];?>" height="160px" width="254px">
                                </div>
                            </div>
                            <!-- name -->
                            <div class="row" id="row-name">
                                <div class="col-md-12 text-center">
                    
                                    <p><?php echo $res['item_name'] ;?></p>
                                </div>
                            </div>
                            <!-- category -->
                            <div class="row" id="row-cate">
                                <div class="col-md-12 text-center">
                                    <span><?php echo $res['category'];?></span>
                                </div>
                            </div>
                            <!-- address -->
                            <div class="row" id="row-cate">
                                <div class="col-md-12 text-center">
                                    <span><?php echo $res['address'];?></span>
                                </div>
                            </div>
                            <!-- rating -->
                            <div class="row" id="row-rate">
                                <div class="col-md-12 text-center">
                                    <span><i class="fa fa-star"> </i><?php echo " ".$res['rating'];?></span>
                                    <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                                    <span><?php echo $res['miniutes'];?> Mins</span>
                                    <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                                    <span><?php echo $res['price'];?> &#8377;</i></span>
                                </div>
                            </div>
                            <!-- type -->
                            <div class="row" id="row-type">
                                <div class="col-md-12 text-center">
                                    <span><?php echo $res['type'];?></span>
                                </div>
                            </div>
                            
                            <div class="row" id="row-btn">
                                <div class="col-md-12 text-center">
                                    <a href="viewdetails.php?id=<?php echo $productID;?> "><input class="btn" type="submit" value="&#128065; view details"></a>
                                </div>
                            </div>
                        </div>
                    <?php
                }
                ?>
            </div>
            
        </div>
    </section>
    <!-- ============================================================================================== -->
    <section id="south-indian">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="title-h1">- S O U T H - I N D I A N -</h1>
                </div>
            </div>
            <div class="row justify-content-center" id="itemCont">
                
                <?php 
               
                $selq = "SELECT * FROM `items_master` WHERE `category`='South Indian'";
                $selectquery = mysqli_query($con,$selq);
                // $result = mysqli_fetch_array($selectquery);
                // $imglink = $result['item_phpto'];
                // echo $imglink;
                
                while ($res = mysqli_fetch_array($selectquery))
                {
                    // echo $res['item_photo'];
                    $productID = $res['id'];
                    ?>
                        <div class="col-lg-3" id="card">
                                <!-- image -->
                            <div class="row justify-content-center" id="row-img">
                                <div class="col-md-12 text-center">
                                <img  class="cst_img" src="../Admin/<?php echo $res['item_photo'];?>" height="160px" width="254px">
                                </div>
                            </div>
                            <!-- name -->
                            <div class="row" id="row-name">
                                <div class="col-md-12 text-center">
                                    <p><?php echo $res['item_name'] ;?></p>
                                </div>
                            </div>
                            <!-- category -->
                            <div class="row" id="row-cate">
                                <div class="col-md-12 text-center">
                                    <span><?php echo $res['category'];?></span>
                                </div>
                            </div>
                            <!-- address -->
                            <div class="row" id="row-cate">
                                <div class="col-md-12 text-center">
                                    <span><?php echo $res['address'];?></span>
                                </div>
                            </div>
                            <!-- rating -->
                            <div class="row" id="row-rate">
                                <div class="col-md-12 text-center">
                                    <span><i class="fa fa-star"> </i><?php echo " ".$res['rating'];?></span>
                                    <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                                    <span><?php echo $res['miniutes'];?> Mins</span>
                                    <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                                    <span><?php echo $res['price'];?> &#8377;</i></span>
                                </div>
                            </div>
                            <!-- type -->
                            <div class="row" id="row-type">
                                <div class="col-md-12 text-center">
                                    <span><?php echo $res['type'];?></span>
                                </div>
                            </div>
                            
                            <div class="row" id="row-btn">
                                <div class="col-md-12 text-center">
                                    <a href="viewdetails.php?id=<?php echo $productID;?> "><input class="btn" type="submit" value="&#128065; view details" href=""> </a>
                                </div>
                            </div>
                        </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>

    <!-- =============================================================================================== -->

    <section id="north-indian">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="title-h1">- N O R T H - I N D I A N -</h1>
                </div>
            </div>
            <div class="row justify-content-center" id="itemCont">
                
                <?php 
               
                $selq = "SELECT * FROM `items_master` WHERE `category`='North Indian'";
                $selectquery = mysqli_query($con,$selq);
                // $result = mysqli_fetch_array($selectquery);
                // $imglink = $result['item_phpto'];
                // echo $imglink;
                
                while ($res = mysqli_fetch_array($selectquery))
                {
                    // echo $res['item_photo'];
                    $productID = $res['id'];
                    ?>
                        <div class="col-lg-3" id="card">
                                <!-- image -->
                            <div class="row justify-content-center" id="row-img">
                                <div class="col-md-12 text-center">
                                <img  class="cst_img" src="../Admin/<?php echo $res['item_photo'];?>" height="160px" width="254px">
                                </div>
                            </div>
                            <!-- name -->
                            <div class="row" id="row-name">
                                <div class="col-md-12 text-center">
                                    <p><?php echo $res['item_name'] ;?></p>
                                </div>
                            </div>
                            <!-- category -->
                            <div class="row" id="row-cate">
                                <div class="col-md-12 text-center">
                                    <span><?php echo $res['category'];?></span>
                                </div>
                            </div>
                            <!-- address -->
                            <div class="row" id="row-cate">
                                <div class="col-md-12 text-center">
                                    <span><?php echo $res['address'];?></span>
                                </div>
                            </div>
                            <!-- rating -->
                            <div class="row" id="row-rate">
                                <div class="col-md-12 text-center">
                                    <span><i class="fa fa-star"> </i><?php echo " ".$res['rating'];?></span>
                                    <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                                    <span><?php echo $res['miniutes'];?> Mins</span>
                                    <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                                    <span><?php echo $res['price'];?> &#8377;</i></span>
                                </div>
                            </div>
                            <!-- type -->
                            <div class="row" id="row-type">
                                <div class="col-md-12 text-center">
                                    <span><?php echo $res['type'];?></span>
                                </div>
                            </div>
                            
                            <div class="row" id="row-btn">
                                <div class="col-md-12 text-center">
                                    <a href="viewdetails.php?id=<?php echo $productID;?> "><input class="btn" type="submit" value="&#128065; view details" href=""> </a>
                                </div>
                            </div>
                        </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>

    <!-- =================================================================================================== -->

    <section id="fast-food">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="title-h1">- F A S T - F O O D -</h1>
                </div>
            </div>
            <div class="row justify-content-center" id="itemCont">
                
                <?php 
               
                $selq = "SELECT * FROM `items_master` WHERE `category`='Fast Food'";
                $selectquery = mysqli_query($con,$selq);
                // $result = mysqli_fetch_array($selectquery);
                // $imglink = $result['item_phpto'];
                // echo $imglink;
                
                while ($res = mysqli_fetch_array($selectquery))
                {
                    // echo $res['item_photo'];
                    $productID = $res['id'];
                    ?>
                        <div class="col-lg-3" id="card">
                                <!-- image -->
                            <div class="row justify-content-center" id="row-img">
                                <div class="col-md-12 text-center">
                                <img  class="cst_img" src="../Admin/<?php echo $res['item_photo'];?>" height="160px" width="254px">
                                </div>
                            </div>
                            <!-- name -->
                            <div class="row" id="row-name">
                                <div class="col-md-12 text-center">
                                    <p><?php echo $res['item_name'] ;?></p>
                                </div>
                            </div>
                            <!-- category -->
                            <div class="row" id="row-cate">
                                <div class="col-md-12 text-center">
                                    <span><?php echo $res['category'];?></span>
                                </div>
                            </div>
                            <!-- address -->
                            <div class="row" id="row-cate">
                                <div class="col-md-12 text-center">
                                    <span><?php echo $res['address'];?></span>
                                </div>
                            </div>
                            <!-- rating -->
                            <div class="row" id="row-rate">
                                <div class="col-md-12 text-center">
                                    <span><i class="fa fa-star"> </i><?php echo " ".$res['rating'];?></span>
                                    <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                                    <span><?php echo $res['miniutes'];?> Mins</span>
                                    <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                                    <span><?php echo $res['price'];?> &#8377;</i></span>
                                </div>
                            </div>
                            <!-- type -->
                            <div class="row" id="row-type">
                                <div class="col-md-12 text-center">
                                    <span><?php echo $res['type'];?></span>
                                </div>
                            </div>
                            
                            <div class="row" id="row-btn">
                                <div class="col-md-12 text-center">
                                    <a href="viewdetails.php?id=<?php echo $productID;?> "><input class="btn" type="submit" value="&#128065; view details" href=""> </a>
                                </div>
                            </div>
                        </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
    <!-- ====================================================================================== -->

    <section id="pizza">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="title-h1">- P I Z Z A -</h1>
                </div>
            </div>
            <div class="row justify-content-center" id="itemCont">
                
                <?php 
               
                $selq = "SELECT * FROM `items_master` WHERE `category`='Pizza'";
                $selectquery = mysqli_query($con,$selq);
                // $result = mysqli_fetch_array($selectquery);
                // $imglink = $result['item_phpto'];
                // echo $imglink;
                
                while ($res = mysqli_fetch_array($selectquery))
                {
                    // echo $res['item_photo'];
                    $productID = $res['id'];
                    ?>
                        <div class="col-lg-3" id="card">
                                <!-- image -->
                            <div class="row justify-content-center" id="row-img">
                                <div class="col-md-12 text-center">
                                <img  class="cst_img" src="../Admin/<?php echo $res['item_photo'];?>" height="160px" width="254px">
                                </div>
                            </div>
                            <!-- name -->
                            <div class="row" id="row-name">
                                <div class="col-md-12 text-center">
                                    <p><?php echo $res['item_name'] ;?></p>
                                </div>
                            </div>
                            <!-- category -->
                            <div class="row" id="row-cate">
                                <div class="col-md-12 text-center">
                                    <span><?php echo $res['category'];?></span>
                                </div>
                            </div>
                            <!-- address -->
                            <div class="row" id="row-cate">
                                <div class="col-md-12 text-center">
                                    <span><?php echo $res['address'];?></span>
                                </div>
                            </div>
                            <!-- rating -->
                            <div class="row" id="row-rate">
                                <div class="col-md-12 text-center">
                                    <span><i class="fa fa-star"> </i><?php echo " ".$res['rating'];?></span>
                                    <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                                    <span><?php echo $res['miniutes'];?> Mins</span>
                                    <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                                    <span><?php echo $res['price'];?> &#8377;</i></span>
                                </div>
                            </div>
                            <!-- type -->
                            <div class="row" id="row-type">
                                <div class="col-md-12 text-center">
                                    <span><?php echo $res['type'];?></span>
                                </div>
                            </div>
                            
                            <div class="row" id="row-btn">
                                <div class="col-md-12 text-center">
                                    <a href="viewdetails.php?id=<?php echo $productID;?> "><input class="btn" type="submit" value="&#128065; view details" href=""> </a>
                                </div>
                            </div>
                        </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
    <!-- =============================================================================================== -->
    <section id="sweets">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="title-h1">- S W E E T S -</h1>
                </div>
            </div>
            <div class="row justify-content-center" id="itemCont">
                
                <?php 
               
                $selq = "SELECT * FROM `items_master` WHERE `category`='Sweets'";
                $selectquery = mysqli_query($con,$selq);
                // $result = mysqli_fetch_array($selectquery);
                // $imglink = $result['item_phpto'];
                // echo $imglink;
                
                while ($res = mysqli_fetch_array($selectquery))
                {
                    // echo $res['item_photo'];
                    $productID = $res['id'];
                    ?>
                        <div class="col-lg-3" id="card">
                                <!-- image -->
                            <div class="row justify-content-center" id="row-img">
                                <div class="col-md-12 text-center">
                                <img  class="cst_img" src="../Admin/<?php echo $res['item_photo'];?>" height="160px" width="254px">
                                </div>
                            </div>
                            <!-- name -->
                            <div class="row" id="row-name">
                                <div class="col-md-12 text-center">
                                    <p><?php echo $res['item_name'] ;?></p>
                                </div>
                            </div>
                            <!-- category -->
                            <div class="row" id="row-cate">
                                <div class="col-md-12 text-center">
                                    <span><?php echo $res['category'];?></span>
                                </div>
                            </div>
                            <!-- address -->
                            <div class="row" id="row-cate">
                                <div class="col-md-12 text-center">
                                    <span><?php echo $res['address'];?></span>
                                </div>
                            </div>
                            <!-- rating -->
                            <div class="row" id="row-rate">
                                <div class="col-md-12 text-center">
                                    <span><i class="fa fa-star"> </i><?php echo " ".$res['rating'];?></span>
                                    <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                                    <span><?php echo $res['miniutes'];?> Mins</span>
                                    <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                                    <span><?php echo $res['price'];?> &#8377;</i></span>
                                </div>
                            </div>
                            <!-- type -->
                            <div class="row" id="row-type">
                                <div class="col-md-12 text-center">
                                    <span><?php echo $res['type'];?></span>
                                </div>
                            </div>
                            
                            <div class="row" id="row-btn">
                                <div class="col-md-12 text-center">
                                    <a href="viewdetails.php?id=<?php echo $productID;?> "><input class="btn" type="submit" value="&#128065; view details" href=""> </a>
                                </div>
                            </div>
                        </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>
</body>
</html>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 1300 || document.documentElement.scrollTop > 1300) {
    mybutton.style.display = "block";
    // document.getElementById('menu').style.background="#808000";
  } else {
    mybutton.style.display = "none";
    // document.getElementById('menu').style.background=" #1F2124";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

// 
// 
// jquery
var images = ["bg1.jpg", "bg2.jpg", "bg3.jpg", "bg5.jpg", "bg8.jpg", "bg9.jpg", "bg10.jpg","bg11.jpg","bg12.jpg"];
        $(function () {
            var i = 0;
            $("#banner").css("background-image", "linear-gradient(90deg, #0000009c, #0000009c),url(images/" + images[i] + ")");
            $("#banner").css("background-size","cover");
            setInterval(function () {
                i++;
                if (i == images.length) {
                    i = 0;
                }
                $("#banner").fadeOut("slow", function () {
                    $(this).css("background-image", "linear-gradient(90deg, #0000009c, #0000009c),url(images/" + images[i] + ")");
                    $("#banner").css("background-size","cover");
                    $(this).fadeIn("slow");
                });
            }, 5000);
        });

        
      
</script>
