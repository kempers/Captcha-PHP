<?php
 
session_start();
 
if($_POST['code'] != $_SESSION['captcha']) echo "Вы неправильно ввели Капчу";
 
else echo "Молодец! Капча введена верно!";


?>