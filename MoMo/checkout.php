<!DOCTYPE >
<?php
    session_start();
    include("functions/functions.php");
?>

<html>
<head>

    <title>Chechout | MoMo</title>

        <!-- FONTS -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,100;1,200;1,300;1,500;1,700;1,800&display=swap" rel="stylesheet">
        <!-- CSS FILE -->
            <link rel="stylesheet" href="styles/style.css" media="all">

</head>

<body>

    <!-- NAVIGATION BAR STARTS HERE -->
    <div class="menubar">
            <div class="icon">
                <img  class="logo" src="images/logo.png" alt="">
            </div>
                
            <ul id="menu">
                <li><a href="index.php">HOME</a></li>
                <li><a href="all_products.php">ALL PRODUCTS</a></li>
                <li><a href="customer/my_account.php">MY ACCOUNTS</a></li>
                <li><a href="customer_register.php">SIGN UP</a></li>
                <li><a href="cart.php">SHOPPING CART</a></li>
            </ul>
                
            <div id="form">
		        <form method="get" action="results.php" enctype="multipart/form-data">
		            <input class="searchbar" type="text" name="user_query" placeholder="Feel Free To Search" />
		            <input class="btn" type="submit" name="search" value="search" />
		        </form>
            </div>
        </div>
        <div style="background-image: url('images/bg2.jpg');
                    background-repeat: no-repeat;
                    background-position: center; 
                    background-size: cover; 
                    height:100%">
        </div> 
    <!-- NAVIGATION BAR ENDS HERE -->
         

    <!-- CONTENT MENU BAR SECTION START HERE -->
        <?php cart(); ?>
        <div id=shopping_cart>
            <!-- CONTENT MENU BAR INLINE CSS -->       
            <span style="float: center; font-size: 18px; padding: 10px; line-height: 40px">
            <b>Welcome ! &emsp;</b>
            <i>Total Items:<?php total_items(); ?>&emsp;</i>
            <b>Total Price:<?php total_price(); ?>&emsp;</b>
            <!-- GO TO CART INLINE CSS -->
            <a href="cart.php" style="color: yellow; text-decoration: none">                    
            <i>Cart &emsp;</i></a>
            <!-- &emsp; USED FOR CREATING SPACE -->
                   
            <?php
                if(!isset($_SESSION['customer_email'])){
                }

                else
                {
                    echo "<a href='logout.php' style='color:red; text-decoration:none'>Logout</a>";
                }
            ?>
            </span>
        </div> 
    <!-- CONTENT MENU BAR SECTION END HERE -->

<div class="container">

    <!-- SIDE MENU SECTION START HERE -->
        <div id="sidebar">
            <div id="sidebar_title">Categories</div>
                <ul id="cats">
                    <?php  getCats();  ?> 
                </ul>

            <div id="sidebar_title">Brands</div>
                <ul id="cats">
                    <?php  getBrands();  ?>
                </ul> 
        </div>
    <!-- SIDE MENU SECTION END HERE -->
             
    <!-- PRODUCT SECTION START HERE -->
        <div id="products_box" style="background-image: url('images/bg6.jpg');
                                      background-repeat: no-repeat;
                                      background-position: center; 
                                      background-size: cover;">
        <button style=" background-color: #04AA6D; color: white; padding: 12px; border: none; width: 50%; margin:100px; border-radius: 3px; cursor: pointer; font-size: 17px; margin-bottom: 100px;"><a href="payment.php">pay now</a></button> 

			<?php
			    if(!isset($_SESSION['customer_email'])){
                    include("customer_login.php");
                }
                
                else{
                    include("payment.php");
                }
            ?>
        </div>
    <!-- PRODUCT SECTION END HERE -->

</div>

    <!-- FOOTER SECTION START HERE -->
        <div id="footer">
            <div class="feature">
                <img class="icon11" src="images/icons/quality-service.png" alt="">
                <div class="FeastureDesc">
                    <p class="FeastureDesc1">High quality</p>
                    <p class="FeastureDesc2">crafted from top materials</p>
                </div>       
            </div>

            <div class="feature">
                <img class="icon11" src="images/icons/warranty.png" alt="">
                <div class="FeastureDesc">
                    <p class="FeastureDesc1">Warrany Protection</p>
                    <p class="FeastureDesc2">Over 2 years</p>
                </div>       
            </div>

            <div class="feature">
                <img class="icon11" src="images/icons/delivery.png" alt="">
                <div class="FeastureDesc">
                    <p class="FeastureDesc1">Free Shipping</p>
                    <p class="FeastureDesc2">Order over 150 $</p>
                </div>       
            </div>

            <div class="feature">
                <img class="icon11" src="images/icons/support.png" alt="">
                <div class="FeastureDesc">
                    <p class="FeastureDesc1">24 / 7 Support</p>
                    <p class="FeastureDesc2">Dedicated support</p>
                </div>
            </div>
    <!-- FOOTER SECTION START HERE -->

</body>
</html>
