<?php

require_once ('db.php');

$get_id=$_REQUEST['gallery_id'];

move_uploaded_file($_FILES["galleryimage"]["tmp_name"],"uploadsgallery/" . $_FILES["galleryimage"]["name"]);			
$location1=$_FILES["galleryimage"]["name"];


$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "UPDATE gallery_image SET gallery_head_img ='$location1' WHERE gallery_id = '$get_id' ";

$conn->exec($sql);
echo "<script>alert('Successfully Updated!!!'); window.location='gallery.php'</script>";
?>