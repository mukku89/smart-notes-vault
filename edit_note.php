<?php

include 'connect.php';

$id = $_GET['id'];

$select = "SELECT * FROM notes WHERE id='$id'";

$result = mysqli_query($conn,$select);

$row = mysqli_fetch_assoc($result);

if(isset($_POST['update']))
{

$title = $_POST['title'];
$subject = $_POST['subject'];
$content = $_POST['content'];

$update = "UPDATE notes
SET
 title='$title',
 subject='$subject',
 content='$content'
WHERE id='$id'";

mysqli_query($conn,$update);

header('location:view_notes.php');

}

?>

<form method="POST">

<input type="text"
name="title"
value="<?php echo $row['title']; ?>">

<br><br>

<input type="text"
name="subject"
value="<?php echo $row['subject']; ?>">

<br><br>

<textarea name="content" rows="10" cols="60">
<?php echo $row['content']; ?>
</textarea>

<br><br>

<button type="submit" name="update">
Update Note
</button>

</form>