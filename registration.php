<!--REFERENCE  Rehman, J. (2018). Simple User Registration & Login Script in PHP and MySQLi | All PHP Tricks. [online] All PHP Tricks - Web Development Tutorials and Demos. Available at: https://www.allphptricks.com/simple-user-registration-login-script-in-php-and-mysqli/ [Accessed 9 Apr. 2018]. -->

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
require('database.php');
// When register form is submitted, insert the values into the HCA database.
if (isset($_REQUEST['username'])){
        // removes backslashes
    $username =($_REQUEST['username']);
        //escapes special characters in a string
    $username = mysqli_real_escape_string($con,$username); 
    $email =($_REQUEST['email']);
    $email = mysqli_real_escape_string($con,$email);
    $password =($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);
    $trn_date = date("Y-m-d H:i:s");   

    //Insert values into the Administration table in HCA Database
        $query = "INSERT into `administration` (username, email,  password, trn_date)
VALUES ('$username', '$email', '".md5($password)."', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>Thank You For Registering! </h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
<p>Return to our Homepage? <a href='../index.html'>Home</a></p>
</form>
</div>
<?php } ?>
</body>
</html>