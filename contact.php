<?php 
//connect to database
$conn =mysqli_connect('host localhost', 'user beep', 'password would be here', 'name php_example');
//check connection
if (!$conn) {
    echo 'Connection Error: ' . mysqli_connect_error();
}

if(isset($_POST['email']) && $_POST['email'] !=''){
  if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
  //set and not empty -> submit
$userName = $_POST['name'];
$userEmail = $_POST['email'];
$messageSubject = $_POST['subject'];
$messageText = $_POST['text'];

$to = "example@gmail.com";
//$to = you would enter a valid email here, but since this code is public on my github BeepBoop888, here is an example mail
$body ="";

$body.= "From: ".$userName. "\r\n";
$body.= "Email: ".$userEmail. "\r\n";
$body.= "Subject: ".$messageSubject."\r\n";
$body.= "Message: ".$messageText. "\r\n";

mail($to,$messageSubject,$body);
  }
}
?>
