$("#add_new_user").click(function(){    
    $("#action").val("add");
	$("#bank").val("");
	$("#Account").val("");
	$("#cost").val("");
	$("#Limite").val("");
    $("#id").val("");
    $("#add_new_user_modal").modal('show');
});
 
$("#submit").click(function(){
    var bank = $('#bank').val();
    var Account = $('#Account').val();
    var cost = $('#cost').val();
	var Limite = $('#Limite').val();
    var html = "";
    var action = $("#action").val();
    var id = $("#id").val();
    var valid = true;
     
    
 
    if(valid == true)
    {
        var form_data = {
            bank : bank,
			Account : Account,
			cost : cost,
			Limite : Limite,
            action : action,
            id : id
        };
         
        $.ajax({
            url : "insertaccount.php",
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
                        html += "<tr style='  background-color: lightgrey;' class=user_"+response['id']+">";
                        html += "<td style='text-align:center;font-weight: bold;color:blue'><h3><i><b>"+response['bank']+"</b></i></h3></td>";
						html += "<td style='text-align:center;font-weight: bold;color:red'><h3><i><b>"+response['Account']+"</b></i></h3></td>";
                        html += " <td style='text-align:center;font-family: ;color:dark grey'><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='javascript:void(0);' onclick='delete_user("+response['id']+");'><i class='glyphicon glyphicon-trash'></i></a></h3></td>";
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
 

 
function delete_user(id) {
    var form_data = {
        id : id 
    };
    $.ajax({
        url : "deleteaccoun.php",
        method : "POST",
        data : form_data,
        success : function(response) {
            $(".user_"+id).css("background","red");
            $(".user_"+id).fadeOut(1000);
        }
    });
}
