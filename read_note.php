<?php

include 'connect.php';

$id = $_GET['id'];

$sql = "SELECT * FROM notes WHERE id='$id'";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>

<head>

<title>
Read Notes
</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<style>

body{
    background:#f5f5f5;
    font-family:Arial;
}

.note-box{

    background:white;

    padding:40px;

    border-radius:20px;

    margin-top:40px;

    box-shadow:0px 0px 20px rgba(0,0,0,0.1);

}

.note-title{

    font-size:40px;

    font-weight:bold;

    margin-bottom:10px;

}

.note-subject{

    color:gray;

    font-size:20px;

    margin-bottom:30px;

}

.note-content{

    line-height:2;

    font-size:20px;

    white-space:pre-wrap;

}

</style>

</head>

<body>

<div class="container">

<div class="note-box">

<h1 class="note-title">

<?php echo $row['title']; ?>

</h1>

<p class="note-subject">

Subject:
<?php echo $row['subject']; ?>

</p>

<div class="note-content">

<?php echo nl2br($row['content']); ?>

</div>

</div>

</div>

</body>

</html>