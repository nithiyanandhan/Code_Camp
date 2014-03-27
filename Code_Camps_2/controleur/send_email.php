<?php
$mail = 'nithi91350@gmail.com';
$from = $_POST['email'];
$message = $_POST['message'];

mail($mail,$from,$message);
header('Location: ../vue/index.php');
?>