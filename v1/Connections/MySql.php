<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_MySql = "localhost";
$database_MySql = "roboticsdatabase";
$username_MySql = "root";
$password_MySql = "104607";
$MySql = mysql_pconnect($hostname_MySql, $username_MySql, $password_MySql) or trigger_error(mysql_error(),E_USER_ERROR); 
?>