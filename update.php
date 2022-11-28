<?php
    if (isset($_GET["id"])){
        $id = $_GET["id"];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "nhahangthangbom";
        
        $connection = new mysqli($servername, $username, $password,$database);
        // $sql = "DELETE FROM datban WHERE id=$id";
        $sql = "INSERT INTO datban (trangthai) Values ('Da xac nhan') where id=$id;";
        $connection->query($sql);


    }
header("location: index.php")
?>