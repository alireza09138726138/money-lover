<?php
include 'configg.php';  
$bank = $Account = $error = $cost = $Limite = $action = $id = "";    
$valid = true;

$include =include('session.php');

if(isset($_POST['bank']) && !empty($_POST['bank']))
{
    $bank = mysqli_real_escape_string($conn,$_POST['bank']);
	$Account = mysqli_real_escape_string($conn,$_POST['Account']);
	$sql3 = "SELECT * FROM `bank` WHERE Account='".$Account."' AND bank='".$bank."'";
					$query3 =  mysqli_query($conn, $sql3);
				
                    $rows3 = mysqli_num_rows($query3);
					
                if($rows3>0)
                    { 
                     $valid = false;
                     $error .= "<h2 style='color:red'><i>Error:</i></h2><h4> Beacause your Account already taken, please enter another & if you want to ubdate go to cost <span style='color:orange'>update page</span></h4>";
                     $Account = '';}
}
else
{
    $valid = false;
    $error .= "* bank is required.\n";
    $bank = '';
}
 
if(isset($_POST['Account']) && !empty($_POST['Account']))
{
    $Account = mysqli_real_escape_string($conn,$_POST['Account']);
}
else
{
    $valid = false;
    $error .= "* Account is required.\n";
    $Account = '';
}
 
 if(isset($_POST['cost']) && !empty($_POST['cost']))
{
    $cost = mysqli_real_escape_string($conn,$_POST['cost']);
	if($cost>0){
		
	}
	else{
    $valid = false;
    $error .= "*<span style='color:red'>ERROR :</span>&nbsp;cost is less then 1: MORE CARE TO NUMBER.\n";
    $cost = '';
  }
}
else
{
    $valid = false;
    $error .= "* cost is required.\n";
    $cost = '';
}

if(isset($_POST['Limite']) && !empty($_POST['Limite']))
{
    $Limite = mysqli_real_escape_string($conn,$_POST['Limite']);
	if($Limite>0){
		
	}
	if($Limite<100){
		
	}
	else
{
    $valid = false;
    $error .= "* Limit BETWEEN 1 & 99 NO MORE.\n";
    $Limite = '';
}
}


if(isset($_POST['action']) && !empty($_POST['action']))
{
    $action = $_POST['action'];
}
else
{
    $action = "";
}
 
if(isset($_POST['id']) && !empty($_POST['id']))
{
    $id = $_POST['id'];
}
else
{
    $id = "";
}
 
if($valid)
{
    if($action == 'add')
    {
$query = mysqli_query($conn,"INSERT INTO `bank` (id, bank,Account,cost,Limite,user_id,username) VALUES (NULL, '$bank','$Account','$cost','$Limite','$login_id','$login_session')");  
$query = mysqli_query($conn,"INSERT INTO `produ` (id, bank,Account,cost,Limite,user_id,username) VALUES (NULL,'$bank','$Account','$cost','$Limite','$login_id','$login_session')");
        if($query)
        {
            $retrive_sql = "SELECT * FROM `bank` WHERE id = (SELECT MAX(id) FROM bank)";
            $retrive_query = mysqli_query($conn, $retrive_sql);
            if($retrive_query)
            {
                $data = mysqli_fetch_assoc($retrive_query);
                echo json_encode($data);
            }
        }
        else
        {
            $data = array("valid"=>false, "msg"=>"Data not inserted.");
            echo json_encode($data);
        }
    }
 
 
}
else
{
    $resp = [];
    $resp = array("valid"=>false, "msg"=>$error);
        echo json_encode($resp);
}
 
?>
