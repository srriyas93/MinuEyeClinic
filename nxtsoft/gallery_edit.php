<!-- Include Header --> 
<?php
    include('page_header.php');
?>
<!-- Include Database Configuration -->
<?php 
    include('dbconfig.php');
?>
<!-- Include Left Side Bar --> 
<?php
    include('page_left-sidebar.php');
?>
<!-- Include Right Side Bar --> 
<?php
    include('page_right-sidebar.php');
?>
<!-- Main Content -->
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Edit Gallery</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php"><i class="zmdi zmdi-home"></i> Home</a></li>
                        <li class="breadcrumb-item active">Edit Gallery</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <?php
                        $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect...');
                        $sno = $_GET['sno'];

                        $q = "SELECT gallery_title,gallery_image,created_date,updated_date,CASE status WHEN 1 THEN 'Active' WHEN 0 THEN 'Inactive' 
                        END AS status FROM mec_gallery WHERE sno=$sno";

                        $r3 = mysqli_query($con, $q);
                        $num1=mysqli_num_rows($r3);
                        
                        if (mysqli_num_rows($r3) > 0){
                            while ($row = mysqli_fetch_array($r3)) {
                                $gallery_title=$row['gallery_title'];
                                $gallery_image=$row['gallery_image'];
                                $status=$row['status'];
                                
                                $gallery_created_date = strtotime($row['created_date']);
                                $gallery_created_date = date("d-m-Y", $gallery_created_date);

                                $gallery_updated_date = strtotime($row['updated_date']);
                                $gallery_updated_date = date("d-m-Y", $gallery_updated_date);

                                 $path = $GLOBALS['BASE_URL'].$GLOBALS['GALLERY_FOLDER'].$gallery_image;
                                
                                
echo'   <div class="container-fluid">
        <form id="FrmeaddNewsPop"name="FrmeaddNewsPop" action="gallery-addFun.php" enctype="multipart/form-data" method="POST">
            <div class="row clearfix">
                <div class="col-sm-12">
                <div class="form-group">
                    <input id="gallery_edit_sno" name="gallery_edit_sno" type="hidden"  class="form-control" value='.$sno.' >
                </div>
                <div class="col-sm-12">
                <strong>Title*</strong>
                    <div class="form-group">
                        <input id="gallery_edit_title" name="gallery_edit_title" type="text" class="form-control" value="'.$gallery_title.'" required/>
                    </div>
                </div>
            <div class="col-sm-12">
                <strong>Image*</strong>(600px*400px)
                <div class="form-group">
                    <input id="gallery_edit_image" name="gallery_edit_image" type="file" class="form-control" />
                    
                    <img class="img-fluid img-thumbnail" src="'.$path.'" style="width:20%;" alt=""> 
                </div>
            </div>
        
            <div class="col-sm-12">
                <strong>Published Date*</strong>
                <div class="form-group">
                    <input id="gallery_edit_created_date" name="gallery_edit_created_date" type="text" class="form-control" value='.$gallery_created_date.' disabled>
                </div>
            </div>
            <div class="col-sm-12">
                <strong>Last Updated On*</strong>
                <div class="form-group">
                    <input id="gallery_edit_updated_date" name="gallery_edit_updated_date" type="text" class="form-control" value='.$gallery_updated_date.' disabled>
                </div>
            </div>
            <div class="col-sm-12">
                <strong>Current Status*</strong>
                <div class="form-group">
                    <input id="gallery_edit_status" name="gallery_edit_status" type="text" class="form-control" value='.$status.' disabled>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" name="edit" class="btn btn-danger waves-effect">EDIT</button>
                <button type="button" class="btn btn-danger bg-grey waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </form>
    </div>';                            }   }?>
</div>
</section>

<!-- Include Footer -->

<?php
    include('page_footer.php');
?>