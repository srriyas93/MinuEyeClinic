<?php

require_once 'dbconfig.php';
$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect...');

    if (isset($_POST['submit'])) { 
        
            $gallery_title = $_POST["gallery_title"];           
            
            $imageTNm = $_FILES["gallery_main_image"]["tmp_name"];
            $imageNm = $_FILES["gallery_main_image"]["name"];
            $time = time();
            $imageNm1 = $time.$imageNm;
            $path = $GLOBALS['BASE_PATH'].$GLOBALS['GALLERY_FOLDER'].$imageNm1;
            move_uploaded_file($imageTNm, $path);
                $q = " INSERT INTO mec_gallery(gallery_title,gallery_image) VALUES ('$gallery_title','$imageNm1')";

            if (!mysqli_query($con, $q)) {
                echo("Error description: " . mysqli_error($con));
            } else {
    echo'           <script> swal("News Submitted Successfully",
                                {
                          icon: "success",
                                });</script>';
            }
             header("Location: gallery.php");
        
    }
    if (isset($_POST['edit'])) { 

        $sno=$_POST["gallery_edit_sno"];
        $gallery_title = $_POST["gallery_edit_title"];            
        
        $imageTNm = $_FILES["gallery_edit_image"]["tmp_name"];
        if($imageTNm != "")
        {
            $imageNm = $_FILES["gallery_edit_image"]["name"];
            $time = time();
            $imageNm1 = $time.$imageNm;
            $path = $GLOBALS['BASE_PATH'].$GLOBALS['GALLERY_FOLDER'].$imageNm1;
            move_uploaded_file($imageTNm, $path);
                $q = " UPDATE mec_gallery SET gallery_title = '$gallery_title',gallery_image = '$imageNm1',updated_date = CURRENT_TIMESTAMP() WHERE sno = $sno";

            if (!mysqli_query($con, $q)) {
                echo("Error description: " . mysqli_error($con));
            } else {
            echo"<script type='text/javascript'>alert('Updated Successfully')</script>";
            }

        }
        else
        {

             $q = " UPDATE mec_gallery SET gallery_title = '$gallery_title', updated_date = CURRENT_TIMESTAMP() WHERE sno = $sno";

            if (!mysqli_query($con, $q)) {
                echo("Error description: " . mysqli_error($con));
            } else {
            echo"<script type='text/javascript'>alert('Updated Successfully')</script>";
            }

        }
        header("Location: gallery.php");

    
}