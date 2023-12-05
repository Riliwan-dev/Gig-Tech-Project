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
      $_SESSION['loginadmin'] = "true";
      $_SESSION['user_id'] = $user_id; // You can store the user's ID or other relevant information in the session
      header('location: Application-form.php');
      
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
  

if (isset($_POST['application_form'])) {
  // echo "<script>
  // alert('welcome bruh')
  // </script>";
  
  $name = $_POST['name'];
  $middlename = $_POST['middlename'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $contactInfo = $_POST['contactInfo'];
  $state = $_POST['state'];
  $localGovt = $_POST['localGovt'];
  $gender = $_POST['gender'];
  $dob = $_POST['dob'];
  $religion = $_POST['religion'];
  $maritalstatus = $_POST['maritalstatus'];
  $fullname = $_POST['fullname'];
  $relationship = $_POST['relationship'];
  $address = $_POST['address'];
  $email_address = $_POST['email_address'];
  $sponsor_number = $_POST['sponsor_number'];
  $occupation = $_POST['occupation'];
  $mr_mrs_miss = $_POST['mr_mrs_miss'];
  $trainerwellknown = $_POST['trainer'];
  $relationship_with_him = $_POST['relationship_with'];
  $how_long = $_POST['how_long'];
  $sponsor_occupation = $_POST['sponsor_occupation'];
  $dr_mr_miss = $_POST['dr_mr_miss'];
  $home_address = $_POST['home_address'];
  $work_address = $_POST['work_address'];
  $gurantor = $_POST['sponsor_occupation'];
  $any_loss = $_POST['any_loss'];
  $any_action = $_POST['any_action'];

  //$query = "INSERT INTO application_form (name,middlename,lastname,email,number,contactInfo,state,localgovt,gender,dob,religion,maritalstatus,fullname,relationship,address,email_address,sponsor_number,occupation,mr_mrs_miss,trainerwellknown,relationship_with_him,how_long,sponsor_occupation,dr_mr_miss,home_address,work_address,gurantor,any_loss,any_action) VALUES ('$name','$middlename','$lastname','$email','$number','$contactInfo','$state','$localGovt','$gender','$dob','$religion','$maritalstatus','$fullname','$relationship','$address','$email_address','$sponsor_number','$occupation','$mr_mrs_miss','$trainerwellknown','$relationship_with_him','$how_long','$sponsor_occupation','$dr_mr_miss','$home_address','$work_address','$gurantor','$any_loss','$any_action')";

   // Create a prepared statement
   $query = "INSERT INTO application_form (
    name, middlename, lastname, email, number, contactInfo, state, localgovt, gender,
    dob, religion, maritalstatus, fullname, relationship, address, email_address,
    sponsor_number, occupation, mr_mrs_miss, trainerwellknown, relationship_with_him,
    how_long, sponsor_occupation, dr_mr_miss, home_address, work_address, gurantor,
    any_loss, any_action
) VALUES (
   '$name', '$middlename', '$lastname', '$email', '$number', '$contactInfo', '$state', '$localgovt', '$gender',
    '$dob', '$religion', '$maritalstatu's, $'fullname', '$relationship', '$address', '$email_address',
    '$sponsor_number', '$occupation', '$mr_mrs_miss', '$trainerwellknown', '$relationship_with_him',
    '$how_long', '$sponsor_occupation', '$dr_mr_miss', '$home_address', '$work_address', '$gurantor',
    '$any_loss', '$any_action'
)";


  $create_application_form_query = mysqli_query($conn,$query);

  if(!$create_application_form_query){
      die('QUERY FAILED'.mysqli_error($conn));
  }else{
    echo "<script> 
          alert('Form Successfully Submited')
          </script>";
          header('location: login.php');
  }
  }


    
?>