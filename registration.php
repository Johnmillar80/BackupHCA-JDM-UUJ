<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
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
    $address =($_REQUEST['address']);
    $address = mysqli_real_escape_string($con,$address);
    $university =($_REQUEST['university']);
    $university = mysqli_real_escape_string($con,$university);
    $qualification =($_REQUEST['qualification']);
    $qualification = mysqli_real_escape_string($con,$qualification);
    $employer =($_REQUEST['employer']);
    $employer = mysqli_real_escape_string($con,$employer);
    $nhs_employee_code =($_REQUEST['nhs_employee_code']);
    $nhs_employee_code = mysqli_real_escape_string($con,$nhs_employee_code);    
        $query = "INSERT into `users` (username, password, email, trn_date, address, university, qualification, employer, nhs_employee_code)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date', '$address', '$university', '$qualification', '$employer', '$nhs_employee_code')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
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
<input type="address" name="address" placeholder="Address" required />
<input type="university" name="university" placeholder="University" required />
<input type="qualification" name="qualification" placeholder="Qualification" required />
<input type="employer" name="employer" placeholder="Employer" required />
<input type="nhs_employee_code" name="nhs_employee_code" placeholder="NHS Employee Code" required />
<input type="submit" name="submit" value="Register" />
<p>Return to our Homepage? <a href='index.html'>Home</a></p>
</form>
</div>
<?php } ?>
</body>
</html>