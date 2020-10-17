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
                        <h2>News</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php"><i class="zmdi zmdi-home"></i> Home</a></li>
                            <li class="breadcrumb-item active">News</li>
                        </ul>
                        <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                <!--        <button class="btn btn-success btn-icon float-right" type="button" data-toggle="modal" data-target="#popaddnewplan"><i class="zmdi zmdi-plus"></i></button>-->
                    </div>
                </div>
            </div>
            <div id="DisplayPlan" class="container-fluid">
                <div class="row clearfix">
                    <div id="DisplayPlan" class="col-md-12 col-sm-12 col-xs-12">
                        <!-- Displaying the  contents -->
                        <?php
                            $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect...');
                            $q = "SELECT sno,news_title,main_image,short_description,news_content,created_date,CASE status WHEN 1 THEN 'Active' WHEN 0 THEN 'Inactive' 
                            END AS status FROM mec_news";

                            $r = mysqli_query($con, $q);

                            $num = mysqli_num_rows($r);
                            if(!mysqli_num_rows($r) > 0)
                            { ?>
                            
                            <div class="card">
                                <div class="body">
                                    <br>
                                    <p>No News(s) Found</p>
                                    <br>
                                </div>
                            </div>
                            <?php }
                            
                            else
                            {
			                echo'
                                <div class="card project_list">
                                    <div class="table-responsive">
                                    <h6><strong><i class="zmdi zmdi-chart"></i> Total Record(s):</strong> '.$num.'</h6>
                                        <table class="table table-hover c_table theme-color">
                                            <thead>
                                                <tr>
                                                    <th>News Title</th>
                                                    <th>Short Description</th>
                                                    <th>Published Date</th>
                                                    <th>Status</th>
                                                    <th>Options</th>
                                                </tr>
                                            </thead>';
                                    while($row = mysqli_fetch_array($r))
                                    {
                                        $sno = $row['sno'];
                                        $news_title = $row['news_title'];
                                        $short_description = $row['short_description'];
                                        $main_image = $row['main_image'];
                                        $news_content = $row['news_content'];
                                
                                        $news_created_date = strtotime($row['created_date']);
                                        $news_created_date = date("d-m-Y", $news_created_date);
                                        $news_status= $row['status'];
                                        if($news_status=='Active'){
                                            $status=1;
                                        }else{
                                            $status=0;
                                        }

                                        $news_status_name ="News";
                            echo'           <tbody>
                                            <tr>
                                                <td><strong>'.$news_title.'</strong></td>
                                                <td><strong>'.substr($short_description,0,30).'</strong></td>
                                                <td><strong>'.$news_created_date.'</strong></td>
                                                <td><strong>'.$news_status.'</strong></td>';
                                      
                            echo'           <td class="aligncenter">
                                                <div class="btn-group dropleft">
                                                    <a id="btndropdown'.$sno.'" class="mousehand" data-toggle="dropdown" href="javascript:void()" data-activates="dropdown'.$sno.'" aria-expanded="false"><i class="zmdi zmdi-hc-fw"></i></a>
                                                    <div id="dropdown'.$sno.'"class="dropdown-menu">
                                                        <a class="dropdown-item" href="news_edit.php?sno='.$sno.';" title="Edit">
                                                            <i class="zmdi zmdi-hc-fw margin-right10"></i>Edit
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="javascript:void(0);" onClick=javascript:showConfirmMessage1("news",'."'".$news_status_name."'".','.$sno.','.$status.');>
                                                            <i class="zmdi zmdi-hc-fw margin-right10"></i>Status
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>';
                            echo'       </tr>
                                    </tbody>';
                                    }
                            echo'   </table>
                            </div>
                        </div>';
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