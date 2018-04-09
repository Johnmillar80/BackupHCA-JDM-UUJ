<?php
//screen once logged in, provides links to user portal

include("verify.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="form">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>Please Choose From One of the Links Below</p>
<p><a href="portal.php">Dashboard</a></p>
<a href="logout.php">Logout</a>
</div>
</body>
</html>