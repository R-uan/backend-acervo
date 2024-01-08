<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $title = $_POST["title"];
        $author = $_POST["author"];
        $editora = $_POST["editora"];
        
        $connection = mysqli_connect("localhost", "root", "", "acervo-livaria");
        $query = "INSERT INTO `livros` (`id`, `title`, `author`, `editora`) VALUES (NULL, '$title', '$author', '$editora')";
        $request = mysqli_query($connection, $query);
    }
    echo '<script>window.close();</script>';
?>