<?php
    echo "MysqliDatabase Welcome index.";

    require_once "MysqliDatabase.php";
    $mysqli=new MysqliDatabase();
    $conn=$mysqli->open();
    session_start();

    $mysqli->hr();
    require_once "vars.php";
    // require_once "fetch_row.php";
    // require_once "fetch_obj.php";
    // require_once "fetch_assoc.php";
    require_once "fetch_array.php";

    $mysqli->close();
?>