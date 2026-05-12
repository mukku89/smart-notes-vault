<?php

include 'connect.php';

if(isset($_GET['search']))
{

$search = $_GET['search'];

$sql = "SELECT * FROM notes

WHERE title LIKE '%$search%'

OR subject LIKE '%$search%'

ORDER BY id DESC";

}
else
{

$sql = "SELECT * FROM notes
ORDER BY id DESC";

}

$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>

<head>

<title>View Notes</title>

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

<div>

<a href="add_note.php"
class="btn btn-warning me-2">

Add Notes

</a>

<button onclick="darkMode()"
class="btn btn-light">

Dark Mode

</button>

</div>

</div>

</nav>

<div class="container mt-5">

<h1 class="text-center mb-4">

All Study Notes

</h1>

<form method="GET" class="mb-5">

<div class="row">

<div class="col-md-10">

<input type="text"

name="search"

class="form-control"

placeholder="Search by title or subject">

</div>

<div class="col-md-2">

<button type="submit"
class="btn btn-dark w-100">

Search

</button>

</div>

</div>

</form>

<div class="row">

<?php

while($row=mysqli_fetch_assoc($result))
{

?>

<div class="col-md-6 mb-4">

<div class="card shadow border-0 rounded-4 p-4 h-100">

<h3>

<?php echo $row['title']; ?>

</h3>

<h5 class="text-muted">

<?php echo $row['subject']; ?>

</h5>

<p>

<?php echo substr($row['content'],0,250); ?>

...

</p>

<p class="text-secondary">

Created:
<?php echo $row['created_at']; ?>

</p>

<a href="read_note.php?id=<?php echo $row['id']; ?>"
class="btn btn-dark mb-2">

Read Notes

</a>

<div class="mt-3">

<a href="edit_note.php?id=<?php echo $row['id']; ?>"

class="btn btn-warning">

Edit

</a>

<a href="delete_note.php?id=<?php echo $row['id']; ?>"

class="btn btn-danger"

onclick="return confirm('Are you sure?')">

Delete

</a>

</div>

</div>

</div>

<?php

}

?>

</div>

</div>

<script src="script.js"></script>

</body>

</html>