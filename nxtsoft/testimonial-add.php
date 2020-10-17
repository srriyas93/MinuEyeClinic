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
 
<!-- Main Content -->
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Add New Testimonial</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php"><i class="zmdi zmdi-home"></i> Home</a></li>
                        <li class="breadcrumb-item active">Add New Testimonial</li>
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
                <strong>Patient Name*</strong>
                    <div class="form-group">
                        <input id="testi_name" name="testi_name" type="text" class="form-control" required/>
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
                        <input id="testi_sub" name="testi_sub" type="text" class="form-control" required/>
                    </div>
                </div>
                <div class="col-sm-12">
                <strong>Review*</strong>
                    <div class="form-group">
                    <!--    <input id="news_short_description" name="news_short_description" type="text" class="form-control" required/>-->
                        <textarea id="testi_review" name="testi_review" class="form-control"></textarea>
                    </div>
                </div>              
            </div>
            <div class="modal-footer">
                <button type="submit" name="submit" class="btn btn-danger waves-effect">PUBLISH TESTIMONIAL</button>
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
