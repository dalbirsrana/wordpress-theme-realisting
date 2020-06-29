<?php
$From = $_REQUEST['recipient'];
$SubjectLine = "News letter subsription from realisting";
$sign_up_mail = "dalbirsrana@gmail.com";


$content = "<html><body><p><b>From: </b> ";
$content .= $From;
$content .= "</p></body></html>";


// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From:' . $From . "\r\n";


   if (mail($sign_up_mail, $SubjectLine, $content, $headers)) {
       echo "sent";
   }
?>