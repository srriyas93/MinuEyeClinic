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
                    <h2>Edit Banner</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php"><i class="zmdi zmdi-home"></i> Home</a></li>
                        <li class="breadcrumb-item active">Edit Banner</li>
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
                        
                        $q = "SELECT banner_title,main_image,short_description,link_url,created_date,updated_date,CASE status WHEN 1 THEN 'Active' WHEN 0 THEN 'Inactive' 
                        END AS status FROM mec_banners WHERE sno=$sno";
                        $r3 = mysqli_query($con, $q);
                        $num1=mysqli_num_rows($r3);
                        
                        if (mysqli_num_rows($r3) > 0){
                            while ($row = mysqli_fetch_array($r3)) {
                                $banner_title=$row['banner_title'];
                                $main_image=$row['main_image'];
                                $status=$row['status'];
                                $short_description=$row['short_description'];
                                $link = $row['link_url'];
                                $banner_created_date = strtotime($row['created_date']);
                                $banner_created_date = date("d-m-Y", $banner_created_date);

                                $banner_updated_date = strtotime($row['updated_date']);
                                $banner_updated_date = date("d-m-Y", $banner_updated_date);

                                $path = $GLOBALS['BASE_URL'].$GLOBALS['BANNER_FOLDER'].$main_image;
                                                              
                                
echo'<div class="container-fluid">
        <form id="FrmeaddBannerPop"name="FrmeaddBannerPop" action="banner-addAction.php" enctype="multipart/form-data" method="POST">
            <div class="row clearfix">
                <div class="col-sm-12">
                <div class="form-group">
                    <input id="banner_edit_sno" name="banner_edit_sno" type="hidden"  class="form-control" value='.$sno.' >
                </div>
                    <strong>Banner Title*</strong>
                    <div class="form-group">
                        <input id="banner_edit_title" name="banner_edit_title" type="text"  class="form-control" value="'.$banner_title.'" required/>
                    </div>
                </div>
            <div class="col-sm-12">
                <strong>Main Image*</strong>(1920px*630px)
                    <input id="banner_edit_main_image" name="banner_edit_main_image"  type="file" class="form-control">
                   
               <img class="img-fluid img-thumbnail" src="'.$path.'" style="width:20%;" alt=""> 
            </div><br/><br/>

            <div class="col-sm-12">
                <strong>Short Description*</strong>
                <div class="form-group">
                    <input id="banner_edit_short_description" name="banner_edit_short_description" type="text" class="form-control" value="'.$short_description.'" required/>
                </div>
            </div>
             <div class="col-sm-12">
                <strong>Link URL</strong>
                <div class="form-group">
                    <input id="banner_url" name="banner_url" type="text" class="form-control" value="'.$link.'" />
                </div>
            </div>
            <div class="col-sm-12">
                <strong>Published Date*</strong>
                <div class="form-group">
                    <input id="banner_edit_created_date" name="banner_edit_created_date" type="text" class="form-control" value='.$banner_created_date.' disabled>
                </div>
            </div>
            <div class="col-sm-12">
                <strong>Last Updated On*</strong>
                <div class="form-group">
                    <input id="banner_edit_updated_date" name="banner_edit_updated_date" type="text" class="form-control" value='.$banner_updated_date.' disabled>
                </div>
            </div>
            <div class="col-sm-12">
                <strong>Current Status*</strong>
                <div class="form-group">
                    <input id="banner_edit_status" name="banner_edit_status" type="text" class="form-control" value='.$status.' disabled>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" name="edit" class="btn btn-danger waves-effect" onclick="javascript:geteditorvalue();" >EDIT</button>
                <button type="button" class="btn btn-danger bg-grey waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </form>
        </div>
    </div>'; 
    }   }?>
</div>
</section>

<!-- Include Footer -->
<?php
    include('page_footer.php');
?>