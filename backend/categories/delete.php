<?php

//include "./../config/config.php";

$id = $_GET['id'];

//$query = "DELETE FROM pages where id = " . $id;
//$result = mysqli_query($db, $query);

$database = new Database();
$del = $database->delete('categories',"$id");


    header("Location:index.php?route=categories");

