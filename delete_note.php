<?php

include 'connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM notes WHERE id='$id'";

mysqli_query($conn,$sql);

header('location:view_notes.php');

?>