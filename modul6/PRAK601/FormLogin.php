<?php
require 'Koneksi.php';
require 'Login.php';

if(isset($_POST['submit'])){
    if(isset($_POST['id'])){
        $uname = $_POST['id'];
    }
    if(isset($_POST['password'])){
        $pass = $_POST['password'];
    }
    $tmp = GetPasswordById($conn, $uname);
    if ($pass == $tmp->password){
        session_start();
        $_SESSION['id'] = $_POST['id'];
        header('Location: index.php');        
    } else {
        print "password salah";
    }
}
?>
<html>
    <head>
        <title> LOGIN </title>
    </head>
    <body>
        <form method="POST">
            <input type="text" name="id"><br>
            <input type="password" name="password"><br>
            <input type="submit" name="submit" value="Log in">
        </form>
    </body>
</html>