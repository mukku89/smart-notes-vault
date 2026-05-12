<?php

session_start();

if(!isset($_SESSION['user']))
{
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html>
<head>

<title>Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="style.css">

</head>
<body>

<nav class="navbar navbar-dark">
<div class="container">

<a class="navbar-brand" href="#">
Dashboard
</a>

<div>
<a href="add_note.php" class="btn btn-warning me-2">
Add Notes
</a>

<a href="view_notes.php" class="btn btn-light me-2">
View Notes
</a>

<a href="logout.php" class="btn btn-danger">
Logout
</a>
</div>

</div>
</nav>

<div class="container mt-5">

<div class="card p-5 shadow text-center">

<h1>
Welcome To Smart Notes Vault
</h1>

<p>
Manage your study notes smartly.
</p>

</div>

</div>

<div class="container mt-5">

<button onclick="darkMode()"
class="btn btn-dark mb-4">

Dark Mode

</button>

</div>
</body>
</html>