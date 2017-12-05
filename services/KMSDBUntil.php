<?php

function getConnection() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kms_question";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function getQuestion() {
    $conn = getConnection();
    $query = "SELECT
             `id`, `cat_id`, `content`, `pic_type`, `pic_link`, `answer_type`, `note`, `is_deleted` 
             FROM `kms_question` 
             WHERE is_deleted = 0";
    $rows = $conn->query($query);
    while ($row = $rows->fetch_assoc()) {
        $data[] = $row;
    }
    return $data;
}

?>