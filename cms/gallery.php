<body>
   
    <div class="row-fluid">
        <div class="span12">


         
             <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
     
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
		
        <link href="modal/css1/bootstrap1.css" rel="stylesheet" type="text/css" media="screen">
		
        <link href="modal/css1/bootstrap1.css" rel="stylesheet" type="text/css" media="screen">
     <script src="modal/js1/jquery1.js" type="text/javascript"></script>
<script src="modal/js1/bootstrap1.js" type="text/javascript"></script>

            <div class="container">
			

                
                        <?php include ('modal_gallery_add.php'); ?>
                        
                   
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            
                            <thead>
                                <tr>
                                    <th style="text-align:center;">Galleries</th>
                                
                                
                                </tr>
                            </thead>
                            <tbody>
							<?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM gallery_image ORDER BY gallery_id ASC");
                            
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['gallery_id'];
							?>
								<tr>
								<td style="text-align:center; margin-top:10px; word-break:break-all; width:450px; line-height:100px;">
									<?php if($row['gallery_head_img'] != ""): ?>
									<img src="uploadsgallery/<?php echo $row['gallery_head_img']; ?>" width="300px" height="300px" style="border:1px solid #333333;">
									<br>
									<h1 style=" margin-left:25px; font-size:30px;"><?php echo $row['title']; ?></h1>
					
									<?php else: ?>
									<img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333;">
									<?php endif; ?>
									
								</td>
								</tr>
								<tr>
								<td>
								<a href="index.php?gallery=<?php echo $id;?>"  data-toggle="modal"  class="btn btn-warning" >Open</a>
								 <a href="#updte_img<?php echo $id;?>"  data-toggle="modal"  class="btn btn-warning" >Update Gallery Image</a>
								<a href="#delete<?php echo $id;?>"  data-toggle="modal"  class="btn btn-danger" >Delete </a>
								</td>
								</tr>
								<!-- Modal -->
							<div id="delete<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-header">
							<h3 id="myModalLabel">Delete</h3>
							</div>
							<div class="modal-body">
							<div class="alert alert-danger">
							<?php if($row['gallery_head_img'] != ""): ?>
							<img src="uploadsgallery/<?php echo $row['gallery_head_img']; ?>" width="100px" height="100px" style="border:1px solid #333333;">
							<?php else: ?>
							<img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333; margin-left:15px;">
							<?php endif; ?>
							<b style="color:blue; margin-left:25px; font-size:30px;"><?php echo $row['title']?></b>
							<br />
							<p style="font-size: larger; text-align: center;">Are you Sure you want to Delete?</p>
							</div>
							<hr>
							<div class="modal-footer">
							<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">No</button>
							<a href="gallery_delete.php<?php echo '?gallery_id='.$id; ?>" class="btn btn-danger">Yes</a>
							</div>
							</div>
							</div>
	                         		<!-- Modal Update Image -->
	                         		
								<div id="updte_img<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-header">
							<h3 id="myModalLabel">Update</h3>
							</div>
							<div class="modal-body">
							<div class="alert alert-danger">
							<?php if($row['gallery_head_img'] != ""): ?>
							<img src="uploadsgallery/<?php echo $row['gallery_head_img']; ?>" width="100px" height="100px" style="border:1px solid #333333; margin-left: 30px;">
							<?php else: ?>
							<img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333; margin-left: 30px;">
							<?php endif; ?>
							<form action="edit_gallery_PDO.php<?php echo '?gallery_id='.$id; ?>" method="post" enctype="multipart/form-data"><p>Click to change your image.</p>
							<div style="color:blue; margin-left:150px; font-size:30px;">
							<div>
				            <input type="file" name="galleryimage" style="margin-top:-115px;">
                                </div>
							</div>
							</div>
							<hr>
							<div class="modal-footer">
							<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">No</button>
							<button type="submit" name="submit" class="btn btn-danger">Yes</button>
							</form>
							</div>
							</div>
							</div>
								<?php } ?>
                            </tbody>
                        </table>


          
        </div>
        </div>
        </div>
    </div>


</body>
</html>
