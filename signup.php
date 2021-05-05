<?php
	include("includes/config.php");
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");

	$account = new Account($con);

	include("includes/handlers/register-handler.php");
	// include("includes/handlers/login-handler.php");

    function getInputValue($name) {
		if(isset($_POST[$name])) {
			echo $_POST[$name];
		}
	}
?>


<!DOCTYPE html>
<html>
<title>BTech-Signup</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/sign.css">
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
        <header class="bgimg-1 w3-display-container  w3-grayscale-min" id="home">
            <div class="">
                <div class="jumbotron w3-center">
                    <h1>Sign Up</h1>
                </div>
                <div class="w3-display-middle " style="transform: translate(-50%, -27%); ">
                    <form id="registerForm" action="signup.php" method="POST" style="height:400px;overflow-y:auto">
                        <h2>Create your free account</h2>
                        <div style="padding: 10px;">
                        <?php echo $account->getError(Constants::$usernameCharacters); ?>
							<?php echo $account->getError(Constants::$usernameTaken); ?>
							<label for="username">Username</label>
							<input id="username" name="username" type="text" placeholder="e.g. bartSimpson" value="<?php getInputValue('username') ?>" required>
                        </div>

                        <div style="padding: 10px;">
                        <?php echo $account->getError(Constants::$firstNameCharacters); ?>
							<label for="firstName">First name</label>
							<input id="firstName" name="firstName" type="text" placeholder="e.g. Bart" value="<?php getInputValue('firstName') ?>" required>
                        </div>

                        <div style="padding: 10px;">
                        <?php echo $account->getError(Constants::$lastNameCharacters); ?>
							<label for="lastName">Last name</label>
							<input id="lastName" name="lastName" type="text" placeholder="e.g. Simpson" value="<?php getInputValue('lastName') ?>" required>
                        </div>

                        <div style="padding: 10px;">
                        <?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
							<?php echo $account->getError(Constants::$emailInvalid); ?>
							<?php echo $account->getError(Constants::$emailTaken); ?>
							<label for="email">Email</label>
							<input id="email" name="email" type="email" placeholder="e.g. bart@gmail.com" value="<?php getInputValue('email') ?>" required>
                        </div>

                        <div style="padding: 10px;">
                        <label for="email2">Confirm email</label>
							<input id="email2" name="email2" type="email" placeholder="e.g. bart@gmail.com" value="<?php getInputValue('email2') ?>" required>
                        </div>

                        <div style="padding: 10px;">
                        <?php echo $account->getError(Constants::$passwordsDoNoMatch); ?>
							<?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
							<?php echo $account->getError(Constants::$passwordCharacters); ?>
							<label for="password">Password</label>
							<input id="password" name="password" type="password" placeholder="Your password" required>
                        </div>

                        <div style="padding: 10px;">
                        <label for="password2">Confirm password</label>
							<input id="password2" name="password2" type="password" placeholder="Your password" required>
                        </div>

                        <button type="submit" class="btn-special" style="margin: 10px;" name="registerButton">SIGN
                            UP</button>

                        <div class="hasAccountText">
                            <span id="hideRegister">Already have an account?
                                <a style="color: dodgerblue;" href="signin.php">Log in here.</a>
                            </span>
                        </div>

                    </form>
                </div>
            </div>
        </header>


        <!-- Footer -->

    </div>

    <script src="assets/js/global.js"></script>

</body>

</html>