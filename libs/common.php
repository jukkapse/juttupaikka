<?php

session_start();

function naytaNakyma($sivu, $data = array()) {
    $data = (object) $data;
    require_once 'views/head.php';
    require_once 'views/' . $sivu;
    require_once 'views/foot.php';
    exit();
}
function getConnection() {
    $servername = "SERVERNAME";
    $username = "USERNAME";
    $password = "PASSWORD";
    $dbname = "DBNAME";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    return $conn;
}

function siistiString($teksti) {
    return htmlspecialchars(trim($teksti));
}

function GmtTimeToLocalTime($time) {
    date_default_timezone_set('UTC');
    $new_date = new DateTime($time);
    $new_date->setTimeZone(new DateTimeZone('Europe/Helsinki'));
    return $new_date->format("d.m.Y H:i");
}
