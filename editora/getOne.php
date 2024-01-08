<?php
header("Content-Type: application/json", false);
header("Access-Control-Allow-Origin: *", false);

$parametro1 = $_GET['id'];

$connection = mysqli_connect("localhost", "root", "", "acervo-livaria");
$query = "SELECT name FROM editora WHERE id = '$parametro1'";
$request = mysqli_query($connection, $query);

if ($request) {
    $data = mysqli_fetch_all($request, MYSQLI_ASSOC);
    $response = json_encode($data, JSON_PRETTY_PRINT);
    echo $response;
} else {
    $error = mysqli_error($connection);
    echo json_encode(array("error" => $error));
}
