<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact</title>
</head>

<body>


<?php
 
$youremail = "hanna.leake1@googlemail.com";
 
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['message'];
 
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    if (mail($youremail, 'Enquiry from Sues Curtains website.', $msg, "From: <$email>")) {
        echo "Your email was sent to Sues Curtains. Thank you $name, for your enquiry. Press back to go back, thank you.";
    }
} else {
    echo "Please enter a valid email address";
}
?>

</body>
</html>