<!-- Include Header --> 
<?php
    include('page_header.php');
?>
<!-- Include Left Side Bar --> 
<?php
    include('page_left-sidebar.php');
?>
<!-- Include Right Side Bar --> 
<?php
    include('page_right-sidebar.php');
?>
<!-- Include Database Configuration -->
<?php 
    include('dbconfig.php');
    $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect...');
?>

<!-- Main Content -->
                                    <?php
                                    $sno=$_GET['sno'];
                                    $q = "SELECT name,subject,review,created_date,updated_date,CASE status WHEN 1 THEN 'Active' WHEN 0 THEN 'Inactive' 
                                    END AS status FROM mec_testimonial WHERE sno=$sno";
                                    $r = mysqli_query($con, $q);
                                    if ($row = mysqli_fetch_array($r)) {
                                        
                                        $name = $row['name'];
                                        $subject = $row['subject'];
                                        $review = $row['review'];
                                        $status = $row['status'];
                                
                                        $testi_created_date = strtotime($row['created_date']);
                                        $testi_created_date = date("d-m-Y", $testi_created_date);

                                        $testi_updated_date = strtotime($row['updated_date']);
                                        $testi_updated_date = date("d-m-Y", $testi_updated_date);
                                    }
                                    ?>
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Edit Testimonial</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php"><i class="zmdi zmdi-home"></i> Home</a></li>
                        <li class="breadcrumb-item active">Edit Testimonial</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <form id="FrmeaddNewsPop"name="FrmeaddNewsPop" action="testimonial-action.php" method="POST">
            <div class="row clearfix">
                <div class="col-sm-12">
                    <div class="form-group">
                        <input id="testi_edit_sno" name="testi_edit_sno" type="hidden" value="<?php echo $sno; ?>" class="form-control" required/>
                    </div>
                <strong>Patient Name*</strong>
                    <div class="form-group">
                        <input id="testi_edit_name" name="testi_edit_name" type="text" value="<?php echo $name; ?>" class="form-control" required/>
                    </div>
                </div>
            <!--    <div class="col-sm-12">
                <strong>Thumb Image*</strong>
                    <div class="form-group">
                        <input id="news_thumb_image" name="news_thumb_image" type="file" class="form-control" required/>
                    </div>
                </div>-->
                <div class="col-sm-12">
                <strong>Subject*</strong>
                    <div class="form-group">
                        <input id="testi_edit_sub" name="testi_edit_sub" type="text" value="<?php echo $subject; ?>" class="form-control" required/>
                    </div>
                </div>
                <div class="col-sm-12">
                <strong>Review*</strong>
                    <div class="form-group">
                    <!--    <input id="news_short_description" name="news_short_description" type="text" class="form-control" required/>-->
                        <textarea id="testi_edit_review" name="testi_edit_review" class="form-control"><?php echo $review; ?></textarea>
                    </div>
                </div>              
            </div>
            <div class="modal-footer">
                <button type="submit" name="edit" class="btn btn-danger waves-effect">UPDATE TESTIMONIAL</button>
                <button type="button" class="btn btn-danger bg-grey waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
            </form>
        </div>
    </div>
</section>

<!-- Include Footer -->

<?php
    include('page_footer.php');
?>
