<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... (your head content) ... -->
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
        <form method="post" action="" id="loginForm">
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" value="<?php if(isset($_GET['email'])){echo $_GET['email'];} ?>" placeholder="example@gmail.com" required>
                <div id="emailError" class="error-message"></div>
            </div>
            <div>
                <?php if (isset($_GET['password'])) { ?>
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Min 8 Character" maxlength="8" required>
                    <div id="passwordError" class="error-message"></div>
                <?php } ?>
            </div>
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

        document.getElementById('loginForm').addEventListener('submit', function(event) {
            // Reset previous error messages
            document.getElementById('emailError').textContent = '';
            document.getElementById('passwordError').textContent = '';

            // Add your validation logic here
            if (/* Your email validation condition */) {
                document.getElementById('emailError').textContent = 'Invalid email format';
                event.preventDefault();
            }

            if (/* Your password validation condition */) {
                document.getElementById('passwordError').textContent = 'Password must be at least 8 characters';
                event.preventDefault();
            }
        });
    </script>
</body>
</html>
