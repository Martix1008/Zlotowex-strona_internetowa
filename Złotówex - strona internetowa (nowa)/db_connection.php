<?php

$db = mysqli_connect("localhost","Marcin","Martix1008","Kontakt");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>