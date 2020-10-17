<?php
include('dbconfig.php');
$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect...');

if (isset($_GET['mode'])) {
    if ($_REQUEST['mode'] == "disableAdmin") {

        $admin_id = $_GET['admin_id'];
        $admin_status = $_GET['admin_status'];
        if($admin_status==1){
            $admin_status=0;
        }else{
            $admin_status=1;
        }
 
        $Q3 = "UPDATE mec_admin SET status=$admin_status, updated_date = CURRENT_TIMESTAMP() WHERE id= $admin_id";

        $r3 = mysqli_query($con, $Q3);

        if (!mysqli_query($con, $Q3)) {
            echo("Error description: " . mysqli_error($con));
        } else {
            echo "success";
        }
    }

    elseif ($_REQUEST['mode'] == "disableNews") {

        $sno = $_GET['sno'];
        $status = $_GET['status'];
        if($status==1){
            $news_status=0;
        }else{
            $news_status=1;
        }
 
 
        $Q3 = "UPDATE mec_news SET status=$news_status, updated_date = CURRENT_TIMESTAMP() WHERE sno= $sno";

        $r3 = mysqli_query($con, $Q3);

        if (!mysqli_query($con, $Q3)) {
            echo("Error description: " . mysqli_error($con));
        } else {
            echo "success";
        }
    }
    elseif ($_REQUEST['mode'] == "disableBanner") {

        $sno = $_GET['sno'];
        $status = $_GET['status'];
        if($status==1){
            $banner_status=0;
        }else{
            $banner_status=1;
        }
 
 
        $Q3 = "UPDATE mec_banners SET status=$banner_status, updated_date = CURRENT_TIMESTAMP() WHERE sno= $sno";

        $r3 = mysqli_query($con, $Q3);

        if (!mysqli_query($con, $Q3)) {
            echo("Error description: " . mysqli_error($con));
        } else {
            echo "success";
        }
    }

    elseif ($_REQUEST['mode'] == "disableImage") {

        $sno = $_GET['sno'];
        $status = $_GET['status'];
        if($status==1){
            $gallery_status=0;
        }else{
            $gallery_status=1;
        }
 
        $Q3 = "UPDATE mec_gallery SET status=$gallery_status, updated_date = CURRENT_TIMESTAMP() WHERE sno= $sno";

        $r3 = mysqli_query($con, $Q3);

        if (!mysqli_query($con, $Q3)) {
            echo("Error description: " . mysqli_error($con));
        } else {
            echo "success";
        }
    }

    elseif ($_REQUEST['mode'] == "disableTesti") {

        $sno = $_GET['sno'];
        $status = $_GET['status'];
        if($status=='Active'){
            $testi_status=0;
        }else{
            $testi_status=1;
        }
       
        $Q3 = "UPDATE mec_testimonial SET status=$testi_status, updated_date = CURRENT_TIMESTAMP() WHERE sno= $sno";
        $r3 = mysqli_query($con, $Q3);

        if (!mysqli_query($con, $Q3)) {
            echo("Error description: " . mysqli_error($con));
        } else {
            echo "success";
        }
    }

    elseif ($_REQUEST['mode'] == "disableTreat") {

        $treatment_id = $_GET['treatment_id'];
        $status = $_GET['status'];
        if($status=='Active'){
            $treat_status=0;
        }else{
            $treat_status=1;
        }
       
        $Q3 = "UPDATE mec_treatments SET status=$treat_status, updated_date = CURRENT_TIMESTAMP() WHERE treatment_id= $treatment_id";
        $r3 = mysqli_query($con, $Q3);

        if (!mysqli_query($con, $Q3)) {
            echo("Error description: " . mysqli_error($con));
        } else {
            echo "success";
        }
    }
/*
    elseif ($_REQUEST['mode'] == "enableAdminApproval") {

        $email = $_GET['email'];
        $admin_approval = $_GET['admin_approval'];
        if($admin_approval==0){
            $admin_approval=1;
        }else{
            $admin_approval=0;
        }
       
        $Q3 = "UPDATE users_customers SET admin_approval=$admin_approval,status=1, updated_date = CURRENT_TIMESTAMP() WHERE email='$email'";
        $r3 = mysqli_query($con, $Q3);

        if (!mysqli_query($con, $Q3)) {
            echo("Error description: " . mysqli_error($con));
        } else {
            echo "success";
        }
    }*/
}