<!-- Include Header --> 
<?php
    include('page_header.php');
?>
<!-- Include Database Configuration -->
<?php 
    include('dbconfig.php');
    $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect...');
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
                        <h2>Testimonials</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php"><i class="zmdi zmdi-home"></i> Home</a></li>
                            <li class="breadcrumb-item active">Testimonials</li>
                        </ul>
                        <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                <!--        <button class="btn btn-success btn-icon float-right" type="button" data-toggle="modal"><a href="testimonial-add.php"><i class="zmdi zmdi-plus"></i></a></button>-->
                    </div>
                </div>
            </div>
            <div id="DisplayPlan" class="container-fluid">
                <div class="row clearfix">
                    <div id="DisplayPlan" class="col-md-12 col-sm-12 col-xs-12">
                        <!-- Displaying the  contents -->
                        <?php
                           
                            $q = "SELECT sno,name,subject,review,created_date,CASE status WHEN 1 THEN 'Active' WHEN 0 THEN 'Inactive' 
                            END AS status FROM mec_testimonial";

                            $r = mysqli_query($con, $q);

                            $num = mysqli_num_rows($r);
                            if(!mysqli_num_rows($r) > 0)
                            { ?>
                            
                            <div class="card">
                                <div class="body">
                                    <br>
                                    <p>No Testimonial(s) Found</p>
                                    <br>
                                </div>
                            </div>
                            <?php }                           
                            else
                            {
			                ?>
                                <div class="card project_list">
                                    <div class="table-responsive">
                                    <h6><strong><i class="zmdi zmdi-chart"></i> Total Record(s):</strong><?php echo $num;?></h6>
                                        <table class="table table-hover c_table theme-color">
                                            <thead>
                                                <tr>
                                                    <th>Patient Name</th>
                                                    <th>Subject</th>
                                                    <th>Published Date</th>
                                                    <th>Status</th>
                                                    <th>Options</th>
                                                </tr>
                                            </thead>
                                    <?php
                                   while($row = mysqli_fetch_array($r))
                                    {
                                        $sno = $row['sno'];
                                        $name = $row['name'];
                                        $subject = $row['subject'];
                                        $review = $row['review'];
                                        $status = $row['status'];
                                
                                        $testi_created_date = strtotime($row['created_date']);
                                        $testi_created_date = date("d-m-Y", $testi_created_date);


                                        $testi_name=explode(" ",$name);
                                        $editpath="testimonial-edit.php?sno=$sno";
                                    ?>
                                        <tbody>
                                            <tr>
                                                <td><strong><?php echo $name;?></strong></td>
                                                <td><strong><?php echo $subject;?></strong></td>
                                                <td><strong><?php echo $testi_created_date;?></strong></td>
                                                <td><strong><?php echo $status;?></strong></td>
                                      
                                            <td class="aligncenter">
                                                <div class="btn-group dropleft">
                                                    <a id="btndropdown" class="mousehand" data-toggle="dropdown" href="javascript:void()" data-activates="dropdown" aria-expanded="false"><i class="zmdi zmdi-hc-fw"></i></a>
                                                    <div id="dropdown"class="dropdown-menu">
                                                        <a class="dropdown-item" href="<?php echo $editpath;?>" title="Edit">
                                                            <i class="zmdi zmdi-hc-fw margin-right10"></i>Edit
                                                        </a>
                                                        <?php echo'
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href=javascript:void(0); onclick=javascript:showConfirmMessage1("testi",'."'".$testi_name[0]."'".','.$sno.','."'".$status."'".');>
                                                            <i class="zmdi zmdi-hc-fw margin-right10"></i>Status
                                                        </a>';?>
                                                    </div>
                                                </div>
                                            </td>
                                            </tr>
                                        </tbody>
                                    <?php
                                }
                                ?>
                                </table>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- Include Footer --> 
<?php
    include('page_footer.php');
?>

<script>
   
    if(window.location.href.indexOf("status") > -1) {
    var status=window.location.href.split('=')[1];
    
    if (status == 1)
    {
         showNotification('Testimonials Added Succesfully !!!','bg-green');
    }
    if (status == 0)
    {
         showNotification('Error !!!','bg-red');
    }

    }

    if(window.location.href.indexOf("update") > -1) {
    var update=window.location.href.split('=')[1];
    
    if (update == 1)
    {
         showNotification('Testimonial Updated Succesfully !!!','bg-green');
    }
    if (update == 0)
    {
         showNotification('Error !!!','bg-red');
    }

    }

</script>