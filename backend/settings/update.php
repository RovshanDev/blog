<?php

include "../../config/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_GET['id'];
    $some = $_POST['some'];
    $any = $_POST['any'];
    $status = $_POST['status'];

//    $query = "UPDATE  pages SET title='$title',description='$description', content='$content', is_menu='$is_menu',status = '$status' WHERE id='$id'";
//    $result = mysqli_query($db, $query);

    $database = new Database();
    $database->update('settings',['some'=>$some,'any'=>$any,'status'=>$status],"$id");

        header("Location:../../backend/index.php?route=settings");


}