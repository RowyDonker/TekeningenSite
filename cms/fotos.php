<?php include('header.php'); ?>

<body>
    <div class="row-fluid">
        <div class="span12">


         
<a id="btn_about" href="../index.php">Back to Home</a>
           <h1 id="h1work">WELKOM</h1>
            <div class="container">

              
                      

                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <tbody>
                            <?php
                                require_once('db.php');
                                $gallery_id=$_GET['gallery'];
                                $result2 = $conn->prepare("SELECT * FROM tbl_image WHERE gallery_id=" . $gallery_id);
                                $result2->execute();
                                $result = $conn->prepare("SELECT * FROM tbl_image ORDER BY tbl_image_id ASC");
                                $result->execute();
                                for($i=0; $row = $result->fetch(); $i++){
                                for($i=0; $row = $result2->fetch(); $i++){
                                $id=$row['tbl_image_id'];                              
                            ?>
                            
                            <div class="workMain">
                                    <?php if($row['image_location'] != ""): ?>
                                    <img src="uploads/<?php echo $row['image_location']; ?>" id="InGalleryIMG">
                                    <?php else: ?>
                                    <img src="images/default.png" width="100px" height="100px">
                                    <?php endif; ?>
                                
                            </div> 
                                        
                
                                <?php } }?>
                            </tbody>
                        </table>


          
        </div>
        </div>
        </div>
    </div>


</body>
</html>

