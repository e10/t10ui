<?php 
 $to = $_REQUEST['to']; 
 $subject = $_REQUEST['subject'];
 $message = $_REQUEST['message'] ; 
 $sent = mail($to, $subject, $message) ; 
 if($sent) 
 {print "Your mail was sent successfully"; }
 else 
 {print "We encountered an error sending your mail"; }
 ?> 