<?php

require_once 'dbconfig.php';
$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect...');

    if (isset($_POST['submit'])) { 
        
            $banner_title = $_POST["banner_title"];   
            $banner_short_description = $_POST["banner_short_description"];  
            $link_url = $_POST["banner_url"];
            $imageTNm = $_FILES["banner_main_image"]["tmp_name"];
            $imageNm = $_FILES["banner_main_image"]["name"];
            $time = time();
            $imageNm1 = $time.$imageNm;
            $path = $GLOBALS['BASE_PATH'].$GLOBALS['BANNER_FOLDER'].$imageNm1;
            move_uploaded_file($imageTNm, $path);
                $q = " INSERT INTO mec_banners(banner_title,main_image,short_description,link_url) VALUES ('$banner_title','$imageNm1','$banner_short_description','$link_url')";

            if (!mysqli_query($con, $q)) {
                echo("Error description: " . mysqli_error($con));
            } else {
                echo "<script type='text/javascript'>alert('Banner Added Successfully')</script>";
            header("Location: banners.php");
            }       
    }
if (isset($_POST['edit'])) { 

        $sno=$_POST["banner_edit_sno"];
        $banner_title = $_POST["banner_edit_title"];   
        $banner_short_description = $_POST["banner_edit_short_description"];  
        $link_url = $_POST["banner_url"];

        $imageTNm = $_FILES["banner_edit_main_image"]["tmp_name"];
        if($imageTNm != "")
        {
           
            $imageNm = $_FILES["banner_edit_main_image"]["name"];
            $time = time();
            $imageNm1 = $time.$imageNm;
            $path = $GLOBALS['BASE_PATH'].$GLOBALS['BANNER_FOLDER'].$imageNm1;
            move_uploaded_file($imageTNm, $path);

                $q = " UPDATE mec_banners SET banner_title = '$banner_title',main_image = '$imageNm1',short_description='$banner_short_description',link_url = '$link_url',updated_date = CURRENT_DATE() WHERE sno = $sno";

            if (!mysqli_query($con, $q)) {
                echo("Error description: " . mysqli_error($con));
            } else {
            echo  "<script type='text/javascript'>alert('Updated Successfully')</script>";
            } 
        } 
        else
        {

            $q = " UPDATE mec_banners SET banner_title = '$banner_title',short_description='$banner_short_description',link_url = '$link_url', updated_date = CURRENT_DATE() WHERE sno = $sno";

            if (!mysqli_query($con, $q)) {
                echo("Error description: " . mysqli_error($con));
            } else {
            echo  "<script type='text/javascript'>alert('Updated Successfully')</script>";
            } 

        }
        header("Location: banners.php");   
}