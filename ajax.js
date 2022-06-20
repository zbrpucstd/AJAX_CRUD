//data insertion done here
$(".btn").click(function(){
    var name = $("#name").val();
    var email = $("#email").val();
    var pass = $("#pass").val();
    
    $.ajax({
        method: "POST",
        url: "insert.php",
        data: {
            name: name,
            email: email,
            pass: pass
        },
        success:function(data){
            // alert(data);
            read();
        }
    });
});

//read data from database
function read(){
    var read = "";

    $.ajax({
        method: "POST",
        url: "read.php",
        data:{read:read},
        success: function(data){
            $("#tbody").html(data);
        }
    });
}

//delete section work
function Delete(userId){
    $con = confirm("Are you sure?");
    
    if($con==true){
        $.ajax({
            url: "delete.php",
            method: "POST",
            data: {
                userId:userId
            },
            success: function(data){
                read();
            }
        });
    } 
}

//edit ajax section
function edit(userId){
    $.ajax({
        url: "edit.php",
        method: "GET",
        data:{userId:userId},
        success:function(data){
            $("body").html(data);
        }
    });
}

//onclick update functionality
function update_data(userId){
    var name = $("#name").val();
    var email = $("#email").val();
    var pass = $("#pass").val();

    $.ajax({
        url: "updateQuery.php",
        method: "GET",
        data: {name:name,email:email,pass:pass,userId:userId},
        success: function(data){    
            alert(data);
        }
    });
}

//read button work

//first method
// $("#read").click(function(){
//     var read = "";
//     $.ajax({
//         url: "read.php",
//         method: "POST",
//         data:{read:read},
//         success:function(data){
//             $("#tbody").html(data);
//         }
//     });
// });

//second method
function read(){
    var read = "";
    $.ajax({
        url: "read.php",
        method: "POST",
        data:{read:read},
        success:function(data){
            $("#tbody").html(data);
        }
    });
}
    

