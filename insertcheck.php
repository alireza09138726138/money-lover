<?php
include 'configg.php';
$name = $person = $gender1 = $number = $Amount = $Comment = $pay = $pay6 = $error = $action = $id = "";   
$valid = true;
$include =include('session.php');

if(isset($_POST['name']))
{
    $name = mysqli_real_escape_string($conn,$_POST['name']);
}

if(isset($_POST['person']) && !empty($_POST['person']))
{
    $person = mysqli_real_escape_string($conn,$_POST['person']);
}
else
{
    $valid = false;
    $error .= "<h3>person name is not valid<h3>";
    $person = '';
}
if(isset($_POST['Comment']))
{
    $Comment = mysqli_real_escape_string($conn,$_POST['Comment']);
}

if(isset($_POST['pay']) && !empty($_POST['pay']))
{
    $pay = mysqli_real_escape_string($conn,$_POST['pay']);

}


if(isset($_POST['pay6']) && !empty($_POST['pay6']))
{
    $pay6 = mysqli_real_escape_string($conn,$_POST['pay6']);

}

if(isset($_POST['number']))
{
    $number = mysqli_real_escape_string($conn,$_POST['number']);
} 
if(isset($_POST['Amount']))
{
    $Amount = mysqli_real_escape_string($conn,$_POST['Amount']);
}
if(isset($_POST['gender1']))
{
    $gender1 = $_POST['gender1'];
}
if(isset($_POST['action']))
{
    $action = $_POST['action'];
}

if(isset($_POST['gender']) && !empty($_POST['gender']))
{
    $gender = $_POST['gender'];
}
 else
{
    $valid = false;
    $error .= "<h3>Check Kind is not valid<h3>";
    $gender = '';
}
if(isset($_POST['id']))
{
    $id = $_POST['id'];
}

if($valid)
{                                                                                                                                                                                                        
    if($action == 'add')                                                                                
    {
$sql =
"INSERT INTO `checkk` (`id`, `name`, `person`, `number`, `Amount`, `Comment`,`gender`,`gender1`, `pay`, `datealarm`, `user_id`, `username`) VALUES (NULL,'$name', '$person','$number', '$Amount', '$Comment','$gender', '$gender1', '$pay', '$pay6','$login_id','$login_session')";     
        $query = mysqli_query($conn, $sql);
        if($query)
        {
			
            $retrive_sql = "SELECT * FROM `checkk` WHERE id = (SELECT MAX(id) FROM check1)";
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
 
    if($action == 'edit')     
    {
$sql = "UPDATE `checkk` SET `name` = '$name', `person` = '$person', `number` = '$number',`pay` = '$pay', `Amount` = '$Amount', `Comment` = '$Comment', `gender` = '$gender', `datealarm` = '$pay6', `gender1` = '$gender1' WHERE id = '$id' ";  
        $query = mysqli_query($conn, $sql);
        if($query)
        {
            $data = array("valid"=>true, "msg"=>"Data successfully updated.");
            echo json_encode($data);
        }
        else
        {
            $data = array("valid"=>false, "msg"=>"Data not updated.");
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
