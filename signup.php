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
        <h1>Welcome,</h1>
        <p>Sign up to create new account</p>
        <form>
            <div>
                <label for="email">First Name</label>
                 <input type="text" placeholder="Enter first name" required>
            </div>
            <div>
                <label for="email">Last Name</label>
                 <input type="text" placeholder="Enter last name" required>
            </div>
            <div>
                <label for="email">Email</label>
                 <input type="text" placeholder="example@gmail.com" required>
            </div>
            <div>
                <label for="password">Password*</label>
                 <input type="password" placeholder="Min 8 Character" maxlength="8" required>
            </div>
            <button type="submit">Continue</button>
            <div>
                <p>Already have an account?  <a href="login.php">Sign in</a></p>
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
      </script>
</body>
</html>