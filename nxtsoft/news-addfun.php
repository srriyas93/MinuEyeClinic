<?php
require_once 'dbconfig.php';
$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect...');

    if (isset($_POST['submit'])) { 
            
            $news_title = $_POST["news_title"];   
            $news_short_description = $_POST["news_short_description"];         
            $news_inline_editor = $_POST["news_inline_editor"];
            $imageTNm = $_FILES["news_main_image"]["tmp_name"];
            echo $imageTNm;
            $imageNm = $_FILES["news_main_image"]["name"];
            $time = time();
            $imageNm1 = $time.$imageNm;
            $path = $GLOBALS['BASE_PATH'].$GLOBALS['NEWS_FOLDER'].$imageNm1;
            move_uploaded_file($imageTNm, $path);
                $q = " INSERT INTO mec_news(news_title,main_image,short_description,news_content) VALUES ('$news_title','$imageNm1','$news_short_description','$news_inline_editor')";

            if (!mysqli_query($con, $q)) {
                echo("Error description: " . mysqli_error($con));
            } else {
                echo "<script type='text/javascript'>alert('News Added Successfully')</script>";
            header("Location: news.php");
            }       
    }
    if (isset($_POST['edit'])) { 

        $sno=$_POST["news_edit_sno"];
        $news_title = $_POST["news_edit_title"];   
        $news_short_description = $_POST["news_edit_short_description"];          
        $news_inline_editor = $_POST["news_edit_main_content"];
        $imageTNm = $_FILES["news_edit_main_image"]["tmp_name"];
        if($imageTNm != "")
        {
           
            $imageNm = $_FILES["news_edit_main_image"]["name"];
            $time = time();
            $imageNm1 = $time.$imageNm;
            $path = $GLOBALS['BASE_PATH'].$GLOBALS['NEWS_FOLDER'].$imageNm1;
            move_uploaded_file($imageTNm, $path);

                $q = " UPDATE mec_news SET news_title = '$news_title',main_image = '$imageNm1',short_description='$news_short_description',news_content = '$news_inline_editor',updated_date = CURRENT_DATE() WHERE sno = $sno";

            if (!mysqli_query($con, $q)) {
                echo("Error description: " . mysqli_error($con));
            } else {
            echo  "<script type='text/javascript'>alert('Updated Successfully')</script>";
            } 
        } 
        else
        {

            $q = " UPDATE mec_news SET news_title = '$news_title',short_description='$news_short_description',news_content = '$news_inline_editor',updated_date = CURRENT_DATE() WHERE sno = $sno";

            if (!mysqli_query($con, $q)) {
                echo("Error description: " . mysqli_error($con));
            } else {
            echo  "<script type='text/javascript'>alert('Updated Successfully')</script>";
            } 

        }
        header("Location: news.php");   
}