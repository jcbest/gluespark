<?php
$hostname_con1='localhost';
$username_con1='root';
$password_con1='';
$database_con1='webdb';
$con1 = mysql_pconnect($hostname_con1,$username_con1,$password_con1)  or trigger_error(mysql_error(),E_USER_ERROR);

?>