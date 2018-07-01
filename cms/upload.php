<?php

require_once ('db.php');

if (isset($_POST['Submit'])) {
// echo "";
// }else{
// $file=$_FILES['image']['tmp_name'];
// $image = $_FILES["image"] ["name"];
// $image_name= addslashes($_FILES['image']['name']);
// $size = $_FILES["image"] ["size"];
// $error = $_FILES["image"] ["error"];
// 
// if ($error > 0){
// die("Error uploading file! Code $error.");
// }else{
// 	if($size > 10000000) //conditions for the file
// 	{
// 	die("Format is not allowed or file size is too big!");
// 	}
// 	
// else
// 	{
move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);			
$location=$_FILES["image"]["name"];
$title=$_POST['title'];
$description=$_POST['description'];
$galleryId=$_POST['gallery_id'];

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO tbl_image (title, description, image_location,gallery_id)
VALUES ('$title', '$description', '$location','$galleryId')";


$conn->exec($sql);
echo "<script>alert('Successfully Added!!!'); window.location.href='index.php?gallery=" . $galleryId . "';</script>";
 }

// }
?>