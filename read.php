<?php
include "connection.php";
?>

<?php
$str = "SELECT * FROM list";
$query = mysqli_query($conn, $str);

while($row = mysqli_fetch_array($query)){ ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['pass']; ?></td>
        <td><button class="btn-sm btn-dark" id="del" onclick="Delete(<?php echo $row['id']; ?>)">DELETE</button></td>
        <td><button class="btn-sm btn-dark" id="del" onclick="edit(<?php echo $row['id']; ?>)">EDIT</button></td>
    </tr>
<?php }
?>