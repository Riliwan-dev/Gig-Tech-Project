<?php
include("include/config.php");
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if (isset($_POST['login'])) {
//     $email = $_POST["email"];
//     $password = $_POST["password"]; // Assuming you have a password field

//     // Perform validation
//     $errors = array();

//     // Validate email
//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         $errors[] = "Invalid email format";
//     }

//     // Other validation if needed
//     // ...

//     if (empty($errors)) {
//         // Validation passed, perform further actions (e.g., check against database)
//         // ...

//         // For this example, let's simulate a successful login
//         echo "Login successful!";
//     } else {
//         // Display validation errors
//         foreach ($errors as $error) {
//             echo $error . "<br>";
//         }
//     }
// }
// }]
//   if (isset($_POST['login'])) {
//     $pwd = $_POST['password'];
//     if(isset($_GET['password']) && empty($pwd)){
//         echo 'pass';
//     }else{
//     if (isset($_POST['login'])) {

//     }
        
//     }
//   }

  if (isset($_POST['register'])) {
    // echo 'registered';
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $insert = "INSERT INTO registered 
    (firstname, lastname, email, password) VALUES
    ('$firstname', '$lastname', '$email', '$password')";
  
    $insert_query = mysqli_query($conn,$insert);

    if(!$insert_query){
        ECHO 'FAILED';
    }else{
        echo 'inserted';
    }
  }

  if (isset($_POST['login'])) {
    $email = $_POST['email'];

  if (isset($_GET['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $select = "SELECT * FROM registered WHERE email = '$email'AND password ='$password'"; 
    $sql = mysqli_query($conn,$select);
    if(mysqli_num_rows($sql)>0){
      header('location: Application-form.html');
      
    }else{
    echo "password is incorrect";
    }

    // echo "pass";
  }else{
    $email = $_POST['email'];
    $select = "SELECT * FROM registered WHERE email = '$email'"; 
    $sql = mysqli_query($conn,$select);
    if(mysqli_num_rows($sql)>0){
      header('location: ?password&email='.$email);
      
    }else{
      header('location: Payment_Details.php');
    }
    
  }
}
  


?>