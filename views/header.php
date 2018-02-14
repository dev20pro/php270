
<?php
    // Setting the Base HOST
    define('BASE_HOST', "http://" . $_SERVER['HTTP_HOST'] . "/");
    // Setting the Base Folder
    define('BASE_FOLDER' , "php270/");
    // Setting the Base Url
    define('BASE_URL', BASE_HOST . BASE_FOLDER);
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- meta tage for the internet explorer edge mode -->
    <title>Computer Online Shop</title>
<!-- Css files -->
    <link rel="stylesheet" media="all" type="text/css" href=<?php echo BASE_URL. "css/bootstrap.css"; ?> >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" media="all" type="text/css" href=<?php echo BASE_URL."css/style.css";?> >
<!-- Javascript Files -->
    <script src=<?php echo BASE_URL."js/jquery.js"; ?> ></script>
    <script src=<?php BASE_URL."js/bootstrap.js"; ?> ></script>

</head>
<body>
<div class='container-fluid' id='wrapper'>
    <!-- header-top starts here -->
<div class='row' id='header-top'>
   <nav class='navbar navbar-default'>
            <!--Start of Div for creating the button for collapsing menu on smaller screens-->
            <div class='navbar-header'>
                <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#my-navbar'>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                </button>
            </div>
            <!--End Of Div for creating the button for collapsing menu on smaller screens-->
            <div class='collapse navbar-collapse' id='my-navbar'>
                <div class='row'>
                <div class='col-sm-4'>1</div>
                <div class='col-sm-4'>2</div>
                <div class='col-sm-4'>3</div>
            </div>
                <!-- div for border of header-bottom starts here  -->
                <div class='row header-bottom-border'></div>
                    <!-- div for border of header-bottom ends here  -->
                    <!-- Div for slider starts here -->
                <div class='row slider'>
                <img src=<?php echo BASE_URL."images/slider/slider.png"; ?>>
                </div>
                    <!-- div for slider ends here -->
                    <!-- Div for navigation bar starts here -->
                <div class='row my-menu'>
                <div class='menu-top-design'></div> <!-- div for the top color design of the menu -->
                <ul class='nav navbar-nav'>
                    <li><a href='<?php echo (BASE_URL); ?>'>HOME PAGE</a></li>
                    <li><a href='<?php echo (BASE_URL); ?>'>NEW PRODUCTS</a></li>
                    <li><a href='<?php echo (BASE_URL); ?>'>SPECIALS</a></li>
                    <li><a href='<?php echo (BASE_URL); ?>'>MY ACCOUNT</a></li>
                    <li><a href='<?php echo (BASE_URL); ?>'>CONTACT US</a></li>
                </ul>
            </div>
        </nav> <!-- end of div with col-sm-4 and class of shoping cart -->
</div>
    <!-- Header top-ends here  -->
    <!-- Div for navigation bar ends here -->