<?php

$conn = mysqli_connect(
"localhost",
"root",
"",
"studyvault_db",
3307
);

if(!$conn)
{
    die("Connection Failed");
}

?>