<?php
session_start();
/**
 * code_witch
 * ebukauche52@gmail.com
 * 28th Feb, 2020
*/
require 'application/utilities/utility.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <title><?php echo Utility::APPLICATION_TITLE ?> :: Home</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet"><!--Bootstrap v4.3.1-->
        <link href="assets/css/font-awesome/css/all.min.css" rel="stylesheet"><!--Font Awesome v5.8.2-->
        <link href="assets/css/style.css" rel="stylesheet">
    </head>
    <body>
		<div id="top">
		    <!-- Top Begin -->
		    <div class="container">
		        <!-- container Begin -->
		        <div class="col-md-6 offer">
		            <!-- col-md-6 offer Begin -->
		            <a class="btn btn-success btn-sm" href="#">Welcome</a>
		            <a href="checkout.php">4 Items In Your Cart | Total Price: $300</a>
		        </div>
		        <!-- col-md-6 offer Finish -->
		        <div class="col-md-6">
		            <!-- col-md-6 Begin -->
		            <ul class="menu">
		                <!-- menu Begin -->
		                <li>
		                    <a href="customer_register.php">Register</a>
		                </li>
		                <li>
		                    <a href="checkout.php">My Account</a>
		                </li>
		                <li>
		                    <a href="cart.php">Go To Cart</a>
		                </li>
		                <li>
		                    <a href="checkout.php">Login</a>
		                </li>
		            </ul>
		            <!-- menu Finish -->
		        </div>
		        <!-- col-md-6 Finish -->
		    </div>
		    <!-- container Finish -->
		</div>
		<!-- Top Finish -->

        <script src="assets/js/jquery.min.js"></script><!--jQuery v3.4.1-->
        <script src="assets/js/bootstrap.min.js"></script><!--Bootstrap v4.3.1-->
    </body>
</html>