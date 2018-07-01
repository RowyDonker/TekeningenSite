<?php
require_once('db.php');

$get_id=$_GET['gallery_id'];

// sql to delete a record
$sql = "Delete from gallery_image where gallery_id = '$get_id'";

// use exec() because no results are returned
$conn->exec($sql);
header('location:gallery.php');
?>