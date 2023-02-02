<?php

include "../../config/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_GET['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $content = $_POST['content'];
    $is_menu = $_POST['is_menu'];
    $status = $_POST['status'];

//    $query = "UPDATE  pages SET title='$title',description='$description', content='$content', is_menu='$is_menu',status = '$status' WHERE id='$id'";
//    $result = mysqli_query($db, $query);

    $database = new Database();
    $database->update('pages',['title'=>$title,'description'=>$description,'content'=>$content,'is_menu'=>$is_menu,'status'=>$status],"$id");

        header("Location:../../backend/index.php?route=pages");


}