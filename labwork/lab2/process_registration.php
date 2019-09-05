<?php
 // Capture data from log in form
 $first_name = $_POST['first_name'];
 $last_name = $_POST['last_name'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $repeat_password = $_POST['repeat_password'];
 $full_name = first_name .' ' . $last_name;
 
 // Create variables to match email and pw against
 $correct_first_name = 'Jane';
 $correct_last_name = 'Doe';
 $correct_email = 'test@test.com';
 $correct_password = 'password123';
 $correct_repeat_password = 'password123';
 
 // Check if var are empty if(!empty($_POST['email'])) {$email = $_POST['email'];}
 
 // Check data isn't empty and matches credentials on file
 if ($first_name == $correct_first_name && $last_name == $correct_last_name && $email == $correct_email && $password == $correct_password && repeat_password == $correct_repeat_password ){
    echo '<h1>You have registered successfully!</h1>';
    echo '<p>$full_name</p>';
    echo "<p>Email Address: $email</p>";
    echo "<p>Password: $password</p>";
 } else {
     echo '<h1>Registration Fail</h1>';
     echo '<a href="login.php">Go Back</a>';
 }
 
 // Output a fun little message :)
 
 
?>