<?php
$name123 = filter_var(trim($_POST['name123']),
FILTER_SANITIZE_STRING);
$last123 = filter_var(trim($_POST['last123']),
FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']),
FILTER_SANITIZE_STRING);
$messeg= filter_var(trim($_POST['messeg']),
FILTER_SANITIZE_STRING);






$mysql = new mysqli('localhost','root','root','diplom');
$mysql->query("INSERT INTO `contact` ( `name`, `lastname`, `email`, `mesage`) VALUES('$name123', '$contact_last_name', '$email ','$messeg')");
$mysql->close();

header('Location:/')



?>