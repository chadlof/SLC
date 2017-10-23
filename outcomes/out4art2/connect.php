<?php 
$db_host = 'db702914424.db.1and1.com:3306';
$db_user = 'dbo702914424';
$db_pass = 'Password01';
$db_database = 'db702914424';

$db = new PDO('mysql:host='.$db_host.';
                dbname=' .$db_database,
                $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>