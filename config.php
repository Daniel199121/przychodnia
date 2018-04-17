<?php

$host           = "localhost";
$db_user        = "root";
$db_password    = "";
$dbname         = "blog";
$dsn            = "mysql:host=$host;dbname=$dbname";
$options        = array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                );
?>
