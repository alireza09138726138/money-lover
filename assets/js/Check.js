$("#add_new_user").click(function(){  
    $("#action").val("add");
    $("#id").val("");
    $('#name').val("");
	  $('#person').val("");
	  $("#number").val(""); 
	  $("#pay").val("");
	  $('#Amount').val("");
	  $("#Comment").val("");
	  $("#pay6").val("");
	  $('#gender').val("");
	  $('#gender1').val("");
    $("#id").val("");
    $("#add_new_user_modal").modal('show');
});
 
$("#submit").click(function(){
    var name = $('#name').val();
	var person = $('#person').val();
	var number = $('#number').val();
	var pay = $('#pay').val();
	var Amount = $('#Amount').val();
	var Comment = $('#Comment').val();
	var pay6 = $('#pay6').val();
	var gender = $("input:radio[name='gender']:checked").val();
	var gender1 = $("input:radio[name='gender1']:checked").val();
    var html = "";
    var action = $("#action").val();
    var id = $("#id").val();
    var valid = true;
    
    if(valid == true)
    {
        var form_data = {			
            name : name,
			person : person,
			pay : pay,
			number : number,
			Amount : Amount,
			Comment : Comment,
			pay6 : pay6,
			gender : gender,
			gender1 : gender1,
            action : action,
            id : id
        };
         
        $.ajax({
            url : "insertcheck.php",
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
                        html += "<tr style='  background-color: lightgrey;font-style: italic;' class=user_"+response['id']+">"; 
   						
						html += "<td style='text-align:center;font-weight: bold;color:blue;'><h5>"+response['name']+"</h5></td>";
						 html += "<td style='text-align:center;font-weight: bold;color:orange'><h5>"+response['person']+"</h5></td>";
						 html += "<td style='text-align:center;font-weight: bold;color:red'><h5>"+response['number']+"</h5></td>";
						 html += "<td style='text-align:center;font-weight: bold;color:#a65959'><h4>"+response['Amount']+"</h4></td>";
						 html += "<td style='text-align:center;font-weight: bold;color:grey'><h5>"+response['gender']+"</h5></td>";
						 html += "<td style='text-align:center;font-weight: bold;color:#990000'><h5>"+response['gender1']+"</h5></td>";
						 html += "<td style='text-align:center;font-weight: bold;color:black'><h5>"+response['Comment']+"</h5></td>";
					html += "<td style='text-align:center;font-weight: bold;color:#8000ff'><abbr  title='Notice: Year /month /day'><h5>"+response['pay']+"</abbr></h5></td>";
					html += "<td style='text-align:center;font-weight: bold;color:#bf00ff'><h5>"+response['pay6']+"</h5></td>";
                        html += "<td style='text-align:center;font-family: ;color:dark grey'><h5><abbr  title='Edit detail'><a style='color:black' href='javascript:void(0);' onclick='edit_user("+response['id']+");'><i class='glyphicon glyphicon-pencil'></i></a></abbr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<abbr  title='Notice: as soon click your choose will become delete'><a href='javascript:void(0);' style='color:black' onclick='delete_user("+response['id']+");'><i class='glyphicon glyphicon-trash'></i></a></abbr></h5></td>";
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
        url : "editcheck.php",
        method : "POST",
        data : form_data,
        dataType : "json",
        success : function(response) {
            $('#name').val(response['name']);
			$('#person').val(response['person']);
			$('#number').val(response['number']);
			$('#pay').val(response['pay']);
			$('#pay6').val(response['pay6']);
			$('#Amount').val(response['Amount']);
			 $('#Comment').val(response['Comment']);
             $('.gender').each(function(){
                if($(this).val() == response['gender'])
                {
                    $(this).prop("checked",true);
                }
            });
            $('.gender1').each(function(){
                if($(this).val() == response['gender1'])
                {
                    $(this).prop("checked",true);
                }
            });			
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
        url : "deletecheck.php",
        method : "POST",
        data : form_data,
        success : function(response) {
            $(".user_"+id).css("background","red");
            $(".user_"+id).fadeOut(1000);
        }
    });
}

