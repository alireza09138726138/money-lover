$("#add_new_user").click(function(){
    $("#action").val("add");
    $("#id").val("");
    $("#add_new_user_modal").modal('show');
});
 
$("#submit").click(function(){
    var password = $('#password').val();
     var username = $('#username').val();
 
    var html = "";
    
    var action = $("#action").val();
    var id = $("#id").val();
    var valid = true;
	if(username == "" || username == null)
    {
        valid = false;
        $(".username").html("<p style='color:red'></i>* This field is required.</i></p>");
    }
    else
    {
        $(".username").html("");    
    }
     if(password == "" || password == null)
    {
        valid = false;
        $(".password").html("<p style='color:red'></i>* This field is required.</i></p>");
    }
    else
    {
        $(".password").html("");    
    }
    
 
    if(valid == true)
    {
        var form_data = {
            username : username,
            password : password,
            action : action,
            id : id
        };
         
        $.ajax({
            url : "insertuser.php",
            type : "POST",
            data : form_data,
            dataType : "json",
            success: function(response){
                if(response['valid']==false)
                {
                    bootbox.alert(response['msg']);
                }
                else
                {
                    if(action == 'add')
                    {
                        $("#add_new_user_modal").modal('hide');
                        html += "<tr class=user_"+response['id']+">";
                        html += "<td style='text-align:center;'><h3 style='background-color:green;color:white;padding:5px 5px;'><i>"+response['username']+"</i></h3></td>";
                       html += "<td style='text-align:center;'><h3 style='background-color:green;color:white;padding:5px 5px;'><i>"+response['password']+"</i></h3></td>";
                        html += "<td style='text-align:center;'><h3 style='background-color:green;color:white;padding:5px 5px;'><a href='javascript:void(0);' style='color:lightgrey' onclick='edit_user("+response['id']+");'><i class='glyphicon glyphicon-pencil'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='javascript:void(0);' style='color:lightgrey' onclick='delete_user("+response['id']+");'>&nbsp;<i class='glyphicon glyphicon-trash'></i></a></h3></td>";
                        html += "<tr>";
                        $("#usersdata").append(html);
                    }
                    else
                    {
                        window.location.reload();
                    }
                }
            }
        });
    }
    else
    {
        return false;
    }
});
 

 
function edit_user(id) {
    var form_data = {
        id : id 
    };
    $.ajax({
        url : "edituser.php",
        method : "POST",
        data : form_data,
        dataType : "json",
        success : function(response) {
            $('#username').val(response['username']);  
             $('#password').val(response['password']);
            $("#id").val(response['id']);
            $("#add_new_user_modal").modal('show');
            $("#action").val("edit");
        }
    });
}
 
function delete_user(id) {
    var form_data = {
        id : id 
    };
    $.ajax({
        url : "deleteusers.php",
        method : "POST",
        data : form_data,
        success : function(response) {
            $(".user_"+id).css("background","red");
            $(".user_"+id).fadeOut(1000);
        }
    });
}

 function myFunction() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
