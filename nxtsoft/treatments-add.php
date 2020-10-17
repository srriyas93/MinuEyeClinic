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
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Add New Treatment</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php"><i class="zmdi zmdi-home"></i> Home</a></li>
                        <li class="breadcrumb-item active">Add New Treatment</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <form id="FrmeaddNewsPop"name="FrmeaddNewsPop" action="treatments-action.php" method="POST" enctype="multipart/form-data">
            <div class="row clearfix">
                <div class="col-sm-12">
                <strong>Category*</strong>
                    <div class="form-group">
                        <select id="add_category" name="add_category" class="form-control" required>
                            <option value="-1" selected>--- SELECT CATEGORY ---</option>
                                <?php
                                $select="category";
                                if(isset($select)&&$select!=""){
                                    $select=$_POST['add_category']; 
                                }
                                       
                                $q = "SELECT category_id, category_title FROM treatments_category";

                                $r = mysqli_query($con, $q);
                                while($row_list=mysqli_fetch_assoc($r)){
                                ?>
                                    <option value="<?php echo $row_list['category_id']; ?>"><?php if($row_list['category_id']==$select){ echo "selected"; } ?><?php echo $row_list['category_title']; ?></option>
                                <?php } ?>
                        </select>
                    </div>
                </div>
            <!--    <div class="col-sm-12">
                <strong>Thumb Image*</strong>
                    <div class="form-group">
                        <input id="news_thumb_image" name="news_thumb_image" type="file" class="form-control" required/>
                    </div>
                </div>-->
                <div class="col-sm-12">
                <strong>Treatment*</strong>
                    <div class="form-group">
                        <input id="add_title" name="add_title" type="text" class="form-control" required/>
                    </div>
                </div>
                <div class="col-sm-12">
                <strong>Description*</strong>
                    <div class="form-group">
                    <!--    <input id="news_short_description" name="news_short_description" type="text" class="form-control" required/>-->
                        <textarea id="add_description" name="add_description" class="form-control"></textarea>
                    </div>
                </div> 
                <div class="col-sm-12">
                <strong>Image*</strong>
                    <div class="form-group">
                        <input id="add_image" name="add_image" type="file" class="form-control" required/>
                        
                    </div>
                </div>
                <div class="col-sm-12">
                <strong>Rank*</strong>
                    <div class="form-group">
                    <select id="add_rank" name="add_rank" class="form-control" required>
                        <option value="-1" selected>--- SELECT RANK ---</option>
                        <?php
                            for ($i=1; $i<=20; $i++)
                            {
                        ?>
                            <option value="<?php echo $i;?>"><?php echo $i;?></option>
                        <?php
                            }
                        ?>
                    </select>       
                    </div>
                </div>              
            </div>
            <div class="modal-footer">
                <button type="submit" name="submit" class="btn btn-danger waves-effect">ADD TREATMENT</button>
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
