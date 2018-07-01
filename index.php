<!DOCTYPE html>
<html>
<?php include('head.php'); ?>
<body>
    <?php include('Nav.php'); ?>
<img src="images/Slideshowimg.png" id="Placeholder">
        <div class="Titlebalkjes">
            <p id="Tekeningen">Tekeningen</p>
            
        </div>

       
<!--            <div class="workMain">-->

                <div class="workBefore">
                    <h3>Different themes</h3>
                    <p>Click on an album of your choice and see the pictures of that particular album</p>
                </div>
                <?php
          require_once('cms/db.php');
$result = $conn->prepare("SELECT * FROM gallery_image ORDER BY gallery_id ASC");                           
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
$id=$row['gallery_id'];
 ?>               
                    <div id="Galleries">
                        <h2 id="Gallery-Titles"><span><?php echo $row['title']; ?></span></h2>
                        <a href="cms/fotos.php?gallery=<?php echo $id;?>"><img src="cms/uploadsgallery/<?php echo $row['gallery_head_img']; ?>"  id="workIMG" /></a>
                      
                        </div> 
        <?php }?>
            <br>
            <div style="clear:both;"></div>
            <div class="Titlebalkjes">
                <p id="Contact">Contact</p>
            </div>
<!--<img src="images/contact-us.png" id="ContactMe">-->

<!--
<div id="Contact-Form-Home">
<form name="contactform" method="post" action="send_form_email.php">
<table width="450px">
<tr>
 <td valign="top">
  <label for="first_name" class="Textjes-Home">First Name *</label>
 </td>
 </tr>
 <tr>
 <td valign="top">
  <input  type="text" name="first_name" maxlength="50" size="30" class="Inputs-Home" maxlength="10">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="last_name" class="Textjes-Home">Last Name *</label>
 </td>
</tr>
<tr>
 <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30" class="Inputs-Home" maxlength="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email" class="Textjes-Home">Email Address *</label>
 </td>
 </tr>
 <tr>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30" class="Inputs-Home" maxlength="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="comments" class="Textjes-Home">Ideas*</label>
 </td>
 </tr>
 <tr>
 <td valign="top">
  <textarea  name="comments" maxlength="1000" cols="25" rows="6" id="Last-Input-Home"></textarea>
 </td>
</tr>
<tr>
 <td>
  <input type="submit" value="Submit">
 </td>
</tr>
</table>
</form>
</div>
-->
<div id="Contact-Form">
<h2 id="CONTACT">CONTACT</h2>

<form name="contactform" method="post" action="send_form_email.php">
<table width="450px">

<tr>
 <td valign="top">
  <label for="first_name" class="Textjes">First Name *</label>
 </td>
</tr>
<tr>
 <td valign="top">
  <input  type="text" name="first_name" maxlength="50"size="30" id="First-Input" placeholder="Your Name...">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="last_name" class="Textjes">Last Name *</label>
 </td>
    </tr>
    <tr>
 <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30" class="inputs" placeholder="Your Lastname...">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email" class="Textjes">Email Address *</label>
 </td>
    </tr>
<tr>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30" class="inputs" placeholder="Enter Your Email">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="comments" class="Textjes">Idee *</label>
    </td>
    </tr>
    <tr>
 <td valign="top">
  <textarea  name="comments" maxlength="1000" cols="25" rows="6" id="Last-Input" placeholder="Heeft u een idee voor een tekening..."></textarea>
 </td>
</tr>
<tr>
 <td colspan="">
 <input type="submit" value="Submit" id="Submit-Knop">  
 </td>
</tr>
</table>
</form>
</div>
</body>

</html>