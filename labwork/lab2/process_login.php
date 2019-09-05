<?php
 // Capture data from log in form
 $email = $_POST['email'];
 $password = $_POST['password'];
 
 // Create variables to match email and pw against
 $correct_email = 'test@test.com';
 $correct_password = 'password123';
 
 // Check if var are empty if(!empty($_POST['email'])) {$email = $_POST['email'];}
 
 // Check data isn't empty and matches credentials on file
 if ($email == $correct_email && $password == $correct_password){
    echo '<h1>You logged in successfully!</h1>';
    echo "<p>Email Address: $email</p>";
    echo "<p>Password: $password</p>";
 } else {
     echo '<h1>Log In Fail</h1>';
     echo '<a href="login.php">Go Back</a>';
 }
 
 // Output a fun little message :)
 
 
?>