<?php

//include "./../config/config.php";

$id = $_GET['id'];

//$query = "DELETE FROM blog where id = " . $id;
//$result = mysqli_query($db, $query);

$database = new Database();
$del = $database->delete('blog',"$id");


    header("Location:index.php?route=blog");

