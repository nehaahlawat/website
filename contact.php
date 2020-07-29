<?php

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];

if (empty($name) || empty($email) || empty($message))
{
    echo "Please fill all the fields";
}
else{
    mail("nehaahlawat0012@gmail.com" , "Web Message", $message , "From: $name<$email>");
    echo "<script type='text/javascript'>alert('your message sent succesfully');
          window.history.log(-1);
          </script>";
}

?>