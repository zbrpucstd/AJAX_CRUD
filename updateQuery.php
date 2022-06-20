<?php 
include "connection.php";
?>

<?php
    $name = $_GET['name'];
    $email = $_GET['email'];
    $pass = $_GET['pass'];
    $id = $_GET['userId'];

    $update = "UPDATE list SET name='$name',email='$email',pass='$pass' 
    WHERE id=$id";
    $result = mysqli_query($conn, $update);
    
    if($result){
        echo "Update Successful";
    }else{
        echo "Update Failed";
    }
?>