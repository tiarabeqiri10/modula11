<?php
sessiom_start();

include_once('config.php');

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    if(empty($username) || empty($password)){
        echo "Please fill in all the fields";
    }else{
        $sql="SELECT * FROM users WHERE username=:username";
        $selectUsers=$conn->prepare($sqp);

        $selectUsers->bindParam('user')
    }
}