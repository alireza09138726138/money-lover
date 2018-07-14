

	<?php 
		include("libs/smarty/Smarty.class.php");
        include 'configg.php';
		$flag=false;
        $fla=0;
		$f=0;
		$update_pwd=false; $wrong_credentials=false;
		if(isset($_POST['re_password']))
		{
			$old_pass = md5($_POST['old_pass']);
			$new_pas = md5($_POST['new_pass']);
		$new_pass=$_POST['new_pass'];
		$re_pass=$_POST['re_pass'];
		$query=mysqli_query($conn,"select password from user where password='".$old_pass."'");
		  $wrong_credentials = mysqli_num_rows($query) <= 0;
		  
		$data=mysqli_fetch_array($query);
		 $data_pwd=$data['password'];
		if($data_pwd==$old_pass){
		if($new_pass==$re_pass){
			$update_pwd=mysqli_query($conn,"update user set password='$new_pas' where password='".$old_pass."'");
			$update_pwd=1; 
			if($update_pwd){
			$fla=1;
		}
		else{
			$flag=1;
		}
		}
		else
		{
			$f=1;
		}}}
		
		$smarty = new smarty();
		$smarty->assign('fla', $fla);
		$smarty->assign('wrong_credentials', $wrong_credentials);
		$smarty->assign('f', $f);
		$smarty->display("change.tpl");
	?>
	
