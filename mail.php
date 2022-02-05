<? php
//get data from form  
$firstname = $HTTP_POST_VARS['firstname'];
$lastname= $HTTP_POST_VARS['lastname'];
$email= $HTTP_POST_VARS['email'];
$phone = $HTTP_POST_VARS['phone'];
$companyname =  $HTTP_POST_VARS['companyname'];
$subject= $HTTP_POST_VARS['subject'];
$products= $HTTP_POST_VARS['products'];
$to = "akifkhan60067@gmail.com";
$subject = "Mail From ASA Trade Link";
$txt ="Name = ". $firstname + $lastname . "\r\n  Email = " . $email . "\r\n  Phone = " . $phone . . "\r\n  Company Name = " . $companyname . "\r\n Message =" . $subject;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>
