	    <!-- Button to trigger modal -->
	   <a class="btn btn-primary" href="../index.php" data-toggle="modal">Go Back</a>
    <a class="btn btn-primary" href="#myModal" data-toggle="modal">Click Here To Add Gallery</a>
	<br>
	<br>
	<br>
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">

<h3 id="myModalLabel">Add</h3>
</div>
<div class="modal-body">
<form method="post" action="upload_gallery.php"  enctype="multipart/form-data">
<table class="table1">

	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">Title</label></td>
		<td width="30"></td>
		<td><input type="text" name="title" placeholder="Title" required maxlength="30"/></td>
	</tr>
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">Description</label></td>
		<td width="30"></td>
        <td><textarea type="text" name="description" placeholder="Description..." rows="10" cols="30"></textarea></td>
	</tr>
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">Select your Image</label></td>
		<td width="30"></td>
		<td><input type="file" name="galleryimage"></td>
	</tr>
</table>
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button type="submit" name="Submit" class="btn btn-primary">Upload</button>
    </div>
</form>
</div>			