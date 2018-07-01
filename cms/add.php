<?php
require_once('db.php');

$title= $_POST['title'];
$description= $_POST['description'];
$address= $_POST['address'];
$email= $_POST['email'];

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO gallery_image (title,description, address, email)
VALUES ('$title','$description', '$address', '$email')";

$conn->exec($sql);
echo "<script>alert('Account successfully added!'); window.location='index.php'</script>";
?>