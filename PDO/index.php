<?php
    require_once "PdoDatabase.php";
    $pdo=new PdoDatabase();
    $conn=$pdo->open();
    session_start();

    // require_once "pdo_fetch.php";
    // require_once "pdo_fetchall_assoc.php";
    // require_once "pdo_fetchall_num.php";
    // require_once "pdo_fetchall_both.php";
    // require_once "pdo_fetchall_class.php";
    // require_once "pdo_fetchall_obj.php";
    require_once "pdo_fetch_assoc.php";

    $pdo->close();
?>