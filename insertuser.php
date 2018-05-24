<?php
include 'configg.php';
$username = $password = $action = $id = "";
$valid = true;
if(isset($_POST['username']) && !empty($_POST['username']))
{
   $username = mysqli_real_escape_string($conn,$_POST['username']);
      
}
else
{
    
    $valid = false;
    $error .= "* username is required.\n";
    $username = '';
}
 

if(isset($_POST['password']) && !empty($_POST['password']))
{
  $password = mysqli_real_escape_string($conn,$_POST['password']); 
}
else
{
    
    $valid = false;
    $error .= "* password is required.\n";
    $password = '';   
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
        $sql = "INSERT INTO user (id, username, password) VALUES (NULL, '$username', '$password')";
        $query = mysqli_query($conn, $sql);
        if($query)
        {
            $retrive_sql = "SELECT * FROM user WHERE id = (SELECT MAX(id) FROM `user`)";
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
        $sql = "UPDATE `user` SET username = '$username', password = '$password' WHERE id = '$id' ";
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