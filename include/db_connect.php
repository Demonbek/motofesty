<?php
$db_host = 'factorypgs';
$db_user = 'demon';
$db_pass = '240678';
$db_database ='pgs';
$link = mysqli_connect($db_host, $db_user, $db_pass, $db_database);
if(mysqli_connect_errno())
{
 echo 'Ошибка подключения к базе данных'.mysqli_connect_errno().'ошибка '.mysqli_connect_error(); 
 exit();  
}
?>