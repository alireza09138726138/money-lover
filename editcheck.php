<?php 
include 'configg.php';
$id = '';
if(isset($_POST['id']) && !empty($_POST['id']))
{
    $id = $_POST['id'];
}
 
$sql = "SELECT * FROM `checkk` WHERE id = '$id' ";
$query = mysqli_query($conn, $sql);
 
if($query)
{
    $data = mysqli_fetch_assoc($query);
    echo json_encode($data);
}
 
?>
