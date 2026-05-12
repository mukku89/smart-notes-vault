<?php

include 'connect.php';

if(isset($_POST['register']))
{

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users(name,email,password)
VALUES('$name','$email','$password')";

mysqli_query($conn,$sql);

header('location:login.php');

}

?>

<!DOCTYPE html>
<html>
<head>

<title>Register</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container mt-5">
<div class="row justify-content-center">
<div class="col-md-5">

<div class="form-box">

<h2 class="text-center mb-4">
Register
</h2>

<form method="POST">

<input type="text"
name="name"
class="form-control mb-3"
placeholder="Enter Name"
required>

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
name="register"
class="btn btn-dark w-100">

Register

</button>

</form>

</div>

</div>
</div>
</div>

</body>
</html>