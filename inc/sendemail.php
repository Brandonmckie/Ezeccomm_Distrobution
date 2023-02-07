<?php

    $to = "exemple@gmail.com";
    $from = $_REQUEST['zeke@ezautomatedecomm.com'];
    $name = $_REQUEST['Zeke'];
    $headers = "From: $from";
    $subject = "You have a message from your Ezecomm Distribution";

    $fields = array();
    $fields{"name"} = "name";
    $fields{"email"} = "email";
    $fields{"phone"} = "phone";
    $fields{"category"} = "category";
    

    $body = "Here is the message you got:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>