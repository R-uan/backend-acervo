<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

$con = mysqli_connect("localhost", "root", "", "acervo-livaria");
$query = "SELECT * FROM editora";
$request = mysqli_query($con, $query);

if ($request) {
    $data = mysqli_fetch_all($request, MYSQLI_ASSOC);
    $response = json_encode($data, JSON_PRETTY_PRINT);
    echo $response;
} else {
    $error = mysqli_error($connection);
    echo json_encode(array("error" => $error));
}


?>