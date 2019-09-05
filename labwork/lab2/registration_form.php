<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Register</title>
    </head>
<body>
    <header>
    <h1>Register!</h1>
    </header>
        <form action="process_registration.php" method="POST">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required>
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required>
            <label>Email Address:</label>
            <input type="email" name="email" id="email" required>
            <label>Password:</label>
            <input type="password" name="password" id="password" required>
            <label for="repeat_password">Confirm Password:</label>
            <input type="password" name="repeat_password" id="password" required>
            
            <button>Register</button>
        </form>
        
    <footer>Created September 2019 by Holly Nahigyan</footer>
    
</body>
    
</html>