<?php
$hostname = "vr-carer-kzh-do-user-14558665-0.b.db.ondigitalocean.com";
$port = "25060";
$dbname = "vr_carer";
$username = "doadmin";
$password = "AVNS_GG5ThkhbtY0roQXhZHE";
$pdo = new PDO(
    "mysql:host=$hostname;port=$port;dbname=$dbname", 
$username, $password);
