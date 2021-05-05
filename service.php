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
                    <a href="signin.php" class="css-bar-item css-button btn-login"> Sign In | Up</a>
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
            <a href="signin.php" class="css-bar-item css-button login"> Sign In | Up</a>
        </nav>

        <!-- Header with full-height image -->
        <header class="bgimg-1 css-display-container  css-grayscale-min" id="home">
            <div class="div-scroll">
                <div class="jumbotron css-center">
                    <h1>Services</h1>
                </div>
                <div class="container-fluid">
                    <h6 style="text-align: center;"><a
                            style="font-size: 15px; font-family: var( --e-global-typography-text-font-family ), Sans-serif; background-color: #ffffff;"
                            href="https://btechcareer.com/" target="_blank" rel="noopener">Btechcareer.com</a><span
                            style="color: #3a3a3a; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen-Sans, Ubuntu, Cantarell, 'Helvetica Neue', sans-serif; font-size: 15px; font-style: normal; font-weight: 400;"> provides
                            you with all the details and opportunities that you require to build your career in
                            engineering. Here </span><span
                            style="color: #3a3a3a; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen-Sans, Ubuntu, Cantarell, 'Helvetica Neue', sans-serif; font-size: 15px; font-style: normal; font-weight: 400;">we
                            provide with best btech college for your career. We also provide best training and
                            internship here which will help you in building your career for future. </span><span
                            style="color: #3a3a3a; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen-Sans, Ubuntu, Cantarell, 'Helvetica Neue', sans-serif; font-size: 15px; font-style: normal; font-weight: 400;">B.Tech
                            stands for Bachelor of Technology. It is an undergraduate degree programme which can be done
                            after completing class 12 who </span><span
                            style="color: #3a3a3a; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen-Sans, Ubuntu, Cantarell, 'Helvetica Neue', sans-serif; font-size: 15px; font-style: normal; font-weight: 400;">have
                            studied PCM or after completing diploma. It is a four year programme. This  engineering
                            degree is awarded to the students after </span><span
                            style="color: #3a3a3a; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen-Sans, Ubuntu, Cantarell, 'Helvetica Neue', sans-serif; font-size: 15px; font-style: normal; font-weight: 400;">completing
                            their four years successfully. Engineering is offered by many engineering colleges including
                            NITs and IITs  </span><span
                            style="color: #3a3a3a; font-family: var( --e-global-typography-text-font-family ), Sans-serif;"><span
                                style="background-color: #ffffff;"><a
                                    href="https://btechcareer.com/">btechcareer.com</a> provide all application up to
                                date Entrance Exam Internship Application And Placement company Application
                                . </span></span></h6>
                </div>
            </div>
    </div>

    </header>



    <!-- Footer -->

    </div>

    <script src="assets/js/global.js"></script>

</body>

</html>