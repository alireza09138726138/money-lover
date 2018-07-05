<!DOCTYPE html>
<html>
<head>
<title>Change Password</title>
<style type="text/css">
fieldset {
	width:500px;
	border:5px dashed #CCCCCC;
	margin:0 auto;
	border-radius:5px;
}

legend {
	color: blue;
	font-size: 25px;
}

dl {
	float: right;
	width: 390px;
}

dt {
	width: 180px;
	color: brown;
	font-size: 19px;
}

dd {
	width:200px;
	float:left;
}

dd input {
	width: 200px;
	border: 2px dashed #DDD;
	font-size: 15px;
	text-indent: 5px;
	height: 28px;
}

.btn {
	color: #fff;
	background-color: dimgrey;
	height: 38px;
	border: 2px solid #CCC;
	border-radius: 10px;
	float: right;
}

</style>
</head>

<body>
	<fieldset>
		<legend>Change Password</legend>
	<?php 
		include 'configg.php';
		if(isset($_POST['re_password']))
		{
			$old_pass = md5($_POST['old_pass']);
			$new_pas = md5($_POST['new_pass']);
		$new_pass=$_POST['new_pass'];
		$re_pass=$_POST['re_pass'];
		$chg_pwd=mysqli_query($conn,"select password from user where password='".$old_pass."'");
		$chg_pwd1=mysqli_fetch_array($chg_pwd);
		$data_pwd=$chg_pwd1['password'];
		if($data_pwd==$old_pass){
		if($new_pass==$re_pass){
			$update_pwd=mysqli_query($conn,"update user set password='$new_pas' where password='".$old_pass."'");
			echo "<script>alert('Update Sucessfully'); window.location=''</script>";
		}
		else{
			echo "<script>alert('Your new and Retype Password is not match'); window.location=''</script>";
		}
		}
		else
		{
		echo "<script>alert('Your old password is wrong'); window.location=''</script>";
		}}
	?>
	
	<form method="post">
		<dl>
			<dt>
				Old Password
			</dt>
				<dd>
					<input type="password" name="old_pass" placeholder="Old Password..." value="" required />
				</dd>
		</dl>
		<dl>
			<dt>
				New Password
			</dt>
				<dd>
					<input type="password" name="new_pass" placeholder="New Password..." value=""  required />
				</dd>
		</dl>
		<dl>
			<dt>
				Retype New Password
			</dt>
				<dd>
					<input type="password" name="re_pass" placeholder="Retype New Password..." value="" required />
				</dd>
		</dl>
		
		<p align="center">
			<input type="submit" class="btn" value="Reset Password" name="re_password" />
		</p>
	</form>
	
	<?php
	
	?>
	</fieldset>
</body>
</html>
