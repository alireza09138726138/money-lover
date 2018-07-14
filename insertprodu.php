<?php
include 'configg.php';
$name = $bank = $Account = $buy = $Price = $Limit = $Limite = $error = $action = $id = ""; 
   
$valid = true;
$include =include('session.php');

if(isset($_POST['name']) && !empty($_POST['name']))
{
    $name = mysqli_real_escape_string($conn,$_POST['name']);
}
else
{
    $valid = false;
    $error .= "<h3><span style='color:red'><i>Product Name</i></span> is required.\n</h3>";
    $name = '';
}

 if(isset($_POST['bank']) && !empty($_POST['bank']))
{
    $bank = $_POST['bank']; 
	$Account = mysqli_real_escape_string($conn,$_POST['Account']);
	$sql3 = "SELECT * FROM produ WHERE Account='".$Account."' AND bank='".$bank."' AND user_id='".$login_id."'";
					$query3 =  mysqli_query($conn, $sql3);
				
                    $rows3 = mysqli_num_rows($query3);
					
                    if($rows3>0)
                    { 
				
                     }
					 else{
                     $valid = false;
                     $error .= "<h3 style='color:red'>ERROR:</h3><h4> Beacause your Account there isnt</h4>";
                     $Account = '';}
}
else
{
	$valid = false;
    $error .= "<h3><span style='color:red'><i>bank Name</i></span> is required.\n</h3>";
    $bank = "";   
}
if(isset($_POST['Account']) && !empty($_POST['Account']))
{
	 			
    $Account = $_POST['Account'];
	
}
else
{
	$valid = false;
    $error .= "<h3><span style='color:red'><i>Account</i></span> is required.\n</h3>";
    $Account = "";   
}

 if(isset($_POST['buy']) && !empty($_POST['buy']))
{
	$buy = mysqli_real_escape_string($conn,$_POST['buy']);
}

if(isset($_POST['gender']) && !empty($_POST['gender']))
{
    $gender = $_POST['gender'];
}
else
{
    $gender = "";   
}

if(isset($_POST['Price']) && !empty($_POST['Price']))
{
	
	$Price =mysqli_real_escape_string($conn,$_POST['Price']);
 $sql1 = "select cost FROM produ WHERE Account='".$Account."' AND bank='".$bank."' AND user_id='".$login_id."' ORDER BY id DESC LIMIT 0,1";
  
					$query1 =  mysqli_query($conn, $sql1);
				$row = mysqli_fetch_array($query1);
				$cost=$row['cost'];
                    $rows1 = mysqli_num_rows($query1);
					if($rows1>0)
                    {
$query2 =  mysqli_query($conn, 
"SELECT sum(Price) FROM produ WHERE bank='".$bank."' AND Account='".$Account."' AND !Price='' AND id > id =(SELECT MAX(id) FROM produ WHERE bank='".$bank."' AND Account='".$Account."' AND Price=''  AND user_id='".$login_id."' ORDER BY id DESC LIMIT 0,1); "); 
            $data1 = mysqli_fetch_array($query2);
			$Price1 =$data1['sum(Price)'];
			$Price2 = $Price + $Price1;
						if($cost>=$Price){
							
						$cost1 = $cost - $Price2;
		
						
						}else{
					
			         $valid = false;
                     $error .= "<h3><span style='color:red'><i>Data not inserted.</i></span><br> Beacause your Price is much then your cost</h3>";
                     $Price = '';
					}
						
					}
					
					
}
  else
{
                     $valid = false;
                     $error .= "<h3><span style='color:red'><i>Data not inserted.</i></span><br> Beacause price is empty or Price is =0 (zero)</h3>";
                     $Price = '';
 
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
$date=date("Y");$date2=date("m");$date3=date("d");$date1=date("Y-m-d");
if($valid)
{
   if($action == 'add')            
    {     
        
$query = mysqli_query($conn,"INSERT INTO produ (id, name, bank,amount,Comment,Price,cost,Account,year,month,day,date,user_id,username) VALUES (NULL,'$name','$bank', '$buy', '$gender', '$Price', '$cost1','$Account', '$date','$date2','$date3','$date1','$login_id','$login_session');");
        if($query)
        {
            $retrive_sql = "SELECT * FROM produ WHERE id = (SELECT MAX(id) FROM produ) AND user_id='".$login_id."'";
		
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
