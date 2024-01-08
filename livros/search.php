<?php
    header("Content-Type: application/json", false);
    header("Access-Control-Allow-Origin: *", false);

    $parametro1 = $_GET['title'];

    $connection = mysqli_connect("localhost", "root", "", "acervo-livaria");
    $query = "SELECT * FROM livros WHERE title LIKE '%" . $parametro1 . "%'";
    $request = mysqli_query($connection, $query);

    if ($request) {
        $data = mysqli_fetch_all($request, MYSQLI_ASSOC);
        $response = json_encode($data, JSON_PRETTY_PRINT);
        echo $response;
    } else {
        $error = mysqli_error($connection);
        echo json_encode(array("error" => $error));
    }
?>