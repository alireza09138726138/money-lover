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
 





 <fieldset>
		<legend><br>Register</legend>
   <form action="register.php" method="post" >
   
      <dl>
			<dt>
			UserName :
			</dt>
				<dd>
				<input name="username" type="text" id="fname" placeholder="Your name.." required/>
				</dd>
		</dl>
		
		<dl>
			<dt>
			Password :
			</dt>
				<dd>
				<input type="password" name="password" id="fname" placeholder="Your password.." required/>
				</dd>
		</dl>
		
		<dl>
			<dt>
			Email:
			</dt>
				<dd>
				<input name="email" type="text" id="fname" placeholder="Your email.." required/>
				</dd>
		</dl> 
		
		<p align="center"><input type="submit" value="Register" class='btn'/>  
</p>
<dl>
		<a href="logout.php" class='btn1' >Log Out</a>
		</dl>		
   </form>
   
   {if $result}
<h1 class='colorblack'>
Register success 
</h1>
{/if}
{if $fla}
<h1 class='colorblack'>
Register token 
</h1> 
{/if}
   </fieldset>
   </body>
 </html>