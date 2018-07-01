<?php include('head.php'); ?>
<a class="active" href="index.php" class="Home-Button"><div class="Home-Button"></div></a>
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
  <input  type="text" name="first_name" maxlength="50" size="30" id="First-Input" placeholder="Your Name...">
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