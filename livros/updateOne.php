<?php

    $id = $_POST["id"];
    $title = $_POST["title"];
    $author = $_POST["author"];
    $editora = $_POST["editora"];

    $conn = mysqli_connect("localhost", "root", "", "acervo-livaria");


    if($title) { 
        $query = "UPDATE `livros` SET `title` = '$title' WHERE `livros`.`id` = $id";
        $request = mysqli_query($conn, $query);
    }
    if($author){
        $query = "UPDATE `livros` SET `author` = '$author' WHERE `livros`.`id` = $id";
        $request = mysqli_query($conn, $query);
    }
    if($editora) {
        $query = "UPDATE `livros` SET `editora` = '$editora' WHERE `livros`.`id` = $id";
        $request = mysqli_query($conn, $query);
    }

    echo '<script>window.close();</script>';
?>