<?php
	include("includes/config.php");
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");

	$account = new Account($con);

	// include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");

    function getInputValue($name) {
		if(isset($_POST[$name])) {
			echo $_POST[$name];
		}
	}
?>

<!DOCTYPE html>
<html>
<title>BTech-Signin</title>
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
            <div class="jumbotron css-center">
                <h1>Sign In</h1>
            </div>


            <div class="css-display-middle">
                <form id="loginForm" action="signin.php" method="POST">
                    <h2>Sign to your account</h2>
                    <br>
                    <div style="padding: 10px;">
                    <?php echo $account->getError(Constants::$loginFailed); ?>
                        <label for="loginUsername">Username:&nbsp;</label>
                        <input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. bartSimpson"
                            value="<?php getInputValue('loginUsername') ?>" required>
                    </div>
                    <div style="padding: 10px;">
                        <label for="loginPassword">Password: &nbsp;</label>
                        <input id="loginPassword" name="loginPassword" type="password" placeholder="Your password"
                            required>
                    </div>

                    <button class="btn-special" style="margin: 10px;" type="submit" name="loginButton">LOG IN</button>

                    <div class="hasAccountText">
                        <span id="hideLogin">Don't have an account yet? 
                            <a style="color: dodgerblue;" href="signup.php">Signup here.</a>
                        </span>
                    </div>

                </form>
            </div>
        </header>



        <!-- Footer -->

    </div>

    <script src="assets/js/global.js"></script>

</body>

</html>