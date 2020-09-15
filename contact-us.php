<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $country = $_REQUEST['country'];
    $msg = $_REQUEST['message'];

    $to = 'ivan@dubisoft.solutions, anton.maroukha@gmail.com';
    $subject = "[Itech Nordic] New request from ${name} - ${email}";

    $message = "
<html>
<head>
  <title>New concat ${name} from ${country}</title>
</head>
<body>
  <table>
    <tr>
        <td>Name:</td><td>${name}</td>
    </tr>
    <tr>
        <td>Email:</td><td>${email}</td>
    </tr>
    <tr>
        <td>Phone:</td><td>${phone}</td>
    </tr>
    <tr>
        <td>Country:</td><td>${country}</td>
    </tr>
    <tr>
        <td>Message:</td><td>${msg}</td>
    </tr>
  </table>
</body>
</html>
";
    
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    $headers[] = 'From: Itech Nordic Website <no-reply@itechnordic.com>';

    if(mail($to, $subject, $message, implode("\r\n", $headers))) {
        echo "Ok";
    }
}

