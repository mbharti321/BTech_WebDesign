<!DOCTYPE html>
<html>
<title>BTech-Contact</title>
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
            <div class="">
                <div class="jumbotron css-center">
                    <h1>Contanct Us</h1>
                </div>

                <br><br>
                <div class="container-fluid css-display-middle">
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <h3><span style=" color: #008000;">For any query, email us at :-  <a
                                href="mailto:Contact@btechcareer.com"><span
                                    style="color: #0000ff;">Contact@btechcareer.com</span></a></span></h3>
                    <p>&nbsp;</p>
                    <h3><span style="color: #808000;">Our Instagram username :-  <span
                                style="color: #0000ff;">@btechcareer</span></span></h3>
                    <p>&nbsp;</p>
                    <h3><span style="color: #808000;">Our Facebook page :-  <strong><a
                                    href="https://www.facebook.com/Btechcareercom/" target="_blank"
                                    rel="noopener">https://www.facebook.com/Btechcareercom/</a></strong></span></h3>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>

                </div>
            </div>
        </header>



        <!-- Footer -->

    </div>

    <script src="assets/js/global.js"></script>

</body>

</html>