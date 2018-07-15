<?php 
include 'configg.php';
$id = '';
if(isset($_POST['id']) && !empty($_POST['id']))
{
    $id = $_POST['id'];
}
 
$sql = "DELETE FROM `checkk` WHERE id = '$id'";
$query = mysqli_query($conn, $sql);
 
if($query)
{
    echo "Data successfully removed.";
}
?>
