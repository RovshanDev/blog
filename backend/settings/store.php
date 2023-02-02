<?php
//include "../config/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $some = $_POST['some'];
    $any = $_POST['any'];
    $status = $_POST['status'];

//    $query = "INSERT INTO pages(title,description,content,is_menu,status) VALUES('$title','$description','$content','$is_menu','$status')";
//    $result = mysqli_query($db, $query);

    $database = new Database();
    $result = $database->insert('settings',['some'=>$some,'any'=>$any,'status'=>$status]);

        header("Location:index.php?route=settings");


}

?>