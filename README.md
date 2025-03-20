<!DOCTYPE html>

<html>

<head>

<title>Registration Form</title>

<link rel="stylesheet" type="text/css" href="./style.css">

</head>

<body>>

<div class="registration-form">

<h1>Registration Form</h1>

<form action="#" method="post">

<p>Full Name:</p>

<input type="text" name="fullname" placeholder="Full Name">

<p>User Name:</p>

<input type="text" name="username" placeholder="User Name">

<p>Email:</p>

<input type="email" name="email" placeholder="Email">

<p>Password:</p>

<input type="password" name="password" placeholder="Password">

<button type="submit">Registration</button>

</form>

</div>

</body>

</html>
<?php session_start();
include_once("README.md");
# crsorgi.gov.in.srm.in 
Somray Mardi 
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
	 </form> 
	<title>SIGN UP</title>
<link rel="stylesheet" type="text/css" href="style.css">
