<?php
include "connection.php";
?>

<?php
$userId = $_POST['userId'];

$str = "DELETE FROM list WHERE id = $userId";
$result = mysqli_query($conn, $str);

if($result){
    echo "Delete confirmed";
}
else{
    echo "Failed to delete";
}
?>