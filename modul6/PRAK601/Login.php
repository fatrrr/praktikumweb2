<?php

function GetPasswordById($pdo, $id)
{
    $sql = "SELECT password FROM member WHERE nomor_member = $id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $pass = $stmt->fetch(PDO::FETCH_OBJ);
    $pdo = null;
    return $pass;
}

?>