<?php
include "connection.php";
?>
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$str = "INSERT INTO list(name, email, pass)
VALUES ('$name','$email','$pass')";
$query = mysqli_query($conn, $str);

if($query){
    echo "data insert success";
}else{
    echo "data insert failed";
}
?>
<?php

?>
