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
<title>BTech-Service</title>
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
            <div class="div-scroll">
                <div class="jumbotron css-center">
                    <h1>Services</h1>
                </div>
                <div class="container-fluid">
                    <h3 style="text-align: justify; padding: 0vw 3vw "><a>Btechcareer.com</a><span> provides
                            you with all the details and opportunities that you require to build your career in
                            engineering.
                            <br> Here </span><span>we
                            provide with best btech college for your career. We also provide best training and
                            internship here which will help you in building your career for future. </span><span>
                                
                            <br> B.Tech
                            stands for Bachelor of Technology. It is an undergraduate degree programme which can be done
                            after completing class 12 who </span><span>have
                            studied PCM or after completing diploma. It is a four year programme. This  engineering
                            degree is awarded to the students after </span><span>completing
                            their four years successfully. Engineering is offered by many engineering colleges including
                            NITs and IITs  </span>
                            <span><a href="https://btechcareer.com/">btechcareer.com</a> provide all application up to
                                date Entrance Exam Internship Application And Placement company Application
                                .</span></h3>
                </div>
            </div>
    </div>

    </header>



    <!-- Footer -->

    </div>

    <script src="assets/js/global.js"></script>

</body>

</html>