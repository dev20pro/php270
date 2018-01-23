<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- meta tage for the internet explorer edge mode -->
    <title>Computer Online Shop</title>
<!-- Css files -->
    <link rel="stylesheet" media="all" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" media="all" type="text/css" href="css/style.css">
<!-- Javascript Files -->
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.js"></script>
</head>
<body>
<!-- Header Starts Here -->
<div class='container-fluid'>
    <header>
        <div class='row' id='navbar'>
                <div class='col-sm-4' id='lang'> <!-- sm for screen = or > 768pixels wide -->
                <div>
                   <span class="fa fa-square-o">  Choose Language :
                       <span><img src='images/header/flag-1.png'></span>
                       <span><img src='images/header/flag-2.png'></span>
                       <span><img src='images/header/flag-3.png'></span>
                   </span><br/>
                   <span class="fa fa-square-o">  Currencies :
                      <select>
                         <option value='us'>Us Dollar</option>
                         <option value='pak'>Pak Rupee</option>
                         <option value='europian'>Europian Currency</option>
                      </select>
                   </span>
                   </div>
                </div> <!-- end of col-sm-4 -->

                <div class='col-sm-5' id='top-nav'>
                    <div>
                        <span class="fa fa-caret-square-o-right"> Special</span>
                        <span class="fa fa-caret-square-o-right"> Create an Account</span><br/>
                        <span class="fa fa-caret-square-o-right"> Search</span>
                        <span class="fa fa-caret-square-o-right"> Coustomer Login</span><br/>
                        <span class="fa fa-caret-square-o-right"> Contact Us</span>
                    </div>
                </div> <!-- end of col-sm-5 -->

                <div class='col-sm-3' id='cart'>
                    <div><span><img src='images/header/cart.png'>    Shopping Cart</span><br/>
                    <span>Now in Your cart <span>5 items</span></span>
                </div>
                </div> <!-- end of col-sm-3 -->
        </div> <!-- end of row -->
<div id='header-bottom-line' class='row'></div><!-- for the bootom line below navigation -->
<div id='slider' class='row'><img src='images/slider/slider.png' alt='slider'></div> <!-- div for the slider -->

<!-- navigation menu starts here -->

<nav class="navbar navbar-inverse">
  <!-- <div class="container"> -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div id='menu' class='row'>
    <div class="collapse navbar-collapse" id="myNavbar">
    <div class='row nav navbar-nav' id='menu_elem'>
    <a href='' class='active'><div class='col-sm-2 btn-primary'><span>HOME PAGE</span></div></a>
    <a href=''> <div class='col-sm-2 btn-primary'><span> PRODUCTS</span></div></a>
    <a href=''><div class='col-sm-2 btn-primary'><span>SPECIALS</span></div></a>
    <a href=''><div class='col-sm-2 btn-primary'><span>MY ACCOUNT</span></div></a>
    <a href=''> <div class='col-sm-2 btn-primary'><span>CONTACT US</span></div></a>
    <a href=''> <div class='col-sm-2 btn-primary'><span>ABOUT US</span></div></a>
    </div>
    </div>
    <!-- </div> -->
  </div>
</nav>
<div id='header-bottom' class='row'></div>
<!--***************** end of header *************************-->

<!-- Main body starts here -->
<div class='row' id='main_body'>
    <div class='col-sm-3' id='sidebar'>
        <div>
            <div></div>
            <div id='category'><span>CATEGORIES</span></div>
            <div id='category-list'>
            <div><span class="fa fa-caret-square-o-right"><a href=''> Desktop</a></span></div><br/>
            <div><span class="fa fa-caret-square-o-right"><a href=''> Notebooks</a></span></div><br/>
            <div><span class="fa fa-caret-square-o-right"><a href=''> Tablet PCs</a></span></div><br/>
            <div><span class="fa fa-caret-square-o-right"><a href=''> Servers</a></span></div><br/>
            <div><span class="fa fa-caret-square-o-right"><a href=''> Storage</a></span></div><br/>
            <div><span class="fa fa-caret-square-o-right"><a href=''> Networking</a></span></div><br/>
            <div><span class="fa fa-caret-square-o-right"><a href=''> Digital Display</a></span></div><br/>
            <div><span class="fa fa-caret-square-o-right"><a href=''> Digital Cameras</a></span></div><br/>
            <div><span class="fa fa-caret-square-o-right"><a href=''> Remanufactured</a></span></div><br/>
            <div><span class="fa fa-caret-square-o-right"><a href=''> Fax Machines</a></span></div><br/>

            </div>
            <div id='specials'></div>
            <div id='specials-heading'><span>SPECIALS</span></div>
        </div>
    </div> <!-- end of col-sm-4 -->
    <div class='col-sm-4'>2</div> <!-- end of col-sm-4 -->
    <div class='col-sm-4'>3</div> <!-- end of col-sm-4 -->
</div>
<!-- main body ends here -->
</div>    <!-- class container fluid ends here -->




<!-- here we have the jquery file -->
              <script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>

</body>
</html>