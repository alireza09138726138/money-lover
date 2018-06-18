$("#add_new_user").click(function(){
    $("#action").val("add");
	$("#name").val("");
	$("#buy").val("");
	$("#Price").val("");
    $("#id").val("");
    $("#add_new_user_modal").modal('show');
});
 
$("#submit").click(function(){
    var name = $('#name').val();
	var buy = $('#buy').val();
	var bank = $("input:radio[name='bank']:checked").val();
	var Account = $("input:radio[name='Account']:checked").val();
    var gender = $("input:radio[name='gender']:checked").val();
    var Price = $('#Price').val();
    var html = "";
    var action = $("#action").val();
    var id = $("#id").val();
    var valid = true;
 
     if(bank == "" || bank == null)
		 
           {  
		        valid = false;
                bootbox.alert(" bank is required");  
           }
		   else
    {
        $(".bank").html("");    
    }

	if(Account == "" || Account == null)
		 
           {  
		        valid = false;
                bootbox.alert(" Account is required");  
           }
		   else
    {
        $(".Account").html("");    
    }
   
 
    if(valid == true)
    {
        var form_data = {
            name : name,
			buy : buy,
			bank : bank,
			Account : Account,
			gender : gender,
			Price : Price,
            action : action,
            id : id
        };
         
        $.ajax({
            url : "insertprodu.php",
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
                         html += "<td style='color:blue;font-weight:bold;border-radius: 1px 10px 10px 1px;'>"+response['name']+"</td>";
					html += "<td style='color:rgb(60, 60, 60);font-weight:bold;border-radius: 1px 10px 10px 1px;'>"+response['amount']+"</td>";
					html += "<td style='color:orange;font-weight:bold;text-align:center;border-radius: 1px 10px 10px 1px;'>"+response['Comment']+"</td>";
                     html += "<td style='color:hsl(0, 100%, 25%);font-weight:bold;text-align:center;border-radius: 1px 10px 10px 1px;'>"+response['Price']+"</td>";
                        html += "<td>&nbsp;&nbsp;&nbsp;&nbsp;<a href='javascript:void(0);' onclick='delete_user("+response['id']+");'>&nbsp;<i class='glyphicon glyphicon-trash'></i></a></td>";
                        html += "<tr>";
                        $("#usersdata").append(html);
						$("<td style='color:black;font-weight:bold'><h1 style='text-color:red'>Reamain Cost</h1>&nbsp;&nbsp;&nbsp;"+response['cost']+"</td>").each(function(){
							
                         bootbox.alert($(this).text());
                         });
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
        url : "deleteprodu.php",
        method : "POST",
        data : form_data,
        success : function(response) {
            $(".user_"+id).css("background","red");
            $(".user_"+id).fadeOut(1000);
        }
    });
}
