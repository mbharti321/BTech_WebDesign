<!DOCTYPE html>
<html>
<title>BTech-About</title>
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

    <div class="main-container w3-card">

        <div class="w3-padding-16">
            <div class="w3-bar" style="overflow: unset;" id="myNavbar">
            <a href="index.php" class="w3-bar-item w3-button w3-wide w3-large"
                    style="color: #0082c6; "><b>BTechCareer</b></a>
                <!-- Right-sided navbar links -->
                <div class="w3-right w3-hide-small">
                    <a href="index.php" class="w3-bar-item w3-button"> HOME</a>
                    <a href="about.php" class="w3-bar-item w3-button"> ABOUT</a>
                    <a href="product.php" class="w3-bar-item w3-button"> PRODUCT</a>
                    <a href="service.php" class="w3-bar-item w3-button"> SERVICE</a>
                    <a href="contact.php" class="w3-bar-item w3-button"> CONTACT</a>
                    <a href="signin.php" class="w3-bar-item w3-button btn-login"> Sign In | Up</a>
                </div>
                <!-- Hide right-floated links on small screens and replace them with a menu icon -->

                <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium"
                    onclick="w3_open()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </div>

        <!-- Sidebar on small screens when clicking the menu icon -->
        <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large"
            style="display:none" id="mySidebar">
            <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close
                ×</a>
            <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button"> HOME</a>
            <a href="about.php" onclick="w3_close()" class="w3-bar-item w3-button"> ABOUT</a>
            <a href="product.php" onclick="w3_close()" class="w3-bar-item w3-button"> PRODUCT</a>
            <a href="service.php" onclick="w3_close()" class="w3-bar-item w3-button"> SERVICE</a>
            <a href="contact.php" onclick="w3_close()" class="w3-bar-item w3-button"> CONTACT</a>
            <a href="signin.php" class="w3-bar-item w3-button login"> Sign In | Up</a>
        </nav>
        
        <!-- Header with full-height image -->
        <header class="bgimg-1 w3-display-container  w3-grayscale-min " id="home">
            <div class="div-scroll">
                <div class="jumbotron w3-center">
                    <h1>About Us</h1>
                </div>

                <div class="container-fluid " style="text-align: justify; ">
                    <p>Our team btechcareer.com provides you with all the details and opportunities that you require to
                        build
                        your career in engineering. Here
                        we provide with best btech college for your career. We also provide best training and internship
                        here
                        which will help you in building your career for future.
                        B.Tech stands for Bachelor of Technology. It is an undergraduate degree programme which can be
                        done
                        after completing class 12 who
                        have studied PCM or after completing diploma. It is a four year programme. This engineering
                        degree
                        is
                        awarded to the students after
                        completing their four years successfully. Engineering is offered by many engineering colleges
                        including
                        NITs and IITs. It is all About Btech Course.</p>

                    <ul>
                        List of B.Tech Courses<br />
                        1. B.Tech- Computer Science and engineering<br />
                        2. B.Tech- Aeronautical Engineering<br />
                        3. B.Tech- Automobile Engineering<br />
                        4. B.Tech- Biotechnology<br />
                        5. B.Tech- Civil Engineering<br />
                        6. B.Tech- Electrical and Electronics Engineering<br />
                        7. B.Tech- Mechanical Engineering<br />
                        8. B.Tech- Electronics and Communication<br />
                    </ul>

                    
                </div>
            </div>
        </header>



        <!-- Footer -->

    </div>

    <script src="assets/js/global.js"></script>

</body>

</html>