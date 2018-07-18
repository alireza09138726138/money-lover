<!DOCTYPE html>
<html>
<head>
<title>Money lover</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1"> 
<link href="assets/style/stylee.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="assets/style/picture/pexels-photo-221174.png.jpg"/>

</head>

<body id="body">
<center>
    <h3 class="colorwhite font">Money lover</h3>
 </center>

	<fieldset >
		<legend><br>Change Password</legend>
	
	
	<form method="post">
		<dl>
			<dt>
				Old Password
			</dt>
				<dd>
					<input type="password" name="old_pass" placeholder="" value="" id='fname' required />
				</dd>
		</dl>
		<dl>
			<dt>
				New Password
			</dt>
				<dd>
					<input type="password" name="new_pass" placeholder="" value="" id='fname' required />
				</dd>
		</dl>
		<dl>
			<dt>
				Retype New Password
			</dt>
				<dd>
					<input type="password" name="re_pass" placeholder="" id='fname' value="" required />  
				</dd>
		</dl>
		
		<p align="center">
			<input type="submit" class="btn" value="Reset" name="re_password" />
		</p>
		<dl>
		<a href="logout.php" class='btn1' >Log Out</a>
		</dl>
	</form>
{if $wrong_credentials}
<h1 style='color:black'>
old password not 
</h1> 
{/if}
 
{if $fla}
<h1 style='color:black'>
Updated 
</h1> 
{/if}

{if $f}
<h1 style='color:black'>
retype password wrong 
</h1> 
{/if}
	</fieldset>
	
</body>
</html>
