<?php
//include "../config/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(isset($_FILES['image'])){
        $img = "img".rand(0000,9999)."blog.jpg";
        move_uploaded_file($_FILES['image']['tmp_name'],'./uploads/'.$img);
    }
    $image = $img;
    $title = $_POST['title'];
    $description = $_POST['description'];
    $content = $_POST['content'];
    $is_monset = $_POST['is_monset'];
    $status = $_POST['status'];
    $cat_id = $_POST['cat_id'];

    $database = new Database();
    $result = $database->insert('blog',['title'=>$title,'description'=>$description,'content'=>$content,'is_monset'=>$is_monset,'status'=>$status,'image'=>$image,'cat_id'=>$cat_id]);

//    $query = "INSERT INTO blog(title,description,content,is_monset,status,image,cat_id) VALUES('$title','$description','$content','$is_monset','$status','$image','$cat_id')";
//    $result = mysqli_query($db, $query);

        header("Location:index.php?route=blog");


}

?>