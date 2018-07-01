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
move_uploaded_file($_FILES["galleryimage"]["tmp_name"],"uploadsgallery/" . $_FILES["galleryimage"]["name"]);			
$location=$_FILES["galleryimage"]["name"];
$title=$_POST['title'];
$description=$_POST['description'];

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO gallery_image (title, description, gallery_head_img)
VALUES ('$title', '$description', '$location')";

$conn->exec($sql);
echo "<script>alert('Successfully Added!!!'); window.location='gallery.php'</script>";
// }
}
// }
?>