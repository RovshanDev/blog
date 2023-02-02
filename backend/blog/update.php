<?php

include "../../config/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(isset($_FILES['image'])){
        $img = "img".rand(0000,9999)."blog.jpg";
        move_uploaded_file($_FILES['image']['tmp_name'],'../uploads/'.$img);
    }

    //$old_pic= $_POST['old_pic'];
    $image = $img;
    $id = $_GET['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $content = $_POST['content'];
    $is_monset = $_POST['is_monset'];
    $status = $_POST['status'];
    $cat_id = $_POST['cat_id'];

//    if(isset($_FILES['image']) && $_FILES['image']['size']>0){
//        $query = "UPDATE  blog SET cat_id = '$cat_id',image = '$image', title='$title',description='$description', content='$content', is_monset='$is_monset',status = '$status' WHERE id='$id'";
//    }else {
//        $query = "UPDATE  blog SET cat_id = '$cat_id',title='$title',description='$description', content='$content', is_monset='$is_monset',status = '$status' WHERE id='$id'";
//
//    }
//    $result = mysqli_query($db, $query);

    $database = new Database();
    if(isset($_FILES['image']) && $_FILES['image']['size']>0) {
        $database->update('blog', ['title' => $title, 'description' => $description, 'content' => $content, 'is_monset' => $is_monset, 'status' => $status, 'image' => $image, 'cat_id' => $cat_id], "$id");
    } else {
        $database->update('blog', ['title' => $title, 'description' => $description, 'content' => $content, 'is_monset' => $is_monset, 'status' => $status, 'cat_id' => $cat_id], "$id");
    }
        header("Location:../../backend/index.php?route=blog");


}