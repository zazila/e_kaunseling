<?php
$host = 'localhost'; 
$db = 'kaunseling'; 
$user = 'root'; 
$pass = '';

mysql_connect($host, $user, $pass) or DIE('Can\'t connect!');
mysql_select_db($db) or DIE('Database ' +$db + ' not found!');
?>