<?php
include 'configg.php';
$bank = $Account = $cost = $Limite = $error = $action = $id = "";
$valid = true;
if(isset($_POST['bank']) && !empty($_POST['bank']))
{
    $bank = mysqli_real_escape_string($conn,$_POST['bank']);
	$Account = mysqli_real_escape_string($conn,$_POST['Account']);
	$sql3 = "SELECT * FROM produ WHERE Account='".$Account."' AND bank='".$bank."' AND Price='' ORDER BY id DESC LIMIT 0 , 1";
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
    $error .= "* bank name is required.\n";
    $bank = '';
}
 
if(isset($_POST['Account']) && !empty($_POST['Account']))
{
    $Account = mysqli_real_escape_string($conn,$_POST['Account']);
}
else
{
    $valid = false;
    $error .= "* Account name is required.\n";
    $Account = '';
}
 if(isset($_POST['cost']) && !empty($_POST['cost']))
{
    $cost = mysqli_real_escape_string($conn,$_POST['cost']);
}
else
{
    $valid = false;
    $error .= "* cost some is required.\n";
    $cost = '';
}
if(isset($_POST['Limite']) && !empty($_POST['Limite']))
{
    $Limite = mysqli_real_escape_string($conn,$_POST['Limite']);
	
					   
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
        $sql = "INSERT INTO produ (id, bank,Account,cost,Limite) VALUES (NULL, '$bank', '$Account', '$cost', '$Limite')";
        $query = mysqli_query($conn, $sql);
        if($query)
        {
            $retrive_sql = "SELECT * FROM produ WHERE id = (SELECT MAX(id) FROM produ)";
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