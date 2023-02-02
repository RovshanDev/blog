<?php
//include "./../config/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $status = $_POST['status'];

    $database = new Database();
//    $query = "INSERT INTO admin(name,surname,username,email,password,status) VALUES('$name','$surname','$username','$email','$password','$status')";
//    $result = mysqli_query($db, $query);
    $result = $database->insert('admin',['name'=>$name,'surname'=>$surname,'email'=>$email,'username'=>$username,'password'=>$password,'status'=>$status]);

   header("Location:index.php?route=admins");

}
