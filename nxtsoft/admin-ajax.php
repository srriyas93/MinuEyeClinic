<?php
require_once 'dbconfig.php';
$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect...');

if (isset($_GET['mode'])) {
    if ($_REQUEST['mode'] == "addAdmin") {
        $admin_name= $_GET['admin_name'];
        $admin_email = $_GET['admin_email'];
        $admin_password = $_GET['admin_password'];
        /* md5 Conversion */ 
        $md5_password=md5($admin_password);
        
        $admin_mobile = $_GET['admin_mobile'];

        $q = "INSERT INTO mec_admin(name,mec_email,mob,mec_pwd) VALUES ('$admin_name','$admin_email','$admin_mobile','$md5_password')";
      

        if (!mysqli_query($con, $q)) {
            echo("Error description: " . mysqli_error($con));
        } else {
            echo "success";
		}
    } 
    
    elseif ($_REQUEST['mode'] == "editUpdate") {
        $admin_id=$_GET['admin_id'];
        $admin_name = $_GET['admin_name'];
        $admin_email = $_GET['admin_email'];
        $admin_mobile = $_GET['admin_mobile'];
        $Q3 = "UPDATE `mec_admin` SET `name` = '$admin_name', mec_email = '$admin_email', mob = '$admin_mobile', updated_date = CURRENT_TIMESTAMP() WHERE id= $admin_id";
        
        
        $r3 = mysqli_query($con, $Q3);

        if ($r3) {
            echo "success";
        } else {
            echo("Error description: " . mysqli_error($con));
		}
    }
    
    elseif ($_REQUEST['mode'] == "AdminChangePassword") {

        $admin_id = $_GET['admin_id'];
        $admin_pass_new=$_GET['admin_pass_new'];
         /* md5 Conversion*/  
        $md5_password=md5($admin_pass_new);

        $Q3 = "UPDATE `mec_admin` SET mec_pwd = '$md5_password', updated_date = CURRENT_TIMESTAMP() WHERE id= '$admin_id'";
        
        $r3 = mysqli_query($con, $Q3);

        if ($r3) {
            echo "success";
        } else {
            echo("Error description: " . mysqli_error($con));
        }
    }
    /*
    elseif ($_REQUEST['mode'] == "CheckPassAdmin") {
    
        $admin_pass = $_GET['admin_pass'];
         /* md5 Conversion  
        $md5_password=md5($admin_pass);

        $q = "SELECT count(*) as cntadminpass FROM users_admin WHERE password ='$md5_password'";
        $result = mysqli_query($con, $q);
        if (mysqli_num_rows($result)>0) {
            $row = mysqli_fetch_array($result);  //Fetching the result

            $count = $row['cntadminpass'];
            if ($count > 0) {
                echo "1";
            }else {
                echo "0";
            }
        }
    }
*/
    elseif ($_REQUEST['mode'] == "ContactCheck") {

        
        $admin_mobile=$_GET['admin_mobile'];
        
        $Q3 = "SELECT count(*) AS countMobile FROM mec_admin WHERE mob='$admin_mobile'";
        $r3 = mysqli_query($con, $Q3);
        
            $row = mysqli_fetch_array($r3);

            $count = $row['countMobile'];
            if ($count > 0) {
                echo "1";
            } else {
                echo "0";
            }
        
    }

    elseif ($_REQUEST['mode'] == "EmailCheck") {

        
        $admin_email=$_GET['admin_email'];
        
        $Q3 = "SELECT count(*) AS countEmail FROM mec_admin WHERE mec_email='$admin_email'";
        $r3 = mysqli_query($con, $Q3);
        
            $row = mysqli_fetch_array($r3);

            $count = $row['countEmail'];
            if ($count > 0) {
                echo "1";
            } else {
                echo "0";
            }
        
    }
}