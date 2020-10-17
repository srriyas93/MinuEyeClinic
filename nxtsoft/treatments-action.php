<?php
require_once 'dbconfig.php';
$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect...');

    if (isset($_POST['submit'])) {
        $add_category = $_POST["add_category"];
        $add_title = $_POST["add_title"];
        $add_description = $_POST["add_description"];
        $add_rank = $_POST["add_rank"];
       
            /* Image Uploading */
        $treatimageTNm = $_FILES["add_image"]["tmp_name"];

        $treatimageNm = $_FILES["add_image"]["name"];
        $time = time();
        $treatimageNm1 = $time.$treatimageNm;
        $path = $GLOBALS['BASE_PATH'].$GLOBALS['TREATMENT_FOLDER'].$treatimageNm1;
        move_uploaded_file($treatimageTNm, $path);

        $q="INSERT INTO mec_treatments (category_id,title,description,image,rank) VALUES ($add_category,'$add_title','$add_description','$treatimageNm1','$add_rank')";
        $r=mysqli_query($con, $q);

        if($r){
           header("Location: treatments.php?status=1");
        }
        else{
           header("Location: treatments.php?status=0");
        }
    }

    if (isset($_POST['edit'])) {
        $id = $_POST["edit_id"];
        $category = $_POST["edit_category"];
        $title = $_POST["edit_title"];
        $description = $_POST["edit_description"];
        $rank = $_POST["edit_rank"];

        /* Image Uploading */
        $treatimageTNm = $_FILES["edit_image"]["tmp_name"];
        
        if ($treatimageTNm !="") {
            $treatimageNm = $_FILES["edit_image"]["name"];
            $time = time();
            $treatimageNm1 = $time.$treatimageNm;
            $path = $GLOBALS['BASE_PATH'].$GLOBALS['TREATMENT_FOLDER'].$treatimageNm1;
            move_uploaded_file($treatimageTNm, $path);


            $q="UPDATE mec_treatments SET category_id='$category',title='$title',description='$description',image='$treatimageNm1',rank=$rank WHERE treatment_id=$id";
            $r=mysqli_query($con, $q);

            if ($r) {
                header("Location: treatments.php?update=1");
            } else {
                header("Location: treatments.php?update=0");
            }
        }
        else{

            $q1="UPDATE mec_treatments SET category_id='$category',title='$title',description='$description',rank=$rank WHERE treatment_id=$id";
            $r=mysqli_query($con, $q1);

            if ($r) {
                header("Location: treatments.php?update=1");
            } else {
                header("Location: treatments.php?update=0");
            }
        }
    }
