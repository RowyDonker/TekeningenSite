<!--
<div id="newsH1">
    <h1>Work</h1>
</div>

<div class="workMain">

<div class="workBefore">
    <h3>Different themes</h3>
    <p>Click on an album of your choice and see the pictures of that particular album</p>
</div>

    {foreach from=$result item=oneItem}
<a href="?action=gallery"><img src="cms/uploadsgallery/{$oneItem.gallery_head_img}" id="workIMG"></a>

</div>  
    {/foreach}
         
 -->
<div id="newsH1">
    <h1>Work</h1>
</div>

<div class="workMain">

<div class="workBefore">
    <h3>Different themes</h3>
    <p>Click on an album of your choice and see the pictures of that particular album</p>
</div><?php
          require_once('db.php');
$result = $conn->prepare("SELECT * FROM gallery_image ORDER BY gallery_id ASC");                           
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
$id=$row['gallery_id'];
 ?>
<a href="cms/fotos.php?gallery=<?php echo $id;?>"><img src="cms/uploadsgallery/<?php echo $row['gallery_head_img']; ?>"  id="workIMG" ></a>

</div>  
<?php }?>
