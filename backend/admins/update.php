<?php

include "../../config/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_GET['id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $status = $_POST['status'];

    $password = $_POST['password'];

    $database = new Database();

//    if (!empty($password)) {
//        $password = md5($password);
//        $query = "UPDATE  admin SET name='$name',surname='$surname', username='$username', email='$email',status = '$status',password='$password' WHERE id='$id'";
//    } else {
//        $query = "UPDATE  admin SET name='$name',surname='$surname', username='$username', email='$email',status = '$status' WHERE id='$id'";
//    }

    if(!empty($password)){
        $password = md5($password);
        $database->update('admin',['name'=>$name,'surname'=>$surname,'email'=>$email,'username'=>$username,'password'=>$password,'status'=>$status],"$id");
    } else {
        $database->update('admin',['name'=>$name,'surname'=>$surname,'email'=>$email,'username'=>$username,'status'=>$status],"$id");
    }

       header("Location:../../backend/index.php?route=admins");


}