<?php
require_once 'dbconfig.php';
$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect...');

    if (isset($_POST['submit'])) {
        $testi_name = $_POST["testi_name"];
        $testi_sub = $_POST["testi_sub"];
        $testi_review = $_POST["testi_review"];

        $q="INSERT INTO mec_testimonial (name,subject,review) VALUES ('$testi_name','$testi_sub','$testi_review')";
        $r=mysqli_query($con, $q);

        if($r){
            header("Location: testimonial.php?status=1");
        }
        else{
            header("Location: testimonial.php?status=0");
        }
    }

    if (isset($_POST['edit'])) {

        $testi_sno = $_POST["testi_edit_sno"];
        $testi_name = $_POST["testi_edit_name"];
        $testi_sub = $_POST["testi_edit_sub"];
        $testi_review = $_POST["testi_edit_review"];

        $q="UPDATE mec_testimonial SET name='$testi_name',subject='$testi_sub',review='$testi_review' WHERE sno=$testi_sno";
        $r=mysqli_query($con, $q);

        if($r){
            header("Location: testimonial.php?update=1");
        }
        else{
            header("Location: testimonial.php?update=0");
        }
    }