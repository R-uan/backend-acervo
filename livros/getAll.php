<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

$connection = mysqli_connect("localhost", "root", "", "acervo-livaria");
$query = "SELECT * FROM livros";
$request = mysqli_query($connection, $query);

if ($request) {
    $data = mysqli_fetch_all($request, MYSQLI_ASSOC);
    $response = json_encode($data, JSON_PRETTY_PRINT);
    echo $response;
} else {
    $error = mysqli_error($connection);
    echo json_encode(array("error" => $error));
}
