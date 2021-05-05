<?php
    include("includes/config.php");
    
    if(isset($_SESSION['userLoggedIn'])) {
        $userLoggedIn = $_SESSION['userLoggedIn'];
    }
    else {
        header("Location: signin.php");
    }
?>

<!DOCTYPE html>
<html>
<title>BTech-Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    /* Full height image header */
    .bgimg-1 {
        background-position: center;
        background-size: cover;
        background-image: url("assets/images/img-home.jpg");
        /* min-height: 92.5%; */
        /* max-height: 93%; */
        height: 100%;
    }

    .btn-special {
        border: solid blue 2px;
        border-radius: 24px;
        padding: 0px 14px;
    }


    .btn-login {
        border-radius: 33px;
        background-color: #d0eafb;
    }

    .features-list {
        padding: 10px 0px;
        color: dimgray;
        list-style: none;
        margin: 0px;
        padding-inline-start: 0px;
    }
</style>

<body>

    <div class="main-container css-card">

    <div class="css-padding-16">
            <div class="css-bar" style="overflow: unset;" id="myNavbar">
            <a href="index.php" class="css-bar-item css-button css-wide css-large"
                    style="color: #0082c6; "><b>BTechCareer</b></a>
                <!-- Right-sided navbar links -->
                <div class="css-right css-hide-small">
                    <a href="index.php" class="css-bar-item css-button"> HOME</a>
                    <a href="about.php" class="css-bar-item css-button"> ABOUT</a>
                    <a href="product.php" class="css-bar-item css-button"> PRODUCT</a>
                    <a href="service.php" class="css-bar-item css-button"> SERVICE</a>
                    <a href="contact.php" class="css-bar-item css-button"> CONTACT</a>
                    <a href="signin.php" class="css-bar-item css-button btn-login"> Logout</a>
                </div>
                <!-- Hide right-floated links on small screens and replace them with a menu icon -->

                <a href="javascript:void(0)" class="css-bar-item css-button css-right css-hide-large css-hide-medium"
                    onclick="w3_open()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </div>

        <!-- Sidebar on small screens when clicking the menu icon -->
        <nav class="css-sidebar css-bar-block css-black css-card css-animate-left css-hide-medium css-hide-large"
            style="display:none" id="mySidebar">
            <a href="javascript:void(0)" onclick="w3_close()" class="css-bar-item css-button css-large css-padding-16">Close
                ×</a>
            <a href="index.php" onclick="w3_close()" class="css-bar-item css-button"> HOME</a>
            <a href="about.php" onclick="w3_close()" class="css-bar-item css-button"> ABOUT</a>
            <a href="product.php" onclick="w3_close()" class="css-bar-item css-button"> PRODUCT</a>
            <a href="service.php" onclick="w3_close()" class="css-bar-item css-button"> SERVICE</a>
            <a href="contact.php" onclick="w3_close()" class="css-bar-item css-button"> CONTACT</a>
            <a href="signin.php" onclick="w3_close()" class="css-bar-item css-button btn-login"> Logout</a>
        </nav>

        <!-- Header with full-height image -->
        <header class="bgimg-1 css-display-container  css-grayscale-min" id="home">
            <div class=" css-text-white css-display-left " style="padding:48px">
                <span class="css-xlarge " style="color: blue;"><b>DO RESPONSIVE <br> WEB DESIGN</b></span><br>
                <span class="css-large">
                    <ul class="features-list" style="">
                        <li>Parallax design</li>
                        <li>Google optimised</li>
                        <li>SEO friendly</li>
                        <li>Business email setup</li>
                        <li>Free SSl certificate</li>
                    </ul>
                </span>
                <p><a href="about.php"
                        class="css-button btn-special css-white css-padding-large css-large css-margin-top css-opacity css-hover-opacity-off">Learn
                        more <i class="fa fa-arrow-right"></i></a></p>
            </div>
            <!-- <div class="css-display-middle">
                <img style= "height: x;" src="assets/images/img-home-2.jpg" alt="">
            </div> -->

        </header>



        <!-- Footer -->

    </div>

    <script src="assets/js/global.js"></script>

</body>

</html>