<?php
$to = "juliakow6@gmail.com";
$subject = "Contact from the website";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$name = $_POST['name'];
$company = $_POST['company'];
$telephone = $_POST['telephone'];
$age = $_POST['age'];
$email = $_POST['email'];
$comments = $_POST['comments'];
$sport = $_POST['sport'];
$state = $_POST['state'];
$country = $_POST['country'];

$message = "
<html>
<head>
<title>Contact Form</title>
</head>
<body>
<h1>Contacto information from the website</h1>
<p>User name: $name </p>
<p>Company: $company </p> 
<p>Telephone: $telephone </p>  
<p>Email: $email </p> 
<p>Age: $age </p> 
<p>Comments: $comments </p> 
<p>What is the user´s favourite sport?: $sport </p> 
<p>Single or married?: $state </p> 
<p>Where are you from?: $country </p>
</body>
</html>";
 echo 'Thanks';
mail($to, $subject, $message, $headers);
?>