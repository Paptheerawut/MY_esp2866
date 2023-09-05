<?php
    header("Content-type: application/json");
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "esp2866";

    $TT = $_GET["ID"];

    $conn = new mysqli($servername,$username,$password,$dbname);
    /*if ($conn->connect_error) {
        die("Connection failed: ".$conn->connect_error);
    }
    $a = $conn->query("SELECT*FROM test WHERE id = '$TT' ");
    $row =$a->fetch_assoc();*/
    $data22  = array("id"=>$row['id'],"hum"=>$row['HUM'],"temp"=>$row['temp'],"status"=>$row['status']);
    echo json_encode($data22);

?>