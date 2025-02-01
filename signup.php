<?php
session_start();
include("config/db.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['pass'];

    if(!empty($email) && !empty($password) && !is_numeric($email))
    {
        $query = "insert into signup (name, email , pass) values ('$name','$email','$password')" ;
        mysqli_query($con,$query);
        echo "<script type='text/javascript'> alert('Sucessfully Register') </script>"; 
    }
    else
    {
        echo "<script type='text/javascript'> alert('Please Enter some info') </script>"; 
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" type="text/css" href="css/signup.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css">
</head>
<body>
	<special-header></special-header>
    <br><br><br>
	<div class="container">
	<div class="form-container sign-in-container">
	<form method="POST">
	<h1>Sign Up</h1><br>
	<input type="name" name="name" placeholder="Name" />
	<input type="email" name="email" placeholder="Email" />
	<input type="password" name="pass" placeholder="Password" />
	</br>
	<button>Sign Up</button>	
</br>
</br>
	<p>Do you have an account ? <br><b> <a href="signin.php">Sign in</a></b></p>
	</form>
	</div>
</div>
</body>
<special-footer></special-footer>
<script src="js/navbarfooter.js"></script>
</html>

