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
                           $treatment_id=$_GET['treatments_id'];
                           $q = "SELECT t.treatment_id AS treatment_id,t.category_id AS category_id,t.title AS title,t.description AS description,t.rank AS rank
                           ,CASE status WHEN 1 THEN 'Active' WHEN 0 THEN 'Inactive' 
                           END AS status,t.image AS image,t.created_date AS created_date,t.updated_date AS updated_date,cat.category_title AS cat_title
                                   FROM treatments_category cat,mec_treatments t
                                   WHERE t.category_id=cat.category_id AND treatment_id=$treatment_id";
                            
                           $r = mysqli_query($con, $q);
                           if($row = mysqli_fetch_array($r))
                                    {
                                        $treatment_id = $row['treatment_id'];
                                        $category_id = $row['category_id'];
                                        $cat_title = $row['cat_title'];
                                        $title = $row['title'];
                                        $description = $row['description'];
                                        $rank = $row['rank'];
                                        $status = $row['status'];
                                        $image = $row['image'];  

                                        $path = $GLOBALS['BASE_URL'].$GLOBALS['TREATMENT_FOLDER'].$image;

                                    }
?>
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Edit Treatment</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php"><i class="zmdi zmdi-home"></i> Home</a></li>
                        <li class="breadcrumb-item active">Edit Treatment</li>
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
                <div class="form-group">
                        <input id="edit_id" name="edit_id" type="hidden" value="<?php echo $treatment_id;?>" class="form-control" required/>
                    </div>
                <strong>Category*</strong>
                    <div class="form-group">
                        <select id="edit_category" name="edit_category" class="form-control" required>
                            <option value="<?php echo $category_id; ?>" selected><?php echo $cat_title; ?></option>
                                <?php
                                $select="category";
                                if(isset($select)&&$select!=""){
                                    $select=$_POST['edit_category']; 
                                }
                                       
                                $q = "SELECT category_id, category_title FROM treatments_category";

                                $r = mysqli_query($con, $q);
                                while($row_list=mysqli_fetch_assoc($r)){
                                    if($row_list['category_id']==$category_id){
                                        continue;
                                    }
                                ?>
                                    <option value="<?php echo $row_list['category_id']; ?>"><?php if($row_list['category_id']==$select){ echo "selected"; } ?><?php echo $row_list['category_title']; ?></option>
                                <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12">
                <strong>Treatment*</strong>
                    <div class="form-group">
                        <input id="edit_title" name="edit_title" type="text" value="<?php echo $title;?>" class="form-control" required/>
                    </div>
                </div>
                <div class="col-sm-12">
                <strong>Description*</strong>
                    <div class="form-group">
                    <!--    <input id="news_short_description" name="news_short_description" type="text" class="form-control" required/>-->
                        <textarea id="edit_description" name="edit_description" class="form-control"><?php echo $description;?></textarea>
                    </div>
                </div> 
                <div class="col-sm-12">
                <strong>Image*</strong>
                    <div class="form-group">
                        <input id="edit_image" name="edit_image" type="file" class="form-control">                       
                    </div>
                    <img class="img-fluid img-thumbnail" src="<?php echo $path;?>" style="width:20%;" alt=""> 
                </div>
                <div class="col-sm-12">
                <strong>Rank*</strong>
                    <div class="form-group">
                    <select id="edit_rank" name="edit_rank" class="form-control" required>
                        <option value="<?php echo $rank;?>" selected><?php echo $rank; ?></option>
                        <?php
                            for ($i=1; $i<=20; $i++)
                            {
                                if($i==$rank){
                                    continue;
                                }
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
                <button type="submit" name="edit" class="btn btn-danger waves-effect">EDIT TREATMENT</button>
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
