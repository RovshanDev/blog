<?php
//include "./../config/config.php";

$id = $_GET['id'];

//$query = "DELETE FROM admin where id = " . $id;
//$result = mysqli_query($db, $query);

$database = new Database();
$del = $database->delete('admin',"$id");


header("Location:index.php?route=admins");

