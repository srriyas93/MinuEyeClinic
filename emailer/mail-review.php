<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
       $EmailFrom = "noreply@drminuseyeclinic.com";

        # FIX: Replace this email with recipient email
        $mail_to = "vimalantopalayur@gmail.com";
        
        # Sender Data
        $name = trim($_POST["review_name"]);
        $phone = trim($_POST["review_mobile"]);
        $subject = "Review sent by | ".$name;
        $message = trim($_POST["review_message"]);

        if ( empty($name) OR empty($phone) OR empty($subject) OR empty($message)) 
        {
            # Set a 400 (bad request) response code and exit.
            //http_response_code(400);
            echo "Please complete the form and try again.";
            exit;
        }

        // Message
        $content = "<b>Here are the details of Review :</b>\r\n <br><br> <b>Name : </b> ". $name."\r\n <br><br> <b>Phone no : </b>".$phone. "\r\n <br><br> <b>Message : </b>".$message;
      
        // To send HTML mail, the Content-type header must be set
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';

        // Additional headers
        $headers[] = 'To: '.$mail_to;
        $headers[] = 'From: Review <noreply@drminuseyeclinic.com>';

        // Mail it
        $success = mail($mail_to, $subject, $content, implode("\r\n", $headers));
        

        if ($success) 
        {
            # Set a 200 (okay) response code.
            http_response_code(200);
            header("Location: mail-success.php");
            echo "Thank You! Your message has been sent.";
        } 
        else 
        {
            # Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong, we couldn't send your message.";
        }
        
    } 
    else 
    {
        # Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }
    // } 
    // else 
    // {
    //     # Not a POST request, set a 403 (forbidden) response code.
    //     http_response_code(403);
    //     echo "There was a problem with your submission, please try again.";
    // }
?>
