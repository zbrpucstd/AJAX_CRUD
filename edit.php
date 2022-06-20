<?php
    include "connection.php";
?>
<?php
   $id = $_GET['userId'];

   $select = "SELECT * FROM list WHERE id=$id";
   $result = mysqli_query($conn, $select);
   $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
</head>
<body>
    <div class="container">
            <div class="row mt-3">
                <h1 class="mt-2">Edit Page</h1>
                <input id="name" type="text" value="<?php echo $row['name'] ?>" placeholder="Enter Name"> <br>
                <input id="email" type="email" value="<?php echo $row['email'] ?>" placeholder="Enter Email"> <br>
                <input id="pass" type="text" value="<?php echo $row['pass'] ?>" placeholder="Enter Password"> <br>
                <button class="btn btn-dark mt-3" onclick="update_data(<?php echo $row['id']?>)">EDIT DATA</button>
                <button class="btn btn-dark mt-3" onclick="home()">GO HOME</button>
            </div>
    </div>
    <script>
        //home function
        function home(){
            var read = "";
            $.ajax({
                url: "index.php",
                method: "POST",
                data:{read:read},
                success:function(data){
                    $("body").html(data);
                }
            });
        }
    </script>
</body>
</html>