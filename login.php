<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="images/gig.png">
    
    <title>Gig-tech consults and solution</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="symbol/all.css">
</head>
<body>
    <div class="back">
        <i class="fas fa-light fa-arrow-left" onclick="goBack()"></i>
    </div>
    <div class="wrapper">
        <a href="index.php"><img src="images/gig.png" alt=""></a>
        <h1>Hi, there</h1>
        <p>Sign in to access your account</p>

        <?php include("include/validate.php");?>

        <form method="post" action="">
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" value="<?php if(isset($_GET['email'])){echo $_GET['email'];} ?>" placeholder="example@gmail.com" required>
            </div>
            <div>
                <?php if (isset($_GET['password'])) { ?>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Min 8 Characters" maxlength="8" required>
                    <?php } ?>
                </div>
                <img src="images/show.png" alt="show password" id="togglePassword" onclick="togglePasswordVisibility()">
            <!-- ... other fields ... -->
            <button type="submit" name="login">Continue</button>
            <div>
                <p>Not registered yet? <a href="Payment_Details.php">Sign up</a></p>
            </div>
        </form>
    </div>
    <div class="image">
        <img src="images/Mask Group.0f3abb35.png" alt="">
    </div>

    <script>
        function goBack() {
            window.history.back();
        }

        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            var togglePasswordImg = document.getElementById("togglePassword");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                togglePasswordImg.src = "images/eye-off-icon.png"; // Image for hiding the password
            } else {
                passwordInput.type = "password";
                togglePasswordImg.src = "eye-icon.png"; // Image for showing the password
            }
        }
    </script>
</body>
</html>
