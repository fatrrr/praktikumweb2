<?php
$datasourcename = 'mysql:host=localhost;dbname=modul5';
$username = 'root';
$password = '';

try {
    $conn = new PDO(
            $datasourcename,
            $username,
            $password,
            array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::ATTR_PERSISTENT => true)
            );
} catch (PDOException $e) {
    print "Koneksi error: ".$e->getMessage()."<br/>";
    die();
}
