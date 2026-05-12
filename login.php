<?php

session_start();

include 'connect.php';

if(isset($_POST['login']))
{

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users
WHERE email='$email'
AND password='$password'";

$result = mysqli_query($conn,$sql);

$count = mysqli_num_rows($result);

if($count>0)
{
    $_SESSION['user']=$email;

    header('location:dashboard.php');
}
else
{
    echo "Invalid Email or Password";
}

}

?>

<!DOCTYPE html>
<html>
<head>

<title>Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container mt-5">
<div class="row justify-content-center">
<div class="col-md-5">

<div class="form-box">

<h2 class="text-center mb-4">
Login
</h2>

<form method="POST">

<input type="email"
name="email"
class="form-control mb-3"
placeholder="Enter Email"
required>

<input type="password"
name="password"
class="form-control mb-3"
placeholder="Enter Password"
required>

<button type="submit"
name="login"
class="btn btn-dark w-100">

Login

</button>

</form>

</div>

</div>
</div>
</div>

</body>
</html>