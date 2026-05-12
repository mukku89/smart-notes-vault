<?php

include 'connect.php';

if(isset($_POST['save']))
{

$title = mysqli_real_escape_string(
$conn,
$_POST['title']
);

$subject = mysqli_real_escape_string(
$conn,
$_POST['subject']
);

$content = mysqli_real_escape_string(
$conn,
$_POST['content']
);

$sql = "INSERT INTO notes(title,subject,content)

VALUES('$title','$subject','$content')";

mysqli_query($conn,$sql);

header('location:view_notes.php');

}

?>

<!DOCTYPE html>
<html>

<head>

<title>Add Notes</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<link rel="stylesheet" href="style.css">

</head>

<body>

<nav class="navbar navbar-dark bg-dark">

<div class="container">

<a href="dashboard.php"
class="navbar-brand">

Smart Notes Vault

</a>

<a href="view_notes.php"
class="btn btn-warning">

View Notes

</a>

</div>

</nav>

<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-md-8">

<div class="card shadow p-4 border-0 rounded-4">

<h2 class="text-center mb-4">

Add Study Notes

</h2>

<form method="POST">

<label class="mb-2">
Title
</label>

<input type="text"

name="title"

class="form-control mb-3"

placeholder="Enter Notes Title"

required>

<label class="mb-2">
Subject
</label>

<input type="text"

name="subject"

class="form-control mb-3"

placeholder="Enter Subject"

required>

<label class="mb-2">
Notes Content
</label>

<textarea

name="content"

class="form-control mb-4"

rows="12"

placeholder="Paste your notes here..."

required>

</textarea>

<button type="submit"

name="save"

class="btn btn-dark w-100">

Save Notes

</button>

</form>

</div>

</div>

</div>

</div>

</body>

</html>