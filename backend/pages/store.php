<?php
//include "../config/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $content = $_POST['content'];
    $is_menu = $_POST['is_menu'];
    $status = $_POST['status'];;

//    $query = "INSERT INTO pages(title,description,content,is_menu,status) VALUES('$title','$description','$content','$is_menu','$status')";
//    $result = mysqli_query($db, $query);

    $database = new Database();
    $result = $database->insert('pages',['title'=>$title,'description'=>$description,'content'=>$content,'is_menu'=>$is_menu,'status'=>$status]);

        header("Location:index.php?route=pages");


}

?>